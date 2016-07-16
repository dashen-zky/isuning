@extends('layout.admin')
@section("title",$title);
@section('content')
	<div class="mws-panel grid_8">
        
        <div class="mws-panel-header">
            <span style="text-shadow: 1px 1px 1px rgba(0, 0, 0, 0)"><i class="icon-google-plus"></i> 文章修改</span>
        </div>
        <div class="mws-panel-body no-padding">
            <form class="mws-form" action="/admin/article/{{$info->id}}" method="post" enctype="multipart/form-data">
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
                    <div class="mws-form-row">
                        <label class="mws-form-label">　文章标题 : </label>
                        <div class="mws-form-item">
                            <input type="text" class="large" name="title" value="{{$info->title}}">
                        </div>
                    </div>

                    <div class="mws-form-row">
                        <label class="mws-form-label">　文章简介 : </label>
                        <div class="mws-form-item">
                            <textarea name="intro"  class="large" rows="10">{{$info->intro}}</textarea>
                        </div>
                    </div>

                    <div class="mws-form-row">
                        <label class="mws-form-label">　文章主图 : </label>
                        <div class="mws-form-item">
                            <input type="file" name="img" >
                            <img src="{{$info->img}}" alt="">
                        </div>
                    </div>
                    
                    <div class="mws-form-row bordered">
                        <label class="mws-form-label">　文章分类 : </label>
                        <div class="mws-form-item">
                           <select class="large" name="tid">
                                <option value="0">请选择</option>
                                @foreach($type as $k=>$v)
                                <option value="{{$v->id}}" @if($v->id == $info->tid) selected @endif >{{$v->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mws-form-row bordered">
                        <label class="mws-form-label">　文章状态 : </label>
                        <div class="mws-form-item">
                   　　　　<input type="radio" name="status" value="0" @if($info->status  == 0) checked @endif> 不发布　　　　
                   　　　　<input type="radio" name="status" value="1" @if($info->status  == 1) checked @endif> 发布
                        </div>
                    </div>
                    
                    <div class="mws-form-row">
                        <label class="mws-form-label">　文章内容 : </label>
                        <script type="text/javascript" charset="utf-8" src="/admins/Uediter/ueditor.config.js"></script>
                        <script type="text/javascript" charset="utf-8" src="/admins/Uediter/ueditor.all.min.js"> </script>
                        <script type="text/javascript" charset="utf-8" src="/admins/Uediter/lang/zh-cn/zh-cn.js"></script>
                        <div class="mws-form-item">
                            <script id="editor" type="text/plain" style="height:580px;" name="content">{!! $info->content !!}</script>
                        </div>
                        <script type="text/javascript">
                            //实例化编辑器
                            var ue = UE.getEditor('editor');
                        </script>
                    </div>
                    
                </div>
                <div class="mws-button-row">
                    {{csrf_field()}}
                    <!-- <input type="hidden" name="id" value="{{$info->id}}"> -->
                    <input type="hidden" name="_method" value="put">
                    <input type="submit" value="确认" class="btn btn-danger" style="text-shadow: 1px 1px 1px rgba(0, 0, 0, 0)">
                    <input type="reset" value="重置" class="btn ">
                </div>
            </form>
        </div>      
    </div>
@endsection

    

