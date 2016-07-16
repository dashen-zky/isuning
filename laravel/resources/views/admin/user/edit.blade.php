@extends('layout.admin')

@section('title',$title)

@section("content")
		<div class="mws-panel grid_4">
        
        <div class="mws-panel-header">
            <span style="text-shadow: 1px 1px 1px rgba(0, 0, 0, 0)"><i class="icon-user"></i> 用户修改</span>
        </div>
        <div class="mws-panel-body no-padding">
            @if (count($errors) > 0)
            <div class="mws-form-message error">
                错误信息
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form class="mws-form" action="/admin/user/update" method="post" enctype="multipart/form-data">

                <div class="mws-form-inline">
                    <div class="mws-form-row bordered">
                        <label class="mws-form-label">　　用户名 : </label>
                        <div class="mws-form-item">
                            <input type="text" class="large" name="username" disabled="disabled" value="{{$user->username}}">
                        </div>
                    </div>
                    
                    <div class="mws-form-row bordered">
                        <label class="mws-form-label">　手机号码 : </label>
                        <div class="mws-form-item">
                            <input type="test" class="large" name="tel" placeholder="" value="{{$user->tel}}">
                        </div>
                    </div>
                    <div class="mws-form-row bordered">
                        <label class="mws-form-label">　邮箱地址 : </label>
                        <div class="mws-form-item">
                            <input type="test" class="large" name="email" value="{{$user->email}}">
                        </div>
                    </div>
                    <div class="mws-form-row bordered">
                        <label class="mws-form-label">　用户头像 : </label>
                        <div class="mws-form-item">
                            <div class="fileinput-holder" style="position: relative;">
                        			<input type="file"  name="profile" value="上传图片" >
                       			<img src="{{$user->profile}}" alt="请上传头像">
                            </div>
                        </div>
                    </div>
                   
                    <div class="mws-form-row bordered">
                        <label class="mws-form-label">　用户权限 : </label>
                        <div class="mws-form-item">
                            <select class="large" name="auth">
                                <option value="0" @if($user->auth == 0) selected="selected" @endif>普通用户</option>
                                <option value="1" @if($user->auth == 1) selected="selected" @endif>普通管理员</option>
                                <option value="2" @if($user->auth == 2) selected="selected" @endif>超级管理员</option>
                            </select>
                        </div>
                    </div>
                    <div class="mws-form-row">
        				<label class="mws-form-label">　用户性别 : </label>
        				<div class="mws-form-item clearfix">
        					<ul class="mws-form-list inline">
        						<li><input type="radio" name="sex" value="0" @if($user->sex == 0) checked="checked" @endif> <label>女</label></li>　　
        						<li><input type="radio" name="sex" value="1" @if($user->sex == 1) checked="checked" @endif> <label>男</label></li>　　
        						<li><input type="radio" name="sex" value="2" @if($user->sex == 2) checked="checked" @endif> <label>保密</label></li>　　
        					</ul>
        				</div>
        			</div>
                </div>
                <div class="mws-button-row">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <input type="submit" value="修改" class="btn btn-danger" style="text-shadow: 1px 1px 1px rgba(0, 0, 0, 0)">
                    <input type="reset" value="重置" class="btn ">
                </div>
            </form>
        </div>      
    </div>
@endsection