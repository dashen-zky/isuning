<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Order;

class OrderController extends Controller
{
   public function create(Request $request)
   {
        //将信息插入到订单表中
        $order = new Order;
        $order ->num = time().rand(100000,999999);
        $order ->user_id = session('uid');


   }
}
