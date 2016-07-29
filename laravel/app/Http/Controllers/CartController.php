<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Address;


class CartController extends Controller
{
	/**
	*订单商品确认页面
	*/

	public function confirm(Request $request)
	{
		//将当前的用户地址全部读取出来
		$address = Address::where('user_id',session('uid'))->get();
		//显示模板
		return view('index.cart.confirm',[
			'address' => $address,
			]);
	}
    // //显示订单页面
    // public function getConfirm()
    // {
    // 	return view('index.cart.confirm');
    // }
}
