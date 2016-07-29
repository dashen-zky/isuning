<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    /**
     * 添加到购物车
     */
    public function add(Request $request)
    {
        // $request->session()->flush();
        //  判断是否已经存在
        $res = $this->checkExist($request->input("id"));
        if(!$res){
            $request->session()->push("cart",$request->except(["_token"]));
        }
        $store = Store::find($request->input("id"));
        // dd($request->all());
        $data = $request->except(["_token","id","price","num"]);
        $num = $request->only(["num"]);
        // 解析模板
        return view("home.cart.add",[
            "title"=>"购物车",
            "store"=>$store,
            "data"=>$data,
            "num"=>$num,
        ]);
    }

    private function checkExist($id)
    {
        $goods = session("cart");
        if(!empty($goods)){
            foreach($goods as $key=>$value){
                if($id == $value["id"]){
                    // echo $value["id"];
                    // die;
                    return true;
                }else{
                    return false;
                }
            }
        }else{
            return false;
        }
    }

    /**
     * 购物车页面
     */
    public function goodscart()
    {
        // 遍历session
        // echo "<pre>";
        $data = [];
        if(!empty(session("cart"))){
            foreach(session("cart") as $k=>$v){
                // var_dump($v);
                $data[] = Store::find($v["id"]);
            }
        }
        // dd(session("cart"));
        // 解析模板
        return view("home.cart.goodscart",["title"=>"购物车","data"=>$data]);
    }

    /**
     * 副教授的飞机哦
     */
}
