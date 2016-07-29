<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class InsertCateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|unique:users|regex:/^\S{8,30}$/',
            'password' => 'required|regex:/^\S{8,30}$/',
            'repassword' => 'required|same:password',
            'email' => 'required|unique:users|regex:/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/'
        ];
    }

    public function messages()
    {
        return [
           'username.required' => "用户名不能为空",
           'username.unique' => "用户名已存在",
           'username.regex' => "用户名填写格式不正确",
           'password.required' => "密码不能为空",
           'password.regex' => "密码格式不正确",
           'repassword.required' => "确认密码不能为空",
           'repassword.same' => "两次密码输入不一致",
           'email.required' => "邮箱地址不能为空",
           'email.unique' => "邮箱号已存在",
           'email.regex' => '邮箱格式不正确 请填写正确的邮箱号' 
        ];
    }
}
