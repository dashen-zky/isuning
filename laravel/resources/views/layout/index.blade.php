<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>@yield("title")</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="/homes/css/css.css" rel="stylesheet">
<style type="text/css">
    .w1210{
        position:absolute;
        left:100px;
    }

    .remind{
        /*float:left;*/
        width:100px;
        height:100px;
        position:relative;
        left:440px;
        top:0px;
        background:#F1F1F1;
        z-index:99999999;
    }
</style>
</head>
<body>
<!-- 头部 -->
<div class="jd_header">
	<div class="jd_top">
		<div class="w1210 clearfix">
			<span class='head_pos'>送至：北京<i class="arrow"></i></span>	
			<ul class="head_list clearfix">
				<li class="line"></li>
				<li class="item"><a href="#" target="_blank"><span>我的订单</span></a></li>
				<li class="line"></li>
				<li class="item"><a href="#" target="_blank"><span>我的京东</span><i class="arrow"></i></a></li>
				<li class="line"></li>
				<li class="item"><a href="#" target="_blank"><span>京东会员</span></a></li>
				<li class="line"></li>
				<li class="item"><a href="#" target="_blank"><span>企业采购</span></a></li>
				<li class="line"></li>
				<li class="item"><a href="#" target="_blank"><i class="phone"></i><span>手机京东</span><i class="arrow"></i></a></li>
				<li class="line"></li>
				<li class="item"><a href="#" target="_blank"><span>关注京东</span><i class="arrow"></i></a></li>
				<li class="line"></li>
				<li class="item"><a href="#" target="_blank"><span>客户服务</span><i class="arrow"></i></a></li>
				<li class="line"></li>
				<li class="item"><a href="#" target="_blank"><span>网站导航</span><i class="arrow"></i></a></li>
			</ul>
            @if(session('username'))
               <span id="isu" class="head_login_tips head_pos">{{session('username')}}&nbsp&nbsp&nbsp<span>您好</span><i class="arrow"></i></span> 
               <div  id="isc" class="remind" style="clear:both;display:none;"><br><a href="/person"><span>账号管理</span></a><br><br><a href="/login"><span>退出</span></a></div>
            @else
			   <span class="head_login_tips"><a href="/login">你好，请登录</a><a href="register" target="_blank">免费注册</a></span>
            @endif
		</div>
	</div>
	<div class="head_ad">
		<div class="head_ad_box">
			<a href="#" target="_blank"><img src="/homes/images/head_ad.png" alt=""></a>
		</div>
	</div>
</div>
<div class="head_search">
<div class="h_logo">
<a href="#" target="_blank" class="jd_logo"></a>
<span class="jd_slogon"></span>
</div>
<div class="search_box">
<form action="#" method='get'>
	<input type="text" name='kw'  class="jd_search">
	<button class="jd_btn">搜索</button>
</form>
</div>
            <div class="index_car">
                    <a href="#" target="_blank" class="index_car_link">
                        <i class="car"></i>
                        我的购物车
                        <i class="arrow">&gt;</i>
                        <i class="tips">0</i>
                    </a>
            </div>
            <ul class="index_link_">
                <li><a href="#" target="_blank" class="active">9.9抢大牌</a></li>
                <li><a href="#" target="_blank">两件</a></li>
                <li><a href="#" target="_blank">9.9抢大牌</a></li>
                <li><a href="#" target="_blank">9.9抢大牌</a></li>
                <li><a href="#" target="_blank">9.9抢大牌</a></li>
            </ul>
</div>

@section("content")
<div id="jd_nav">
        <div class="w1210 clearfix">
                <div id="nav_side" class="nav_span">
                    <div class="nav_all"><a href="#" target="_blank" class="all">全部商品分类</a><i class="arrow"><span>◇</span></i></div>
                    <div class="nav_detail">
                        <ul class="nav_title">
                            <li><h3><a href="#" target="_blank">家用电器</a></h3><i class='arrow'>&gt;</i></li>
                        </ul>
                        <div class="out"></div>
                    </div>
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

