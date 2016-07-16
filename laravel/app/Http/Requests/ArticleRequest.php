<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ArticleRequest extends Request
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
            "title"=>"required|min:5",
            "intro"=>"required|min:20",
            "img"=>"sometimes|required|mimes:jpeg,bmp,png",
            "tid"=>"required|regex:/^\d+$/",
            "content"=>"required|min:50",
        ];
    }

    public function message()
    {
        return [
            "title.required"=>"文章标题不能为空",
            "title.min"=>"文章标题字数少于5个字",
            "intro.required"=>"文章简介不能为空",
            "intro.min"=>"文章简介不能少于20个字",
            "img.required"=>"文章主图不能为空",
            "img.mimes"=>"文章主图格式不正确",
            "tid.required"=>"文章分类不能为空",
            "tid.regex"=>"文章分类不正确",
            "content.required"=>"文章内容不能为空",
            "content.min"=>"文章内容不能少于50个字",
        ];
    }
}
