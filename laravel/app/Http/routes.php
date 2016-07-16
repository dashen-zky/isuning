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

//��ҳ
Route::get('/', function () {
    return view('welcome');
});

//��̨��¼·��
Route::get("/admin/login","AdminController@login");
// ��̨����·����
Route::group([],function(){
	//��̨��ҳ·��
	Route::get("/admin","AdminController@index");
	//�û�·��
	Route::controller("/admin/user","UserController");
	//��Ʒ����·��
	Route::controller("/admin/cate","CatesController");
	//��Ʒ����·��
	Route::resource("/admin/article","ArticleController");
	// ��Ʒ��·��
	Route::controller("/admin/good","GoodsController");
	// ���͵�·��
	Route::controller("/admin/type","TypesController");
	// Ʒ�Ƶ�·��
	Route::controller("/admin/brand","BrandsController");


});