<!-- banner -->
<div id="banner">
    <div class="ban_box">
        <div class="ban_main">
                <ul>
                    <li></li>
                </ul>
                <ol>
                    <li></li>
                </ol>
        </div>      
        <div class="ban_extra">
                <dl>
                    <dt>京东快报<a href="#" target="_blank">更多 &gt;</a></dt>
                    <dd>
                        <ul>
                            <li><a href="#" target="_blank"><b>[特惠]</b>陪着爸妈趣出游 低至9.9</a></li>
                            <li><a href="#" target="_blank"><b>[公告]</b>日本花王集团签约京东全球购</a></li>
                            <li><a href="#" target="_blank"><b>[特惠]</b>JDread电子书阅读器1元众筹</a></li>
                            <li><a href="#" target="_blank"><b>[公告]</b>京东运费标准调整公告</a></li>
                            <li><a href="#" target="_blank"><b>[特惠]</b>美的冰箱超级优惠 超值好礼</a></li>
                        </ul>
                    </dd>
                </dl>
                <div class="jd_sort">
                        <ul>
                            <li class="item"><a href="#" target="_blank"><i class="icon1"></i><span>话费</span></a></li>
                        </ul>
                </div>
                <div class="ban_ad">
                    <a href="#" target="_blank"></a>
                </div>
        </div>
    </div>
</div>
<!-- 今日推荐 --> 
<div id="today_tj">
    <div id="todays">
    </div>
    <div class="today_slide">
        <ul class="slide_main" style="width:2000px;">
            <li class="item">
                <div class="item_data">
                    <a href="#" target="_blank"><img src="/homes/images/product/tj1.jpg" alt=""></a>
                </div>
            <li class="item">
                <div class="item_data">
                    <a href="#" target="_blank"><img src="/homes/images/product/tj5.jpg" alt=""></a>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- 猜你喜欢 -->
<div class="hobby">
    <div class="title">
            <h2>猜你喜欢</h2>
            <a href="javascript:;">换一批</a>
            <div class="line"></div>
    </div>
    <div class="hoby_content">
        <div class="hoby_tag">
            <h3>发现你的喜欢</h3>
            <ul class="tag_list">
                <li class="item"><a href="#" target="_blank">型男</a></li>
            </ul>
        </div>
        <div class="hoby_list">
            <ul>
                <li>
                    <a href="#" target="_blank" class="block">
                        <img src="/homes/images/like1.jpg" alt="手表">
                        <p class='info'>Apple Watch Sport 智能手表(38毫米银色铝金属表壳搭配橙色运动型表带 MLCF2CH/A)</p>
                        <p class="price"><i>￥</i>2288.00</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

