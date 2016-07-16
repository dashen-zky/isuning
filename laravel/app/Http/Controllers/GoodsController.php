<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;
use App\Good;
use App\Type;
use App\Cate;
use App\Http\Requests;
use App\Http\Requests\BrandRequest;
use App\Http\Requests\TypeRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CatesController;

class GoodsController extends Controller
{
    /**
     * 商品添加页面
     */
    public function getAdd(){
        // dd("fisdoufy ");
        // 获取分类表的信息
        $type = CateController::getFen();
        // dd($type);
        return view("admin.good.add",[
            "title"=>"商品添加",
            "type"=>$type,
        ]);
    }

    public function postInsert(Request $request)
    {   
        // dd($request-all());
    }

    




}
