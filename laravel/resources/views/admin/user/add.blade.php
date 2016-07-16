@extends('layout.admin')
@section("title",$title)
@section('content')
	<div class="mws-panel grid_4">
        
        <div class="mws-panel-header">
            <span style="text-shadow: 1px 1px 1px rgba(0, 0, 0, 0)"><i class="icon-add-contact"></i> 用户添加</span>
        </div>
        <div class="mws-panel-body no-padding">
            <form class="mws-form" action="/admin/user/insert" method="post">
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
                <div class="mws-form-inline">
                    <div class="mws-form-row bordered">
                        <label class="mws-form-label">　用户名 : </label>
                        <div class="mws-form-item">
                            <input type="text" class="large" name="username" placeholder="用户名只能为(8~18位)字母,数字,下划线">
                        </div>
                    </div>
                    <div class="mws-form-row bordered">
                        <label class="mws-form-label">　密　码 : </label>
                        <div class="mws-form-item">
                            <input type="password" class="large" name="password" placeholder="密码为(8~18位)非空白字符">
                        </div>
                    </div>
                    <div class="mws-form-row bordered">
                        <label class="mws-form-label">确认密码 : </label>
                        <div class="mws-form-item">
                            <input type="password" class="large" name="repassword" placeholder="密码为(8~18位)非空白字符">
                        </div>
                    </div>
                    <div class="mws-form-row bordered">
                        <label class="mws-form-label">手机号 : </label>
                        <div class="mws-form-item">
                            <input type="text" class="large" name="tel" placeholder="请填写大陆手机号">
                        </div>
                    </div>
                    <div class="mws-form-row bordered">
                        <label class="mws-form-label">用户权限 : </label>
                        <div class="mws-form-item">
                            <select class="large" name="auth">
                                <option value="0">普通用户</option>
                                <option value="1">普通管理员</option>
                                <option value="2">超级管理员</option>
                            </select>
                        </div>
                    </div>
                    
                </div>
                <div class="mws-button-row">
                    {{csrf_field()}}
                    <input type="submit" value="确认" class="btn btn-danger" style="text-shadow: 1px 1px 1px rgba(0, 0, 0, 0)">
                    <input type="reset" value="重置" class="btn ">
                </div>
            </form>
        </div>      
    </div>
@endsection
