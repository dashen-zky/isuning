<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class InsertCateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *regex:
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
            "name"=>"required|regex:/^\S+$/",
            'status'=>"required|regex:/^[01]$/",
            "pid"=>"required|regex:/^\d+$/",
        ];
    }

    public function message()
    {
         return [
            "name.required"=>"分类名不能为空",
            "name.regex"=>"分类名有空白字符",
            'status.required'=>"分类状态不能为空",
            'status.regex'=>"分类参数不正确",
            "pid.required"=>"类别不能为空",
            "pid.regex"=>"类别参数不正确",
        ];
    }
}