</div>
<!-- 京东 · 品质生活 -->
<div class="jd_life">
        <div class="title">
            <h2>京东 · 品质生活</h2>
        </div>
        <div class="life_content">
            <div class="life_col1">
                <a href="#" target="_blank" class="life_item1">
                    <h3 class="item_tit">新发现</h3>
                    <div class="sub_tit">
                            <p class="tit">新品尖货</p>
                            <p class="info">ThinkPad 读懂你的笔记</p>
                            <p class="pro">同步手机随机随想即写即录</p>
                    </div>
                    <img src="/homes/images/pzsh1.jpg" alt="">
                </a>
                <a href="#" target="_blank" class="life_item2">
                    <div class="sub_tit">
                            <p class="tit">新品尖货</p>
                            <p class="info">ThinkPad 读懂你的笔记</p>
                            <p class="pro">同步手机随机随想即写即录</p>
                    </div>
                    <img src="/homes/images/pzsh2.jpg" alt="">
                </a>
                <a href="#" target="_blank" class="life_item2">
                    <div class="sub_tit">
                            <p class="tit">新先购</p>
                            <p class="info">白落梅深情书写</p>
                            <p class="pro">仓央嘉措诗传</p>
                    </div>
                    <img src="/homes/images/pzsh3.jpg" alt="">
                </a>
            </div>
            <div class="life_col2"> 
                <a href="#" target="_blank" class="life_item1">
                    <h3 class="item_tit">好物100</h3>
                    <div class="sub_tit">
                            <p class="tit">各系潮流</p>
                            <p class="info">ThinkPad </p>
                            <p class="pro">同步手机随机</p>
                    </div>
                    <img src="/homes/images/pzsh12.jpg" alt="">
                </a>
                <a href="#" target="_blank" class="life_item2">
                    <div class="sub_tit">
                            <p class="tit">新奇好货</p>
                            <p class="info">沙滩野车摩托车</p>
                            <p class="pro">玩转个性潮流</p>
                    </div>
                    <img src="/homes/images/pzsh4.jpg" alt="">
                </a>
            </div>
            <div class="life_col3">
                <a href="#" target="_blank" class="life_item1">
                    <h3 class="item_tit">品牌街</h3>
                    <div class="sub_tit">
                            <p class="tit">运动大牌</p>
                            <p class="info">联合上新</p>
                            <p class="pro">新品低至6折</p>
                    </div>
                    <img src="/homes/images/pzsh5.jpg" alt="">
                </a>
                <a href="#" target="_blank" class="life_item2">
                    <div class="sub_tit">
                            <p class="tit">国际大牌</p>
                            <p class="info">哥伦比亚轻彩户外</p>
                            <p class="pro">全场低至69元</p>
                    </div>
                    <img src="/homes/images/pzsh6.jpg" alt="">
                </a>
                <a href="#" target="_blank" class="life_item2">
                    <div class="sub_tit">
                            <p class="tit">科技精品</p>
                            <p class="info">玩科技</p>
                            <p class="pro">折叠摩托车</p>
                    </div>
                    <img src="/homes/images/pzsh7.jpg" alt="">
                </a>
            </div>
            <!-- /*品质生活 右侧品牌推荐*/ -->
            <div class="life_rec">
                <ul>
                    <li><a href="#" target="_blank"><img src="/homes/images/pztj1.jpg" alt=""></a></li>
                </ul>
            </div>
        </div>
</div>
<!-- floor-1 -->
<div class="jd_floor">
    <div class="title">
            <h2><i>1F</i>服装鞋包</h2>
            <ul class="tabs">
                <li class="active"><a href="javascript:;">大牌</a><i></i></li>
                <li><a href="javascript:;">男装</a><i></i></li>
            </ul>
    </div>
    <div class="aside">
        <div class="aside_sort">
            <div class="aside_main">
                <a href="#" target="_blank">
                    <img src="/homes/images/floor1.jpg" alt="">
                </a>
            </div>
            <ul class="aside_sbj">
                <li class="item sbj1">
                    <a href="#" target="_blank"><i></i>男装</a>
                </li>
            </ul>
            <ul class="aside_rec">
                <li>
                    <a href="#" target="_blank">女装新品</a>
                </li>
                <li>               
                    <a href="#" target="_blank">菩提手串</a>
                </li>
            </ul>
        </div>
        <div class="aside_ad">
            <a href="#" target="_blank">
                <img src="/homes/images/floor_ad.jpg" alt="">
            </a>
        </div>
    </div>
    <div class="floor_main">
        <ul class="floor_col1">
            <li><a href="#" target="_blank"><img src="/homes/images/floor1_1.jpg" alt=""></a></li>
            <li><a href="#" target="_blank"><img src="/homes/images/floor1_2.jpg" alt=""></a></li>
            <li><a href="#" target="_blank"><img src="/homes/images/floor1_3.jpg" alt=""></a></li>
        </ul>
        <ul class="floor_col2">
            <li><a href="#" target="_blank"><img src="/homes/images/floor2_1.jpg" alt=""></a></li>
            <li><a href="#" target="_blank"><img src="/homes/images/floor2_2.jpg" alt=""></a></li>
            <li><a href="#" target="_blank"><img src="/homes/images/floor2_3.jpg" alt=""></a></li>
            <li><a href="#" target="_blank"><img src="/homes/images/floor2_4.jpg" alt=""></a></li>
        </ul>
        <ul class="floor_col3">
            <li><a href="#" target="_blank"><img src="/homes/images/floor3_1.jpg" alt=""></a></li>
            <li><a href="#" target="_blank"><img src="/homes/images/floor3_2.jpg" alt=""></a></li>
            <li><a href="#" target="_blank"><img src="/homes/images/floor3_3.jpg" alt=""></a></li>
        </ul>
    </div>
