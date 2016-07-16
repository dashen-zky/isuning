@extends("layout.admin")

@section('title',$title)

@section('content')
<div class="mws-panel grid_8">
  <div class="mws-panel-header">
    <span style="text-shadow: 1px 1px 1px rgba(0, 0, 0, 0)">
      <i class="icon-table"></i>文章列表</span>
  </div>
  <div class="mws-panel-body no-padding">
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
    <form action="/admin/article">
      <div id="DataTables_Table_1_length" class="dataTables_length">
        <label>显示 
          <select size="1" name="num" aria-controls="DataTables_Table_1">
            <option value="10" @if($request->input("num") == 10) selected="selected" @endif>10</option>
            <option value="20" @if($request->input("num") == 20) selected="selected" @endif>20</option>
            <option value="50" @if($request->input("num") == 50) selected="selected" @endif>50</option>
            <option value="100" @if($request->input("num") == 100) selected="selected" @endif>100</option>
            </select> 条</label>
      </div>
      <div class="dataTables_filter" id="DataTables_Table_1_filter">
        <label>文章标题搜索
          <input type="text" aria-controls="DataTables_Table_1" name="search" value="{{$request->input('search')}}"><button class="btn btn-primary">搜索</button> <button type="reset" class="btn btn-success">重置</button></label></div>
    </form>
      <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
        <thead>
          <tr role="row">
            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 30px;">文章ID</th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 70px;">文章标题</th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 70px;">文章简介</th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 50px;">文章分类</th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 50px;">文章缩略图</th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 40px;">文章状态</th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 180px;">文章操作</th></tr>
        </thead>
        <tbody role="alert" aria-live="polite" aria-relevant="all">
          @foreach($articles as $k=>$v)
         	<tr class="@if($k%2 == 0) even @else odd @endif">
            	<td class=" sorting_1">{{$v->id}}</td>
	            <td class=" ">{{$v->title}}</td>
              <td class=" ">{{$v->intro}}</td>
              <td class=" ">{{$v->name}}</td>
	            <td class=" "><img src="{{$v->img}}" alt=""></td>
	            <td class=" ">@if($v->status == 0) 未发布 @elseif($v->status == 1) 已发布 @endif</td>
	            <td class=" ">
                  <form action="/admin/article/{{$v->id}}" method="post">
                   <input type="hidden" name="_method" value="delete">
                    {{csrf_field()}}
                    <span class="btn-group" >
                      <a href="#" class="btn btn-small "><i class="icon-user"></i> 文章详情</a>
                      <a href="/admin/article/{{$v->id}}/edit" class="btn btn-small"><i class="icon-pencil"></i>  编辑</a>
                    </span>
                      <!-- <input type="hidden" name="id" value="{{$v->id}}"> -->
                      <button type="submit" class="btn btn-small"><i class="icon-trash"></i> 删除 </button> 
                  </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

        <div style="padding-left:0px;margin-right:0px;" class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
          <div id="pages">
            {!! $articles->appends($request->all())->render() !!}      
          </div>
        </div>
        <style type="text/css">
            #pages{
                /*border-radius: 2px 0 0 2px;*/
                height: auto;
                overflow: hidden;
                margin-left:0px;
                padding:0px;
            }

            #pages ul{
                height:auto;
                padding-left:0px;
                margin-left:3px;
            }
            #pages li{
                float:left;
                height:20px;
                padding:0 10px;
                display:block;
                font-size: 12px;
                line-height: 20px;
                text-align: center;
                cursor: pointer;
                outline: none;
                background-color: #444444;
                color: #fff;
                text-decoration: none;
                border-right: 1px solid rgba(0, 0, 0, 0.5);
                border-left: 1px solid rgba(255, 255, 255, 0.15);
                box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.5), inset 0px 1px 0px rgba(255, 255, 255, 0.15);
            }
            #pages a{
                color:white;
            }
            #pages .active{
                float: left;
                height: 20px;
                padding: 0 10px;
                display: block;
                font-size: 12px;
                line-height: 20px;
                text-align: center;
                cursor: pointer;
                outline: none;
                text-decoration: none;
                background-color: yellow;
                color: black;
            }
            #pages .disabled{
                color: #666666;
                cursor: default;
            }
        </style>
      
    </div>
  </div>
</div>

@endsection
