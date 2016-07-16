<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Hash;

class UserController extends Controller
{
	//成员属性
	public $tableName = "users";


    /**
     * 用户添加界面
     */
    public function getAdd()
    {
        return view("admin.user.add",["title"=>"用户添加"]);
    }

    /**
     * 用户的插入操作
     */
    public function postInsert(Request $request)
    {
        // dd($request->all());
        // 手动验证
        $this->validate($request,[
            'username' => 'required|unique:users|regex: /^\w{8,18}$/',
            'password' => 'required|regex: /^\S{8,18}$/',
            'repassword' => 'required|same:password|regex: /^\S{8,18}$/',
            // 'auth' => 'required',
        ],[
            'username.required'=>"用户名不能为空",
            'username.unique'=>"用户名已存在",
            'username.regex'=>"用户名格式不正确",
            'password.required'=>"密码不能为空",
            'password.regex'=>"密码格式不正确",
            'repassword.required'=>"确认密码不能为空",
            'repassword.same'=>"两次输入的密码不一致",

        ]);

        $data = $request->only(['username','password','auth']);
        // 处理密码
        $data["password"] = Hash::make($request->input("password"));

        if(DB::table($this->tableName)->insert($data)){
            return redirect("/admin/user/list")->with('success',"添加成功");
        }else{
            return back()->with("error","添加失败");
        }
    } 

    /**
     * 用户的列表页
     */
    public function getList(Request $request)
    {
        // return view("admin.user.list");
        // 读取用户的信息
            $this->tableName = DB::table($this->tableName)
            ->where(function($query)use($request){
                //判断当前请求的keywords参数
                $search = $request->input('search');
                //检测
                if(!empty($search)){
                    $query->where('username','like','%'.$search.'%');
                }
            })
            ->paginate($request->input('num',10));

        return view('admin.user.list', [
            'users'=>$this->tableName,
            'title'=>'用户的列表页',
            'request'=>$request
        ]);
    }

    /**
     * 用户的修改操作
     */
    public function getEdit(Request $request)
    {
        // echo "id=".$request->input("id");
        // 读取数据
        $user = DB::table($this->tableName)->where('id',$request->input('id'))->first();
        // 判断
        if(empty($user)){
            return redirect("/admin/user/error");
        }

        return view('admin.user.edit',['user'=>$user,'title'=>"用户修改页面"]);
    }

    public function postUpdate(Request $request)
    {
        //验证
        $this->validate($request, [
            'tel'=>"required|regex: /^\d{11}$/",
            'email'=>'required|regex:/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/',

        ], [
            'tel.required'=>"手机号不能为空",
            'tel.regex'=>"手机号格式不正确",
            'email.required'=>"邮箱不能为空",
            'email.regex'=>"邮箱格式不正确",
            // 'tel.required'=>
        ]);

        $data = $request->except(['_token','id']);
        // dd($request->all());
        
        // 检测是否有文件上传
        if($request->hasFile('profile')){
            $profile = $this->getUploadFileName($request);
            $data["profile"] = $profile ? $profile : '';
            // 刪除原來的图片
            $this->deleteProfile($request->input("id"));
        }
        // dd($data);
        //更新操作
        $res = DB::table($this->tableName)->where('id',$request->input("id"))->update($data);
        if($res){
            return redirect("/admin/user/list")->with("success","更新成功");
        }else{
            return back()->with("error","更新失败");
        }
    }

    /**
     * 文件上传操作
     */
    private function getUploadFileName($request)
    {
        if($request->hasFile('profile')){
            $name = time().rand(100000,999999);
            $suffix = $request->file("profile")->getClientOriginalExtension();
            $fileName = $name.'.'.$suffix;
            $dir = './public/admin/images/uploads/'.date('Ymd');
            //进行上传
            if($request->file('profile')->move($dir, $fileName)){
                //写入当前图片的绝对路径
                $profile = trim($dir.'/'.$fileName,'.');
                // dd($profile);
                return $profile;
            }
        }
    }

    /**
     * 文件删除操作
     */
    private function deleteProfile($id)
    {
        // 读取数据
        $info = DB::table($this->tableName)->where("id",$id)->first();
        //删除图片
        //检测图片是否存在
        $path = '.'.$info->profile;
        if(file_exists($path)){
            unlink($path);
        } 
    }   

    /**
     * 用户的删除操作
     */

    public function getDelete(Request $request)
    {
        // 获取id
        if(DB::table($this->tableName)->where("id",$request->input("id"))->first()){
            $this->deleteProfile($request->input("id"));
        }else{
            return redirect("/admin/user/list")->with("error","用户不存在");
        }

        if(DB::table($this->tableName)->where("id",$request->input("id"))->delete()){
            return back()->with("success","删除成功");
        }else{
            return back()->with("error","删除失败");
        }
    }


}
