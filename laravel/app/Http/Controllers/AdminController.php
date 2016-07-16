<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //后台 主页
    public function index()
    {
    	return view('admin.index');
    }

    // public function 

}
