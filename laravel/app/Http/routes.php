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

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});
/**************************　 前台用户管理    *******************************/
//前台首页
Route::get('/index','Usercontroller@index');
//用户的注册页面
Route::get('/register','UserController@register');
//用户注册提交信息
Route::post('/register','UserController@doRegister');
//前台用户检测
Route::controller('/index/user','CheckUserController');
//用户到邮箱激活操作
Route::get('/jihuo','UserController@jihuo');

//用户前台登录操作
Route::get('/login','Usercontroller@login');
Route::post('/login','Usercontroller@doLogin');

//用户前台忘记密码操作
Route::get('/forget','Usercontroller@forget');
Route::post('/doforget','Usercontroller@doForget');
//前台找回密码验证码
Route::get('/captcha/{tmp}','UserController@captcha');
Route::get('/yz','UserController@yz');

//邮箱找回密码
Route::get('/reset','UserController@reset');
Route::post('/reset','UserController@doreset');

//个人信息
Route::get('/person','UserController@Person');
Route::post('/person','UserController@doPerson');

//订单
Route::get('index/cart/confirm','CartController@confirm');

//获取省份的信息
Route::get('/getProvince','AddressController@getProvince');
//获取市区的信息
Route::get('/getCity','AddressController@getCity');
//获取县的信息
Route::get('/getXian','AddressController@getXian');

//添加收货地址
Route::post('/insertAddress','AddressController@insertAddress');
//删除收货地址
Route::get('/delete','AddressController@delete');

//提交订单
Route::post('/Order/create','OrderController@create');


/**************************   后台用户管理    *******************************/

//用户的后台登录
Route::get('/admin/login','AdminController@login');
Route::post('/admin/dologin','AdminController@dologin');

Route::group(["middleware"=>"login"],function(){
	
	//后台首页
	Route::get('/admin','AdminController@index');

	//用户的管理
	Route::controller('/admin/user', 'UserController');
	//Admind的管理
	Route::controller('/admin/adminuser','AdminController');

});

	
=======
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


>>>>>>> 6774fa2b559ca8b9c1910659b00fe51c01ff54ed
