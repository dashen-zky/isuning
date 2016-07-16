<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//主页
Route::get('/', function () {
    return view('welcome');
});

//后台登录路由
Route::get("/admin/login","AdminController@login");
// 后台操作路由组
Route::group([],function(){
	//后台主页路由
	Route::get("/admin","AdminController@index");
	//用户路由
	Route::controller("/admin/user","UserController");
	//商品分类路由
	Route::controller("/admin/cate","CatesController");
	//商品评论路由
	Route::resource("/admin/article","ArticleController");
	// 商品的路由
	Route::controller("/admin/good","GoodsController");
	// 类型的路由
	Route::controller("/admin/type","TypesController");
	// 品牌的路由
	Route::controller("/admin/brand","BrandsController");


});