</div>
@show

@section("myJs")

@show

<!-- 底部 -->
<div id="footer">
    <div class="slogon">
        <div class="w1210">
                <ul class="clearfix">
                    <li class="slogon1"></li>
                    <li class="slogon2"></li>
                    <li class="slogon3"></li>
                    <li class="slogon4"></li>
                </ul>
        </div>
    </div>
    <div class="w1210 mb20">
        <dl class="dl1">
            <dt>购物指南</dt>
            <dd>
                <a href="#" target="_blank" rel="nofollow">购物流程</a>
            </dd>
        </dl>
        <dl class="dl2">
            <dt>配送方式</dt>
            <dd>
                <a href="#" target="_blank" rel="nofollow">上门自提</a>
            </dd>
        </dl>
        <dl class="dl3">
            <dt>支付方式</dt>
            <dd>
                <a href="#" target="_blank" rel="nofollow">货到付款</a>
            </dd>
        </dl>
        <dl class="dl4">
            <dt>售后服务</dt>
            <dd>
                <a href="#" target="_blank" rel="nofollow">售后政策</a>
            </dd>
        </dl>
        <dl class="dl5">
            <dt>特色服务</dt>
            <dd>
                <a href="#" target="_blank" rel="nofollow">夺宝岛</a>
            </dd>
        </dl>
        <div class="foot_cover">
            <div class="dt">京东自营覆盖区县</div>
            <div class="dd">
                <p>京东已向全国2514个区县提供自营配送服务，支持货到付款、POS机刷卡和售后上门服务。</p>
                <p class="tar"><a href="#" target="_blank">查看详情&nbsp;&gt;</a></p>
            </div>
        </div>
    </div>
    <div class="w1210 bdt">
        <div class="links">
            <a href="#" target="_blank" rel="nofollow">关于我们</a>|
        </div>
        <div class="copyright">
             <a href="#" target="_blank"><img src="/homes/images/footer/guohui.png" alt="">京公网安备 11000002000088号 </a> |  京ICP证070359号  |  互联网药品信息服务资格证编号(京)-经营性-2014-0008  |  新出发京零 字第大120007号<br>
音像制品经营许可证苏宿批005号  |  出版物经营许可证编号新出发(苏)批字第N-012号  |  互联网出版许可证编号新出网证(京)字150号<br>
网络文化经营许可证京网文[2014]2148-348号  违法和不良信息举报电话：4006561155  Copyright © 2004-2016  京东JD.com 版权所有
        </div>
        <ul class="foot_msg">
            <li><a href="#" target="_blank" rel="nofollow"><img src="/homes/images/footer/f1.png" alt=""></a></li>
            <li><a href="#" target="_blank" rel="nofollow"><img src="/homes/images/footer/f2.png" alt=""></a></li>
            <li><a href="#" target="_blank" rel="nofollow"><img src="/homes/images/footer/f3.jpg" alt=""></a></li>
            <li><a href="#" target="_blank" rel="nofollow"><img src="/homes/images/footer/f4.png" alt=""></a></li>
            <li><a href="#" target="_blank" rel="nofollow"><img src="/homes/images/footer/f5.jpg" alt=""></a></li>
            <li><a href="#" target="_blank" rel="nofollow"><img src="/homes/images/footer/f6.jpg" alt=""></a></li>
        </ul>
    </div>
</div>
<!-- 绑定js-->
<script type="text/javascript" src="/homes/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
    //绑定事件
    $('#isu').mouseover(function(){
           // 添加一个新的class
        $(this).next().show();
    })
    //绑定事件
    $('#isu').click(function(){
        $(this).next().hide();
    })

</script>
</body>
</html>