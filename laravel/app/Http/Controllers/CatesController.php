<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Requests\InsertCateRequest;
use App\Http\Requests\UpdateShopTypeRequest;
use App\Http\Controllers\Controller;

class CatesController extends Controller
{
    //成员属性
    public $tableName = "cates";
    public $types = [];

    /**
     * 分类添加显示页面
     */
    public function getAdd()
    {
        // dd($type);
        return view("admin.cate.add",[
            'title'=>"添加分类",
            ]);

    }

    public static function getFen()
    {
        $type = DB::table("cates")
            ->select(DB::raw('*,concat("path",",","id") as paths'))
            ->orderBy("paths")
            ->get();
        
        foreach ($type as $key => $value) {
            // 拆分数组
            $arr = explode(',',$value->path);
            $num = count($arr)-1;
            $prefix = str_repeat("---|",$num);
            $value->name = $prefix.$value->name;
        }
        return $type;
    }

    /**
     * 分类的插入操作
     */
    public function postInsert(InsertCateRequest $request)
    {
        //获取参数
        $data = $request->except(["_token"]);
        //判断是否为顶级分类
        $data = $this->getData($data);
        //执行数据库插入
        if(DB::table($this->tableName)->insert($data)){
            return redirect("/admin/cate/index")->with("success","添加成功");
        }else{
            return back()->with("error","添加失败");
        }


    }

    /**
     * 处理数据
     */
    private function getData($data)
    {
        // 判断当前分类是否为顶级分类
        if($data["pid"] == '0'){
            $data["path"] = '0';
        }else{
            // 读取父类的分类
            $fen = DB::table($this->tableName)->where('id',$data["pid"])->first();
            //拼接path路径
            $data["path"] = $fen->path.",".$fen->id;
        }
        return $data;
    }

    /**
     * 分类列表页
     */
    public function getIndex(Request $request)
    {
          //数据读取
        $types = DB::table($this->tableName.' as a')
            ->select(DB::raw('a.*,b.name as names,concat(a.path,",",a.id) as paths'))
            ->leftJoin($this->tableName.' as b','a.pid','=','b.id')
            ->orderBy('paths')
            ->where(function($query)use($request){
                if(!empty($request)){
                    $query->where('a.name','like','%'.$request->input('keywords').'%');
                }
            })
            ->paginate($request->input('num', 10));

        foreach ($types as $key => $value) {
            //拆分数组
            $arr = explode(',', $value->path);
            $num  = count($arr)-1;
            $prefix = str_repeat('|-----', $num);
            $value -> name = $prefix. $value->name;
        }
        //模板解析
        return view('admin.cate.list', [
            'types'=>$types,
            'title'=>'分类列表',
            'request' => $request
        ]);

    }

    /**
     * 分类的编辑页面
     */
    public function getEdit(Request $request)
    {
        // 读取当前表中的信息
        $type = DB::table($this->tableName)->where('id',$request->input("id"))->first();
        // 判断
        if(empty($type)){
            abort("404");
        }
        //获取 所有 的 分类名
        $info = $this->getFen();
        // dd($info);
        return view("admin.cate.edit" ,[
            "title"=>"分类修改",
            "type"=>$type,
            "info"=>$info,
        ]);
    }

    /**
     * 分类更新操作
     */
    public function postUpdate(UpdateShopTypeRequest $request)
    {
        // 获取参数
        $data = $request->only(["pid","name"]);
        //
        $data = $this->getData($data);
        //更新操作
        if(DB::table($this->tableName)->where("id",$request->input("id"))->update($data)){
            return redirect("/admin/cate/index")->with("success","更成功");
        }else{
            return back()->with("error","更新失败");
        }

    }

    /**
     * 分类的删除
     */

    public function getDelete(Request $request)
    {
        // 分类获取 
        $id = $request->input("id");
        //获取path
        $type = DB::table($this->tableName)->where("id",$id)->first();
        $prefix = $type->path.",".$type->id;
        //删除子类
        DB::table($this->tableName)->where("path","like",$prefix."%");
        //
        if(DB::table($this->tableName)->where("id",$id)->delete()){
            return back()->with("success","删除成功");
        }else{
            return back()->with("error","删除失败");
        }
    }

    /**
     * 处理 ajax 请求
     */
    public function getAjaxUpdate(Request $request)
    {
        // 获取参数
        $data = $request->only(["status"]);
        // 更新操作
        $res = DB::table($this->tableName)->where('id',$request->input("id"))->update($data);
        if($res){
            echo 1;die;
        }else{
            echo 0;die;
        }
    }

    /**
     * 添加子分类
     */
    public function getAddSub(Request $request)
    {
        //获取父级类别名
        $res = DB::table($this->tableName)->where("id",$request->input("id"))->first();
        // dd($res);
        // 返回
        return view("admin.cate.addSub", [
            'title' => "子分类添加",
            "res" => $res,
        ]);
    }

}