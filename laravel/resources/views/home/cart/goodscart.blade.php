@extends("layout.index")

@section("title",$title)

@section("jd_nav")
<div id="jd_nav">
        <div class="w1210 clearfix">
                <div id="nav_side" class="nav_span">
                    <div class="nav_all"><a href="#" target="_blank" class="all">全部商品分类</a><i class="arrow"><span>◇</span></i></div>
                </div>
                <div class="nav_main">
                    <ul class="clearfix">
                        <li class="item">
                            <a href="#" target="_blank">服装城</a>
                        </li>
                        
                    </ul>
                </div>
        </div>
</div>
@endsection

@section("content")
<div class="car_wrap">
	<div class="car_table">
		<div class="car_all">
			<div class="d1">
				<input type="checkbox"><span>全选</span>
			</div>
			<div class="d2">
				<span>商品</span>
			</div>
			<div class="d3">
				<span>单价（元）</span>
			</div>
			<div class="d4">
				<span>数量</span>
			</div>
			<div class="d5">
				<span>小计（元）</span>
			</div>
			<div class="d6">
				<span>操作</span>
			</div>
		</div>
		<div class="car_list">
			@foreach(session("cart") as $k=>$v)		
			<dl class="car_item">
				<dd class="ck"> <input type="checkbox" name="check"> </dd>
				<dt  class="img"> 
					<a href="#" class="ob_img">
						<img src="{{$data[$k]->good->img}}" alt="">
					</a>
				</dt>
				<dd class="title">
					<a href="#">{{$data[$k]->good->name}} @foreach(json_decode($data[$k]->detail) as $kk=>$vv)  {{$vv}}　@endforeach</a>
				</dd>
				<dd class="size">
					@foreach($v as $kk=>$vv)@if(!($kk == "price" || $kk == "num" || $kk == "id"))
					<p class="text">{{$kk}}: {{$vv}}</p>
					@endif @endforeach
				</dd>
				<dd class="price">{{$v["price"]}}</dd>
				<dd class="number">
					<p class="add">
						<em>-</em>
						<input type="text" value="1" class="inp_num">
						<em>+</em>
					</p>
					<p class="font">有货</p>
				</dd>
				<dd class="all">{{$v['price']}} </dd>
				<dd class="do">
					<a href="javascript:;" class="delete">删除</a><br>
				</dd>
			</dl>
			@endforeach
			<div class="car_end">
				<div class="car_end_ck">
					<input type="checkbox">
					<span>全选</span>
				</div>
				<div class="option">
					<a href="javascript:;">删除选中的商品</a>
					<a href="javascript:;">移到我的关注</a>
				</div>
				<a href="javascript:;" class="end_num">去结算</a>
				<div class="all_fee">
					<p><span class="font"><b></b></p>
					<p><span class="font">总价（不含运费）：</span><span class="price">￥ 0</span></p>
				</div>
				<div class="car_count">
					已选择<em class="red">1</em>件商品
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section("myJs")
<script type="text/javascript" src="/homes/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
	
	// 点击加减商品数量
	$("#add").click(function(){
		// 获取库存的最大值
		var max = $("#num").attr("max");
		// 获取要加的数值
		var num = parseInt($("#num").val());
		// console.log(num);
		if(num < max){
			num = num + 2;
		}else{
			num = max;
		}
		
		$("#num").val(num);

	})

	$("#sub").click(function(){
		// 获取要加的数值
		var num = parseInt($("#num").val());
		if(num > 1){
			num = num - 1;
		}else{
			num = 1;
		}
		$("#num").val(num);
	})

</script>
@endsection