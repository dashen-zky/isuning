
@extends('layout.admin')
@section("title",$title)
@section('content')
	<div class="mws-panel grid_4">
        
        <div class="mws-panel-header">
            <span style="text-shadow: 1px 1px 1px rgba(0, 0, 0, 0)"><i class="icon-plus-sign"></i> 类型修改</span>
        </div>
        <div class="mws-panel-body no-padding">
            <form class="mws-form" action="/admin/good/type-update" method="post">
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
                        <label class="mws-form-label">　类型名 : </label>
                        <div class="mws-form-item">
                            <input type="text" class="large" name="name" value="{{$types->name}}">
                        </div>
                    </div>
                  
                    <div class="mws-form-row bordered">
                        <label class="mws-form-label">　是否上线 : </label>
                        <div class="mws-form-item">
                    　　　　<input class="ibutton" type="radio" name="status" value="1" @if($types->status == 1) checked @endif>是　　　
                   　　　　 <input class="ibutton" type="radio" name="status" value="0" @if($types->status == 0) checked @endif> 否
                        </div>
                    </div>

                </div>
                <div class="mws-button-row">
                    {{csrf_field()}}
                    <input type="hidden" name='id' value="{{$types->id}}">
                    <input type="submit" value="添加" class="btn btn-danger" style="text-shadow: 1px 1px 1px rgba(0, 0, 0, 0)">
                    <input type="reset" value="重置" class="btn btn-primary">
                </div>
            </form>
        </div>      
    </div>
@endsection
