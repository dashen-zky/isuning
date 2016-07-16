<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Config;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CateController;

class ArticleController extends Controller
{
    /**
     * 展现一个列表
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //读取文章的信息
        $articles = DB::table("articles as a")
            ->leftJoin("cates as c","c.id","=","a.cate_id")
            ->select(DB::raw("a.id,a.title,a.intro,a.status,a.img,a.cate_id,c.name"))
            ->where(function($query)use($request){
                //判断当前rearch参数
                $search = $request->input("search");
                if(!empty($request)){
                    $query->where('a.title','like','%'.$search.'%');
                }
            })
            ->orderBy('a.id','asc')
            ->paginate($request->input('num', 10));
        // dd($articles);
        //模板解析
        return view('admin.article.list', [
            'articles'=>$articles,
            'title'=>'文章的列表页',
            'request' => $request
        ]);
    }

    /**
     * 添加页操作.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 获取分类的信息
        $type = CateController::getFen();
        return view("admin.article.add",[
            'title'=>"文章的添加",
            "type"=>$type,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        // dd($request->all());
        // 获取参数
        $data = $request->except(["_token"]);
        //文件上传操作
        if($request->hasFile("img")){
            $dir = Config::get("app.upload_dir");
            $name = Config::get("app.upload_img_name").'.'.$request->file("img")->getClientOriginalExtension();
            $request->file("img")->move($dir,$name);
            //修改图片路径
            $data['img'] = trim($dir.$name,".");
        }


        $date["created_at"] = date("Y-m-d H:i:s");
        $date["updated_at"] = date("Y-m-d H:i:s");

        // 插入数据库操作
        if(DB::table("articles")->insert($data)){
            return redirect("/admin/article")->with("success","添加成功");
        }else{
            return back()->with("error","添加失败");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        // 读取数据 显示模板
        $info = DB::table("articles")->where("id",$id)->first();        
        //解析模板
        return view("admin.article.edit", [
            "title"=>"文章的修改",
            "info"=>$info,
            "type"=>CateController::getFen()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, $id)
    {
        $data = $request->except(["_token","_method"]);
        //文件上传操作
        if($request->hasFile('img')){
            $dir = Config::get('app.upload_dir');
            $name = Config::get('app.upload_img_name').'.'.$request->file('img')->getClientOriginalExtension();
            $request->file('img')->move($dir, $name);
            //修改图片的路径 
            $data['img'] = trim($dir.$name,'.');
        }
        $date["updated_at"] = date("Y-m-d H:i:s");
        // dd($data);
        // 插入数据库操作
        if(DB::table("articles")->where('id',$id)->update($data)){
            return redirect("/admin/article")->with("success","添加成功");
        }else{
            return back()->with("error","添加失败");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 获取文章信息
        $res = DB::table("articles")->where('id',$id)->first();
        // 删除主图片
        if(!empty($res->img)){
            unlink($res->img);
        }
        // 使用正则匹配文章内容
        $preg = '/<img src="(.*)" t.*>/';

        preg_match($preg, $res->content, $result);

        // dd($result);
        if(!empty($result[1])){
            foreach($result[1] as $k=>$v){
                unlink($v);
            }
        }

        if(DB::table("articles")->where("id",$id)->delete()){
            return back()->with("success","删除成功");
        }else{
            return back()->with("success","删除失败");
        }

    }
}
