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

/********************* 前台页面路由 ************************************/
Route::get('/', function () {
    return view('home.index',["title"=>"京东首页"]);
});
// 商品的详情
Route::get("/detail.html","Goodscontroller@detail");
// 商品的具体价格等信息等路由
Route::get("/ajax-detail","Goodscontroller@ajaxDetail");
// 商品列表的路由
Route::get("/list","Goodscontroller@list");
// 商品添加到购物车页面
Route::post("/index/cart","CartController@add");
Route::get("/cart","CartController@goodscart");


/********************* 后台路由   **************************************/
// 后台登录路由
Route::get("/admin/login","AdminController@login");
// 后台操作的路由组
Route::group([],function(){
	// 后台首页
	Route::get("/admin","AdminController@index");
	// 分类的路由
	Route::controller("/admin/cate","CatesController");
	// 商品的路由
	Route::controller("/admin/good","GoodsController");
	// 类型的路由
	Route::controller("/admin/type","TypesController");
	// 品牌的路由
	Route::controller("/admin/brand","BrandsController");
	// 属性的路由
	Route::controller("/admin/attr","AttrsController");
	// 属性值的路由
	Route::controller("/admin/attrValue","AttrValuesController");
	// 规格的路由
	Route::controller("/admin/spec","SpecsController");
	// 规格值的路由
	Route::controller("/admin/specValue","SpecValuesController");
	// 参数的路由
	Route::controller("/admin/param","ParamsController");
	// 库存的路由
	Route::controller("/admin/store","StoresController");

});


