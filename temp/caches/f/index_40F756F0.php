<?php exit;?>a:3:{s:8:"template";a:12:{i:0;s:65:"C:/www/mingshizhubao/new_ecshop/themes/ecmoban_shunfeng/index.dwt";i:1;s:79:"C:/www/mingshizhubao/new_ecshop/themes/ecmoban_shunfeng/library/page_header.lbi";i:2;s:76:"C:/www/mingshizhubao/new_ecshop/themes/ecmoban_shunfeng/library/index_ad.lbi";i:3;s:87:"C:/www/mingshizhubao/new_ecshop/themes/ecmoban_shunfeng/library/category_tree_index.lbi";i:4;s:80:"C:/www/mingshizhubao/new_ecshop/themes/ecmoban_shunfeng/library/new_articles.lbi";i:5;s:79:"C:/www/mingshizhubao/new_ecshop/themes/ecmoban_shunfeng/library/ad_position.lbi";i:6;s:87:"C:/www/mingshizhubao/new_ecshop/themes/ecmoban_shunfeng/library/recommend_promotion.lbi";i:7;s:81:"C:/www/mingshizhubao/new_ecshop/themes/ecmoban_shunfeng/library/recommend_new.lbi";i:8;s:81:"C:/www/mingshizhubao/new_ecshop/themes/ecmoban_shunfeng/library/recommend_hot.lbi";i:9;s:82:"C:/www/mingshizhubao/new_ecshop/themes/ecmoban_shunfeng/library/recommend_best.lbi";i:10;s:72:"C:/www/mingshizhubao/new_ecshop/themes/ecmoban_shunfeng/library/help.lbi";i:11;s:79:"C:/www/mingshizhubao/new_ecshop/themes/ecmoban_shunfeng/library/page_footer.lbi";}s:7:"expires";i:1556261759;s:8:"maketime";i:1556258159;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v4.0.1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="美丽商城" />
<meta name="Description" content="美丽商城" />
<title>美丽商城 - Powered by ECShop</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/ecmoban_shunfeng/style.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|美丽商城 - Powered by ECShop" href="feed.php" />
<script type="text/javascript" src="js/common.js"></script><script type="text/javascript" src="js/index.js"></script></head>
<body class="index_page" style="min-width:1200px;">
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script><script type="text/javascript" src="js/jquery.json.js"></script><script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<script type="text/javascript">
//设为首页 www.ecmoban.com
function SetHome(obj,url){
    try{
        obj.style.behavior='url(#default#homepage)';
       obj.setHomePage(url);
   }catch(e){
       if(window.netscape){
          try{
              netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
         }catch(e){
              alert("抱歉，此操作被浏览器拒绝！\n\n请在浏览器地址栏输入“about:config”并回车然后将[signed.applets.codebase_principal_support]设置为'true'");
          }
       }else{
        alert("抱歉，您所使用的浏览器无法完成此操作。\n\n您需要手动将【"+url+"】设置为首页。");
       }
  }
}
 
//收藏本站 bbs.ecmoban.com
function AddFavorite(title, url) {
  try {
      window.external.addFavorite(url, title);
  }
catch (e) {
     try {
       window.sidebar.addPanel(title, url, "");
    }
     catch (e) {
         alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
     }
  }
}
</script>
<div id="Top">
    <div class=" block header_bg">
        
        <div class="top_nav">
            <script type="text/javascript">
                //初始化主菜单
                function sw_nav(obj,tag){
                    var DisSub = document.getElementById("DisSub_"+obj);
                    var HandleLI= document.getElementById("HandleLI_"+obj);
                    if(tag==1){
                        DisSub.style.display = "block";
                    }else{
                        DisSub.style.display = "none";
                    }
                }
            </script>
            <div class="block">     
            	
                <ul class="top_bav_l">
                	<li class="top_sc">&nbsp;|&nbsp;<a href="javascript:void(0);" onclick="AddFavorite('我的网站',location.href)">收藏本站</a></li>
                    <li>&nbsp;|&nbsp;&nbsp;关注我们：</li>
                    <li style="border:none" class="menuPopup"  onMouseOver="sw_nav(1,1);" onMouseOut="sw_nav(1,0);">
                    	<a id="HandleLI_1" href="javascript:;" title="微博" class="attention"></a>
                        <div id=DisSub_1 class="top_nav_box  top_weibo">
                        	<a href="http://e.weibo.com/ECMBT" target="_blank" title="新浪微博" class="top_weibo"></a>
                            <a href="http://e.t.qq.com/ecmoban_com" target="_blank" title="QQ微博" class="top_qq"></a> 
                        </div> 
                    </li> 
                    <li class="menuPopup" onMouseOver="sw_nav(2,1);" onMouseOut="sw_nav(2,0);">
                    	<a id="HandleLI_2" href="javascript:;" title="微信" class="top_weixin"></a> 
                        <div id="DisSub_2" class="weixinBox" style="display: none;"><img src="themes/ecmoban_shunfeng/images/weixin.png" style="width:150px; height:190px;  background:#0000CC" width="150" height="190"> </div> 
                    </li>
                </ul>
            	
                <div class="header_r">
                
                <script type="text/javascript" src="js/transport_jquery.js"></script><script type="text/javascript" src="js/utils.js"></script>                <font id="ECS_MEMBERZONE" >45ea207d7a2b68c49582d2d22adf953amember_info|a:1:{s:4:"name";s:11:"member_info";}45ea207d7a2b68c49582d2d22adf953a </font>
             
                                                                <a href="user.php" >我的账户</a>
                                                         |
                                                                           <a href="pick_out.php" >选购中心</a>
                                                         |
                                                                           <a href="tag_cloud.php" >标签云</a>
                                                         |
                                                                           <a href="quotation.php" >报价单</a>
                                                                                    
                </div>
            </div>
        </div>
        
        <div class="clearfix"></div>
        <div class="header_top logo_wrap clearfix">
            <a class="logo_new" href="index.php"><img src="themes/ecmoban_shunfeng/images/logo.gif" /></a>
            <div class="ser_n">
                <form id="searchForm" class="searchBox" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()">
                    <input name="keywords" type="text" id="keyword" value="" class="searchKey" />
                    <input type="submit"  name="imageField" class="fm_hd_btm_shbx_bttn" value=" ">
                </form>
                <div class="search_hot">
            	            	</div>
                <div class="clearfix"></div>
            </div>
            
            
            
            <div class="cart_info" id="ECS_CARTINFO">
            	<s class="setCart"></s>
                <a href="flow.php" class="shopborder">我的购物车</a>
                <span class="carts_num">45ea207d7a2b68c49582d2d22adf953acart_info|a:1:{s:4:"name";s:9:"cart_info";}45ea207d7a2b68c49582d2d22adf953a</span>                
            </div>
        </div>
    </div>
</div>
<div style="clear:both"></div>
 
<div class="menu_box clearfix"> 
<div class="block"> 
<div class="menu">
  <a href="index.php" class="cur">首页</a>
    <a href="category.php?id=21"  >女装</a>
 
   <a href="category.php?id=132"  >钻石</a>
 
   <a href="category.php?id=170"  >裤子</a>
 
   <a href="brand.php"  >品牌专区</a>
 
   <a href="group_buy.php"  >团购</a>
 
 </div> 
</div>
</div><style type="text/css"> 
.container, .container *{margin:0; padding:0;}
.container{width:100%;  height:413px;overflow:hidden;position:relative;}
.slider{position:absolute; width:100%;  height:413px;}
.slider li , .slider li a{list-style:none; float:left;width:100%;  height:413px;}
.slider img{width:100%; height:400px; display:block;}
.slider2{width:2000px;}
.slider2 li{float:left;}
.num{position:absolute; left:50%; bottom:5px; width:auto; margin:0 auto;}
.num li{
	float: left;
	color: #669900;
	text-align: center;
	line-height: 16px;
	width: 16px;
	height: 16px;
	font-family: Arial;
	font-size: 12px;
	cursor: pointer;
	overflow: hidden;
	margin: 3px 1px;
	border: 1px solid #669900;
	background-color: #fff;
}
.num li.on{
	color: #fff;
	line-height: 21px;
	width: 21px;
	height: 21px;
	font-size: 16px;
	margin: 0 1px;
	border: 0;
	background-color: #669900;
	font-weight: bold;
}
</style>
<div class="container" id="idTransformView">
  <ul class="slider" id="idSlider">
        <li style="background:url(data/afficheimg/20160128exxdnz.jpg) center 0 no-repeat; position:relative;"><a href="http://" target="_blank"></a></li>
            <li style="background:url(data/afficheimg/20160129prsrpo.png) center 0 no-repeat; position:relative;"><a href="http://mb.ecmoban.com/kuajingtong/" target="_blank"></a></li>
            <li style="background:url(data/afficheimg/20160129vfrgku.jpg) center 0 no-repeat; position:relative;"><a href="http://dsc.ecmoban.com/" target="_blank"></a></li>
            <li style="background:url(data/afficheimg/20160129bcmitn.jpg) center 0 no-repeat; position:relative;"><a href="https://ecjia.com/daojia.html" target="_blank"></a></li>
            <li style="background:url(data/afficheimg/20150608boezpt.png) center 0 no-repeat; position:relative;"><a href="http://www.ectouch.cn/" target="_blank"></a></li>
            <li style="background:url(data/afficheimg/20160129pcigev.png) center 0 no-repeat; position:relative;"><a href="http://www.ecmoban.com/goods-810.html" target="_blank"></a></li>
      
  </ul>
  <ul class="num" id="idNum">
 
    
          <li>
    1    </li> 
         <li>
    2    </li> 
         <li>
    3    </li> 
         <li>
    4    </li> 
         <li>
    5    </li> 
         <li>
    6    </li> 
        
  </ul>
</div>
<script type="text/javascript">
var $s = function (id) {
	return "string" == typeof id ? document.getElementById(id) : id;
};
var Class = {
  create: function() {
	return function() {
	  this.initialize.apply(this, arguments);
	}
  }
}
Object.extend = function(destination, source) {
	for (var property in source) {
		destination[property] = source[property];
	}
	return destination;
}
var TransformView = Class.create();
TransformView.prototype = {
  //容器对象,滑动对象,切换参数,切换数量
  initialize: function(container, slider, parameter, count, options) {
	if(parameter <= 0 || count <= 0) return;
	var oContainer = $s(container), oSlider = $s(slider), oThis = this;
	this.Index = 0;//当前索引
	
	this._timer = null;//定时器
	this._slider = oSlider;//滑动对象
	this._parameter = parameter;//切换参数
	this._count = count || 0;//切换数量
	this._target = 0;//目标参数
	
	this.SetOptions(options);
	
	this.Up = !!this.options.Up;
	this.Step = Math.abs(this.options.Step);
	this.Time = Math.abs(this.options.Time);
	this.Auto = !!this.options.Auto;
	this.Pause = Math.abs(this.options.Pause);
	this.onStart = this.options.onStart;
	this.onFinish = this.options.onFinish;
	
	oContainer.style.overflow = "hidden";
	oContainer.style.position = "relative";
	
	oSlider.style.position = "absolute";
	oSlider.style.top = oSlider.style.left = 0;
  },
  //设置默认属性
  SetOptions: function(options) {
	this.options = {//默认值
		Up:			true,//是否向上(否则向左)
		Step:		5,//滑动变化率
		Time:		10,//滑动延时
		Auto:		true,//是否自动转换
		Pause:		2000,//停顿时间(Auto为true时有效)
		onStart:	function(){},//开始转换时执行
		onFinish:	function(){}//完成转换时执行
	};
	Object.extend(this.options, options || {});
  },
  //开始切换设置
  Start: function() {
	if(this.Index < 0){
		this.Index = this._count - 1;
	} else if (this.Index >= this._count){this.Index = 0;}
	
	this._target = -1 * this._parameter * this.Index;
	this.onStart();
	this.Move();
  },
  //移动
  Move: function() {
	clearTimeout(this._timer);
	var oThis = this, style = this.Up ? "top" : "left", iNow = parseInt(this._slider.style[style]) || 0, iStep = this.GetStep(this._target, iNow);
	
	if (iStep != 0) {
		this._slider.style[style] = (iNow + iStep) + "px";
		this._timer = setTimeout(function(){oThis.Move();}, this.Time);
	} else {
		this._slider.style[style] = this._target + "px";
		this.onFinish();
		if (this.Auto) { this._timer = setTimeout(function(){oThis.Index++; oThis.Start();}, this.Pause); }
	}
  },
  //获取步长
  GetStep: function(iTarget, iNow) {
	var iStep = (iTarget - iNow) / this.Step;
	if (iStep == 0) return 0;
	if (Math.abs(iStep) < 1) return (iStep > 0 ? 1 : -1);
	return iStep;
  },
  //停止
  Stop: function(iTarget, iNow) {
	clearTimeout(this._timer);
	this._slider.style[this.Up ? "top" : "left"] = this._target + "px";
  }
};
window.onload=function(){
	function Each(list, fun){
		for (var i = 0, len = list.length; i < len; i++) {fun(list[i], i);}
	};
	
	var objs = $s("idNum").getElementsByTagName("li");
	var obj_len=objs.length;
	var tv = new TransformView("idTransformView", "idSlider", 413, obj_len, {
		onStart : function(){ Each(objs, function(o, i){o.className = tv.Index == i ? "on" : "";}) }//按钮样式
	});
	
	tv.Start();
	
	Each(objs, function(o, i){
		o.onmouseover = function(){
			o.className = "on";
			tv.Auto = false;
			tv.Index = i;
			tv.Start();
		}
		o.onmouseout = function(){
			o.className = "";
			tv.Auto = true;
			tv.Start();
		}
	})
	
	////////////////////////test2
//	
//	var objs2 = $("idNum2").getElementsByTagName("li");
//	
//	var tv2 = new TransformView("idTransformView2", "idSlider2",1200, 3, {
//		onStart: function(){ Each(objs2, function(o, i){o.className = tv2.Index == i ? "on" : "";}) },//按钮样式
//		Up: false
//	});
//	
//	tv2.Start();
//	
//	Each(objs2, function(o, i){
//		o.onmouseover = function(){
//			o.className = "on";
//			tv2.Auto = false;
//			tv2.Index = i;
//			tv2.Start();
//		}
//		o.onmouseout = function(){
//			o.className = "";
//			tv2.Auto = true;
//			tv2.Start();
//		}
//	})
//	
//	$("idStop").onclick = function(){tv2.Auto = false; tv2.Stop();}
//	$("idStart").onclick = function(){tv2.Auto = true; tv2.Start();}
//	$("idNext").onclick = function(){tv2.Index++; tv2.Start();}
//	$("idPre").onclick = function(){tv2.Index--;tv2.Start();}
//	$("idFast").onclick = function(){ if(--tv2.Step <= 0){tv2.Step = 1;} }
//	$("idSlow").onclick = function(){ if(++tv2.Step >= 10){tv2.Step = 10;} }
//	$("idReduce").onclick = function(){ tv2.Pause-=1000; if(tv2.Pause <= 0){tv2.Pause = 0;} }
//	$("idAdd").onclick = function(){ tv2.Pause+=1000; if(tv2.Pause >= 5000){tv2.Pause = 5000;} }
//	
//	$("idReset").onclick = function(){
//		tv2.Step = Math.abs(tv2.options.Step);
//		tv2.Time = Math.abs(tv2.options.Time);
//		tv2.Auto = !!tv2.options.Auto;
//		tv2.Pause = Math.abs(tv2.options.Pause);
//	}
	
}
</script><div class="blank" style="height:30px;"></div>
<div class="block clearfix Main">
<script type="text/javascript">
          //初始化主菜单
            function sw_nav2(obj,tag)
            {
            var DisSub2 = document.getElementById("DisSub2_"+obj);
            var HandleLI2= document.getElementById("HandleLI2_"+obj);
                if(tag==1)
                {
                    DisSub2.style.display = "block";
					HandleLI2.className="current i-master";
                }
                else
                {
                    DisSub2.style.display = "none";
					HandleLI2.className="i-master";
                }
            }
</script>
 
    
    
<div id="category_tree">
	<dl class="clearfix">
		<div class="mainCategory">
    		<h2><a href="search.php" target="_blank">所有商品分类</a></h2>
    	</div>
    	<div class="allSort">
        	<div id="booksort">
    		    		<div  class="dt"   onMouseOver="sw_nav2(1,1);" onMouseOut="sw_nav2(1,0);" >
        		<div id="HandleLI2_1" class="i-master"><a class="a " href="category.php?id=132">钻石</a></div>
            	<dd id=DisSub2_1 style="display:none">
                	<div class="i-left">
                    	<div class="cat-sort">
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=138">针织衫</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=139">针织背心</a>
                    				                    				<a class="over_3" href="category.php?id=140">套头衫</a>
                    				                    				<a class="over_3" href="category.php?id=141">开衫</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=154">内衣</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=156">内衣/套装</a>
                    				                    				<a class="over_3" href="category.php?id=157">袜子</a>
                    				                    				<a class="over_3" href="category.php?id=158">家居服</a>
                    				                    				<a class="over_3" href="category.php?id=159">内裤</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=160">外套</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=161">皮衣/皮草</a>
                    				                    				<a class="over_3" href="category.php?id=162">卫衣</a>
                    				                    				<a class="over_3" href="category.php?id=163">风衣</a>
                    				                    				<a class="over_3" href="category.php?id=164">大衣</a>
                    				                    				<a class="over_3" href="category.php?id=166">西服</a>
                    				                    				<a class="over_3" href="category.php?id=167">棉服</a>
                    				                    				<a class="over_3" href="category.php?id=168">羽绒服</a>
                    				                    				<a class="over_3" href="category.php?id=169">夹克</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=170">裤子</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=171">西裤</a>
                    				                    				<a class="over_3" href="category.php?id=172">牛仔中裤</a>
                    				                    				<a class="over_3" href="category.php?id=173">休闲裤</a>
                    				                    				<a class="over_3" href="category.php?id=174">牛仔裤</a>
                    				                    				<a class="over_3" href="category.php?id=623">休闲短裤</a>
                    				                    				<a class="over_3" href="category.php?id=629">休闲分裤</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=175">T恤</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=176">长袖T恤</a>
                    				                    				<a class="over_3" href="category.php?id=178">短袖T恤</a>
                    				                    				<a class="over_3" href="category.php?id=179">背心</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=182">POLO衫</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=185">长袖POLO衫</a>
                    				                    				<a class="over_3" href="category.php?id=188">短袖POLO衫</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=190">衬衫</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=193">短袖衬衫</a>
                    				                    				<a class="over_3" href="category.php?id=194">长袖衬衫</a>
                    				                				</span>
                            </div>
                			                        </div>
                    </div>
            	</dd> 
        	</div>
    		    		<div  class="dt"   onMouseOver="sw_nav2(2,1);" onMouseOut="sw_nav2(2,0);" >
        		<div id="HandleLI2_2" class="i-master"><a class="a t" href="category.php?id=21">女装</a></div>
            	<dd id=DisSub2_2 style="display:none">
                	<div class="i-left">
                    	<div class="cat-sort">
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=22">T恤/POLO</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=23">POLO衫</a>
                    				                    				<a class="over_3" href="category.php?id=26">短袖T恤</a>
                    				                    				<a class="over_3" href="category.php?id=27">长袖T恤</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=29">衬衫</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=30">长袖衬衫</a>
                    				                    				<a class="over_3" href="category.php?id=32">短袖衬衫</a>
                    				                    				<a class="over_3" href="category.php?id=33">分袖衬衫</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=34">裤子</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=35">牛仔分裤</a>
                    				                    				<a class="over_3" href="category.php?id=36">牛仔短裤</a>
                    				                    				<a class="over_3" href="category.php?id=37">休闲裤</a>
                    				                    				<a class="over_3" href="category.php?id=38">牛仔裤</a>
                    				                    				<a class="over_3" href="category.php?id=630">休闲短裤</a>
                    				                    				<a class="over_3" href="category.php?id=631">哈伦裤</a>
                    				                    				<a class="over_3" href="category.php?id=632">连身裤</a>
                    				                    				<a class="over_3" href="category.php?id=633">打底裤</a>
                    				                    				<a class="over_3" href="category.php?id=634">西裤</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=39">外套</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=40">卫衣</a>
                    				                    				<a class="over_3" href="category.php?id=41">西装</a>
                    				                    				<a class="over_3" href="category.php?id=42">羽绒服</a>
                    				                    				<a class="over_3" href="category.php?id=43">棉服</a>
                    				                    				<a class="over_3" href="category.php?id=624">皮衣</a>
                    				                    				<a class="over_3" href="category.php?id=625">夹克</a>
                    				                    				<a class="over_3" href="category.php?id=626">风衣</a>
                    				                    				<a class="over_3" href="category.php?id=627">大衣</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=110">针织衫</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=114">套头衫</a>
                    				                    				<a class="over_3" href="category.php?id=115">开衫</a>
                    				                    				<a class="over_3" href="category.php?id=628">短袖针织衫</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=124">裙</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=125">半裙</a>
                    				                    				<a class="over_3" href="category.php?id=126">连衣裙</a>
                    				                    				<a class="over_3" href="category.php?id=127">吊带裙</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=635">中老年服装</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=636">T恤</a>
                    				                    				<a class="over_3" href="category.php?id=637">针织衫</a>
                    				                    				<a class="over_3" href="category.php?id=638">衬衫</a>
                    				                    				<a class="over_3" href="category.php?id=639">裤装</a>
                    				                    				<a class="over_3" href="category.php?id=640">裙装</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=641">内衣</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=642">文胸</a>
                    				                    				<a class="over_3" href="category.php?id=643">内裤</a>
                    				                    				<a class="over_3" href="category.php?id=644">睡衣</a>
                    				                    				<a class="over_3" href="category.php?id=645">美体内衣</a>
                    				                    				<a class="over_3" href="category.php?id=646">套装/打底</a>
                    				                    				<a class="over_3" href="category.php?id=647">丝袜/裤袜</a>
                    				                				</span>
                            </div>
                			                        </div>
                    </div>
            	</dd> 
        	</div>
    		    		<div  class="dt"   onMouseOver="sw_nav2(3,1);" onMouseOut="sw_nav2(3,0);" >
        		<div id="HandleLI2_3" class="i-master"><a class="a " href="category.php?id=16">运动户外</a></div>
            	<dd id=DisSub2_3 style="display:none">
                	<div class="i-left">
                    	<div class="cat-sort">
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=120">运动服</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=201">MP3/MP4</a>
                    				                    				<a class="over_3" href="category.php?id=202">MID</a>
                    				                    				<a class="over_3" href="category.php?id=204">音箱</a>
                    				                    				<a class="over_3" href="category.php?id=205">高清播放器</a>
                    				                    				<a class="over_3" href="category.php?id=206">电子书</a>
                    				                    				<a class="over_3" href="category.php?id=207">电子词典</a>
                    				                    				<a class="over_3" href="category.php?id=208">MP3/MP4配件</a>
                    				                    				<a class="over_3" href="category.php?id=209">录音笔</a>
                    				                    				<a class="over_3" href="category.php?id=210">麦克风</a>
                    				                    				<a class="over_3" href="category.php?id=211">专业音频</a>
                    				                    				<a class="over_3" href="category.php?id=212">电子教育</a>
                    				                    				<a class="over_3" href="category.php?id=213">数码相框</a>
                    				                    				<a class="over_3" href="category.php?id=214">苹果配件</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=17">运动鞋</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=2">CDMA手机</a>
                    				                    				<a class="over_3" href="category.php?id=18">3G手机</a>
                    				                    				<a class="over_3" href="category.php?id=19">双模手机</a>
                    				                    				<a class="over_3" href="category.php?id=20">GSM手机</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=116">运动包</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=117">便携相机</a>
                    				                    				<a class="over_3" href="category.php?id=118">单反相机</a>
                    				                    				<a class="over_3" href="category.php?id=119">数码摄像机</a>
                    				                    				<a class="over_3" href="category.php?id=203">耳机</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=6">装备配件</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=7">充 电 器</a>
                    				                    				<a class="over_3" href="category.php?id=8">耳机</a>
                    				                    				<a class="over_3" href="category.php?id=9">电池</a>
                    				                    				<a class="over_3" href="category.php?id=11">读卡内存卡</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=12">户外服装</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=13">小灵通充值卡</a>
                    				                    				<a class="over_3" href="category.php?id=14">移动充值卡</a>
                    				                    				<a class="over_3" href="category.php?id=15">联通充值卡</a>
                    				                				</span>
                            </div>
                			                        </div>
                    </div>
            	</dd> 
        	</div>
    		    		<div  class="dt"   onMouseOver="sw_nav2(4,1);" onMouseOut="sw_nav2(4,0);" >
        		<div id="HandleLI2_4" class="i-master"><a class="a t" href="category.php?id=69">母婴童</a></div>
            	<dd id=DisSub2_4 style="display:none">
                	<div class="i-left">
                    	<div class="cat-sort">
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=70">童装</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=71">笔记本</a>
                    				                    				<a class="over_3" href="category.php?id=72">台式机</a>
                    				                    				<a class="over_3" href="category.php?id=73">服务器</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=74">婴童洗护</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=75">CPU</a>
                    				                    				<a class="over_3" href="category.php?id=76">硬盘</a>
                    				                    				<a class="over_3" href="category.php?id=77">内存</a>
                    				                    				<a class="over_3" href="category.php?id=78">显卡</a>
                    				                    				<a class="over_3" href="category.php?id=79">主板</a>
                    				                    				<a class="over_3" href="category.php?id=80">声卡</a>
                    				                    				<a class="over_3" href="category.php?id=81">光驱</a>
                    				                    				<a class="over_3" href="category.php?id=82">散热器</a>
                    				                    				<a class="over_3" href="category.php?id=112">UPS电源</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=83">孕妈专区</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=84">显示器</a>
                    				                    				<a class="over_3" href="category.php?id=86">鼠标</a>
                    				                    				<a class="over_3" href="category.php?id=87">键盘</a>
                    				                    				<a class="over_3" href="category.php?id=88">电源</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=89">婴儿装</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=90">打印机</a>
                    				                    				<a class="over_3" href="category.php?id=91">一体机</a>
                    				                    				<a class="over_3" href="category.php?id=92">复印机</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=93">玩具/早教</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=94">路由器</a>
                    				                    				<a class="over_3" href="category.php?id=95">网卡</a>
                    				                    				<a class="over_3" href="category.php?id=96">交换机</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=97">喂养用品</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=98">杀毒软件</a>
                    				                    				<a class="over_3" href="category.php?id=99">办公软件</a>
                    				                    				<a class="over_3" href="category.php?id=100">游戏软件</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=101">童鞋</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=102">墨盒</a>
                    				                    				<a class="over_3" href="category.php?id=103">墨粉</a>
                    				                    				<a class="over_3" href="category.php?id=104">色带</a>
                    				                    				<a class="over_3" href="category.php?id=111">硒鼓</a>
                    				                				</span>
                            </div>
                			                        </div>
                    </div>
            	</dd> 
        	</div>
    		    		<div  class="dt"   onMouseOver="sw_nav2(5,1);" onMouseOut="sw_nav2(5,0);" >
        		<div id="HandleLI2_5" class="i-master"><a class="a " href="category.php?id=44">鞋靴</a></div>
            	<dd id=DisSub2_5 style="display:none">
                	<div class="i-left">
                    	<div class="cat-sort">
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=45">家居用品</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=46">被子</a>
                    				                    				<a class="over_3" href="category.php?id=47">枕头</a>
                    				                    				<a class="over_3" href="category.php?id=48">家纺毛巾</a>
                    				                    				<a class="over_3" href="category.php?id=49">卫浴用品</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=50">女鞋</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=51">休闲鞋</a>
                    				                    				<a class="over_3" href="category.php?id=52">童鞋</a>
                    				                    				<a class="over_3" href="category.php?id=53">腰带</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=54">礼品箱包</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=55">烟具</a>
                    				                    				<a class="over_3" href="category.php?id=56">瑞士军刀</a>
                    				                    				<a class="over_3" href="category.php?id=57">工艺藏品</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=58">钟表首饰</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=59">日本表店</a>
                    				                    				<a class="over_3" href="category.php?id=60">流行饰品</a>
                    				                    				<a class="over_3" href="category.php?id=61">国产表店</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=62">运动健康</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=63">运动器材</a>
                    				                    				<a class="over_3" href="category.php?id=64">户外装备</a>
                    				                    				<a class="over_3" href="category.php?id=65">室内球类</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=66">趣味玩具</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=67">电动玩具</a>
                    				                    				<a class="over_3" href="category.php?id=68">遥控玩具</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=121">男鞋</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=122">乳液/面霜</a>
                    				                    				<a class="over_3" href="category.php?id=123">身体护理</a>
                    				                				</span>
                            </div>
                			                        </div>
                    </div>
            	</dd> 
        	</div>
    		    		<div  class="dt"   onMouseOver="sw_nav2(6,1);" onMouseOut="sw_nav2(6,0);" >
        		<div id="HandleLI2_6" class="i-master"><a class="a t" href="category.php?id=215">箱包</a></div>
            	<dd id=DisSub2_6 style="display:none">
                	<div class="i-left">
                    	<div class="cat-sort">
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=216">男装</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=217">衬衫</a>
                    				                    				<a class="over_3" href="category.php?id=218">T恤</a>
                    				                    				<a class="over_3" href="category.php?id=219">针织</a>
                    				                    				<a class="over_3" href="category.php?id=220">外套</a>
                    				                    				<a class="over_3" href="category.php?id=221">羽绒服</a>
                    				                    				<a class="over_3" href="category.php?id=222">裤子</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=223">女装</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=224">衬衫</a>
                    				                    				<a class="over_3" href="category.php?id=225">T恤</a>
                    				                    				<a class="over_3" href="category.php?id=226">针织</a>
                    				                    				<a class="over_3" href="category.php?id=227">外套</a>
                    				                    				<a class="over_3" href="category.php?id=228">裙子</a>
                    				                    				<a class="over_3" href="category.php?id=229">羽绒服</a>
                    				                    				<a class="over_3" href="category.php?id=230">裤子</a>
                    				                    				<a class="over_3" href="category.php?id=231">孕妇装</a>
                    				                    				<a class="over_3" href="category.php?id=232">皮衣</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=233">运动</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=234">运动装</a>
                    				                    				<a class="over_3" href="category.php?id=235">运动鞋</a>
                    				                    				<a class="over_3" href="category.php?id=236">运动配件</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=237">内衣</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=238">文胸</a>
                    				                    				<a class="over_3" href="category.php?id=239">内裤</a>
                    				                    				<a class="over_3" href="category.php?id=240">背心</a>
                    				                    				<a class="over_3" href="category.php?id=241">塑身</a>
                    				                    				<a class="over_3" href="category.php?id=242">睡衣</a>
                    				                    				<a class="over_3" href="category.php?id=243">家居</a>
                    				                    				<a class="over_3" href="category.php?id=244">袜子</a>
                    				                    				<a class="over_3" href="category.php?id=245">情趣</a>
                    				                    				<a class="over_3" href="category.php?id=246">保暖</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=247">配饰</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=248">眼镜</a>
                    				                    				<a class="over_3" href="category.php?id=249">腰带</a>
                    				                    				<a class="over_3" href="category.php?id=250">帽子</a>
                    				                    				<a class="over_3" href="category.php?id=251">围巾</a>
                    				                    				<a class="over_3" href="category.php?id=252">手套</a>
                    				                    				<a class="over_3" href="category.php?id=253">领带</a>
                    				                    				<a class="over_3" href="category.php?id=254">袖扣</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=255">鞋靴</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=256">男鞋</a>
                    				                    				<a class="over_3" href="category.php?id=257">女鞋</a>
                    				                    				<a class="over_3" href="category.php?id=258">拖鞋</a>
                    				                    				<a class="over_3" href="category.php?id=259">童鞋</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=260">童装</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=261">女童</a>
                    				                    				<a class="over_3" href="category.php?id=262">男童</a>
                    				                    				<a class="over_3" href="category.php?id=263">宝宝服饰</a>
                    				                    				<a class="over_3" href="category.php?id=264">亲子装</a>
                    				                				</span>
                            </div>
                			                        </div>
                    </div>
            	</dd> 
        	</div>
    		    		<div  class="dt"   onMouseOver="sw_nav2(7,1);" onMouseOut="sw_nav2(7,0);" >
        		<div id="HandleLI2_7" class="i-master"><a class="a " href="category.php?id=265">配饰</a></div>
            	<dd id=DisSub2_7 style="display:none">
                	<div class="i-left">
                    	<div class="cat-sort">
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=266">饰品</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=267">洁面乳</a>
                    				                    				<a class="over_3" href="category.php?id=268">爽肤水</a>
                    				                    				<a class="over_3" href="category.php?id=269">精华露</a>
                    				                    				<a class="over_3" href="category.php?id=270">乳液面霜</a>
                    				                    				<a class="over_3" href="category.php?id=271">面膜面贴</a>
                    				                    				<a class="over_3" href="category.php?id=272">眼部护理</a>
                    				                    				<a class="over_3" href="category.php?id=273">颈部护理</a>
                    				                    				<a class="over_3" href="category.php?id=274">T区护理</a>
                    				                    				<a class="over_3" href="category.php?id=275">护肤套装</a>
                    				                    				<a class="over_3" href="category.php?id=276">防晒隔离</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=277">配饰</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=278">洗发护发</a>
                    				                    				<a class="over_3" href="category.php?id=279">染发/造型</a>
                    				                    				<a class="over_3" href="category.php?id=280">沐浴</a>
                    				                    				<a class="over_3" href="category.php?id=281">磨砂/浴盐</a>
                    				                    				<a class="over_3" href="category.php?id=282">身体乳</a>
                    				                    				<a class="over_3" href="category.php?id=283">手工/香皂</a>
                    				                    				<a class="over_3" href="category.php?id=284">香薰精油</a>
                    				                    				<a class="over_3" href="category.php?id=285">纤体瘦身</a>
                    				                    				<a class="over_3" href="category.php?id=286">脱毛膏</a>
                    				                    				<a class="over_3" href="category.php?id=287">手足护理</a>
                    				                    				<a class="over_3" href="category.php?id=288">洗护套装</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=289">手表</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=290">牙膏/牙粉</a>
                    				                    				<a class="over_3" href="category.php?id=291">漱口水</a>
                    				                    				<a class="over_3" href="category.php?id=292">牙刷/牙线</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=293">女性护理</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=294">卫生巾</a>
                    				                    				<a class="over_3" href="category.php?id=295">卫生护垫</a>
                    				                    				<a class="over_3" href="category.php?id=296">洗液</a>
                    				                    				<a class="over_3" href="category.php?id=297">美容食品</a>
                    				                    				<a class="over_3" href="category.php?id=298">其它</a>
                    				                    				<a class="over_3" href="category.php?id=315">卸妆</a>
                    				                    				<a class="over_3" href="category.php?id=316">美甲</a>
                    				                    				<a class="over_3" href="category.php?id=317">彩妆工具</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=299">男士护理</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=300">脸部</a>
                    				                    				<a class="over_3" href="category.php?id=301">眼部</a>
                    				                    				<a class="over_3" href="category.php?id=302">身体护理</a>
                    				                    				<a class="over_3" href="category.php?id=303">男士香水</a>
                    				                    				<a class="over_3" href="category.php?id=304">剃须</a>
                    				                    				<a class="over_3" href="category.php?id=305">防脱洗护</a>
                    				                    				<a class="over_3" href="category.php?id=306">唇膏</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=307">魅力彩妆</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=308">粉底/遮瑕</a>
                    				                    				<a class="over_3" href="category.php?id=309">腮红</a>
                    				                    				<a class="over_3" href="category.php?id=310">眼影/眼线</a>
                    				                    				<a class="over_3" href="category.php?id=311">眉笔</a>
                    				                    				<a class="over_3" href="category.php?id=312">睫毛膏</a>
                    				                    				<a class="over_3" href="category.php?id=313">唇膏唇彩</a>
                    				                    				<a class="over_3" href="category.php?id=314">彩妆组合</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=318">帽子</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=319">女士香水</a>
                    				                    				<a class="over_3" href="category.php?id=320">男士香水</a>
                    				                    				<a class="over_3" href="category.php?id=321">组合套装</a>
                    				                    				<a class="over_3" href="category.php?id=322">迷你香水</a>
                    				                    				<a class="over_3" href="category.php?id=323">香体走珠</a>
                    				                				</span>
                            </div>
                			                        </div>
                    </div>
            	</dd> 
        	</div>
    		    		<div  class="dt"   onMouseOver="sw_nav2(8,1);" onMouseOut="sw_nav2(8,0);" >
        		<div id="HandleLI2_8" class="i-master"><a class="a t" href="category.php?id=324">美妆</a></div>
            	<dd id=DisSub2_8 style="display:none">
                	<div class="i-left">
                    	<div class="cat-sort">
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=325">个人洗护</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=326">钱包/卡包</a>
                    				                    				<a class="over_3" href="category.php?id=327">手拿包</a>
                    				                    				<a class="over_3" href="category.php?id=328">单肩包</a>
                    				                    				<a class="over_3" href="category.php?id=329">双肩包</a>
                    				                    				<a class="over_3" href="category.php?id=330">手提包</a>
                    				                    				<a class="over_3" href="category.php?id=331">斜挎包</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=348">香水精油</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=349">火机烟具</a>
                    				                    				<a class="over_3" href="category.php?id=350">礼品文具</a>
                    				                    				<a class="over_3" href="category.php?id=351">瑞士军刀</a>
                    				                    				<a class="over_3" href="category.php?id=352">收藏品</a>
                    				                    				<a class="over_3" href="category.php?id=353">工艺摆件</a>
                    				                    				<a class="over_3" href="category.php?id=354">创意礼品</a>
                    				                    				<a class="over_3" href="category.php?id=355">礼卡礼券</a>
                    				                    				<a class="over_3" href="category.php?id=356">鲜花速递</a>
                    				                    				<a class="over_3" href="category.php?id=357">婚庆用品</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=358">奢侈品</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=359">GUCCI</a>
                    				                    				<a class="over_3" href="category.php?id=360">PRADA</a>
                    				                    				<a class="over_3" href="category.php?id=361">FENDI</a>
                    				                    				<a class="over_3" href="category.php?id=362">BURBERRY</a>
                    				                    				<a class="over_3" href="category.php?id=363">BOTTEGA VENETA</a>
                    				                    				<a class="over_3" href="category.php?id=364">DIOR</a>
                    				                    				<a class="over_3" href="category.php?id=365">Ferragamo</a>
                    				                    				<a class="over_3" href="category.php?id=366">MONTBLANC</a>
                    				                    				<a class="over_3" href="category.php?id=367">ARMANI</a>
                    				                    				<a class="over_3" href="category.php?id=368">RIMOWA</a>
                    				                    				<a class="over_3" href="category.php?id=369">MIUMIU</a>
                    				                    				<a class="over_3" href="category.php?id=370">BALENCIAGA</a>
                    				                    				<a class="over_3" href="category.php?id=371">Dolce&amp;Gabbana</a>
                    				                    				<a class="over_3" href="category.php?id=372">MARC JACOBS</a>
                    				                    				<a class="over_3" href="category.php?id=373">COACH</a>
                    				                    				<a class="over_3" href="category.php?id=374">更多品牌</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=375">面部护理</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=376">瑞士品牌</a>
                    				                    				<a class="over_3" href="category.php?id=377">国产品牌</a>
                    				                    				<a class="over_3" href="category.php?id=378">日本品牌</a>
                    				                    				<a class="over_3" href="category.php?id=379">时尚品牌</a>
                    				                    				<a class="over_3" href="category.php?id=380">闹钟挂钟</a>
                    				                    				<a class="over_3" href="category.php?id=381">儿童手表</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=382">彩妆</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=383">纯金K金饰品</a>
                    				                    				<a class="over_3" href="category.php?id=384">金银投资</a>
                    				                    				<a class="over_3" href="category.php?id=385">银饰</a>
                    				                    				<a class="over_3" href="category.php?id=386">钻石饰品</a>
                    				                    				<a class="over_3" href="category.php?id=387">翡翠玉石</a>
                    				                    				<a class="over_3" href="category.php?id=388">水晶玛瑙</a>
                    				                    				<a class="over_3" href="category.php?id=389">宝石珍珠</a>
                    				                    				<a class="over_3" href="category.php?id=390">时尚饰品</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=662">美妆团购</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=663">面部护理</a>
                    				                    				<a class="over_3" href="category.php?id=664">时尚彩妆</a>
                    				                    				<a class="over_3" href="category.php?id=665">个人洗护</a>
                    				                    				<a class="over_3" href="category.php?id=666">其他护理</a>
                    				                				</span>
                            </div>
                			                        </div>
                    </div>
            	</dd> 
        	</div>
    		    		<div  class="dt"  style="border-bottom:none;" onMouseOver="sw_nav2(9,1);" onMouseOut="sw_nav2(9,0);" >
        		<div id="HandleLI2_9" class="i-master"><a class="a " href="category.php?id=391">家居</a></div>
            	<dd id=DisSub2_9 style="display:none">
                	<div class="i-left">
                    	<div class="cat-sort">
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=392">户外鞋服</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=393">户外服装</a>
                    				                    				<a class="over_3" href="category.php?id=394">户外鞋袜</a>
                    				                    				<a class="over_3" href="category.php?id=395">户外配饰</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=396">户外装备</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=397">帐篷</a>
                    				                    				<a class="over_3" href="category.php?id=398">睡袋</a>
                    				                    				<a class="over_3" href="category.php?id=399">登山攀岩</a>
                    				                    				<a class="over_3" href="category.php?id=400">户外背包</a>
                    				                    				<a class="over_3" href="category.php?id=401">户外照明</a>
                    				                    				<a class="over_3" href="category.php?id=402">户外垫子</a>
                    				                    				<a class="over_3" href="category.php?id=403">户外仪表</a>
                    				                    				<a class="over_3" href="category.php?id=404">户外工具</a>
                    				                    				<a class="over_3" href="category.php?id=405">望远镜</a>
                    				                    				<a class="over_3" href="category.php?id=406">垂钓用品</a>
                    				                    				<a class="over_3" href="category.php?id=407">旅游用品</a>
                    				                    				<a class="over_3" href="category.php?id=408">便携桌椅床</a>
                    				                    				<a class="over_3" href="category.php?id=409">烧烤用品</a>
                    				                    				<a class="over_3" href="category.php?id=410">野餐炊具</a>
                    				                    				<a class="over_3" href="category.php?id=411">军迷用品</a>
                    				                    				<a class="over_3" href="category.php?id=412">游泳用具</a>
                    				                    				<a class="over_3" href="category.php?id=413">泳衣</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=414">运动器械</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=415">健身器械</a>
                    				                    				<a class="over_3" href="category.php?id=416">运动器材</a>
                    				                    				<a class="over_3" href="category.php?id=417">防护器具</a>
                    				                    				<a class="over_3" href="category.php?id=418">骑行运动</a>
                    				                    				<a class="over_3" href="category.php?id=419">极限运动</a>
                    				                    				<a class="over_3" href="category.php?id=420">武术搏击</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=421">纤体瑜伽</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=422">瑜伽垫</a>
                    				                    				<a class="over_3" href="category.php?id=423">瑜伽服</a>
                    				                    				<a class="over_3" href="category.php?id=424">瑜伽配件</a>
                    				                    				<a class="over_3" href="category.php?id=425">瑜伽套装</a>
                    				                    				<a class="over_3" href="category.php?id=426">舞蹈鞋服</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=427">体育娱乐</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=428">羽毛球</a>
                    				                    				<a class="over_3" href="category.php?id=429">乒乓球</a>
                    				                    				<a class="over_3" href="category.php?id=430">篮球</a>
                    				                    				<a class="over_3" href="category.php?id=431">足球</a>
                    				                    				<a class="over_3" href="category.php?id=432">网球</a>
                    				                    				<a class="over_3" href="category.php?id=433">排球</a>
                    				                    				<a class="over_3" href="category.php?id=434">高尔夫球</a>
                    				                    				<a class="over_3" href="category.php?id=435">棋牌麻将</a>
                    				                    				<a class="over_3" href="category.php?id=436">其他</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=437">成人用品</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=438">安全避孕</a>
                    				                    				<a class="over_3" href="category.php?id=439">验孕测孕</a>
                    				                    				<a class="over_3" href="category.php?id=440">人体润滑</a>
                    				                    				<a class="over_3" href="category.php?id=441">情爱玩具</a>
                    				                    				<a class="over_3" href="category.php?id=442">情趣内衣</a>
                    				                    				<a class="over_3" href="category.php?id=443">组合套装</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=444">保健器械</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=445">养生器械</a>
                    				                    				<a class="over_3" href="category.php?id=446">保健用品</a>
                    				                    				<a class="over_3" href="category.php?id=447">康复辅助</a>
                    				                    				<a class="over_3" href="category.php?id=448">家庭护理</a>
                    				                				</span>
                            </div>
                			                            <div class="sort">
                				<a class="over_2" href="category.php?id=449">急救卫生</a>
                				<span>
                    				                    				<a class="over_3" href="category.php?id=450">跌打损伤</a>
                    				                    				<a class="over_3" href="category.php?id=451">烫伤止痒</a>
                    				                    				<a class="over_3" href="category.php?id=452">防裂抗冻</a>
                    				                    				<a class="over_3" href="category.php?id=453">口腔咽部</a>
                    				                    				<a class="over_3" href="category.php?id=454">眼部保健</a>
                    				                    				<a class="over_3" href="category.php?id=455">鼻炎健康</a>
                    				                    				<a class="over_3" href="category.php?id=456">风湿骨痛</a>
                    				                    				<a class="over_3" href="category.php?id=457">生殖泌尿</a>
                    				                    				<a class="over_3" href="category.php?id=458">美体塑身</a>
                    				                				</span>
                            </div>
                			                        </div>
                    </div>
            	</dd> 
        	</div>
    		            </div>
    	</div> 
	</dl>
</div><div class="AreaL">
 
<div id="mallNews"    class="  box_1">
    <h3><span>站内快讯</span></h3>
    <div class="NewsList tc  " style="border-top:none">
        <ul>
                <li>
      <a href="article.php?id=33" title="三星SGHU308说明书下载">三星SGHU308说明书下载</a>
        </li>
                <li>
      <a href="article.php?id=32" title="手机游戏下载">手机游戏下载</a>
        </li>
                <li>
      <a href="article.php?id=34" title="3G知识普及">3G知识普及</a>
        </li>
                <li>
      <a href="article.php?id=31" title="诺基亚6681手机广告欣赏">诺基亚6681手机广告欣赏</a>
        </li>
                <li>
      <a href="article.php?id=8" title="诺基亚牵手移动 5款热门TD手机机型推荐">诺基亚牵手移动 5款热门TD手机...</a>
        </li>
                </ul>
    </div>
</div>
<div  class="blank"></div>  
45ea207d7a2b68c49582d2d22adf953aads|a:3:{s:4:"name";s:3:"ads";s:2:"id";N;s:3:"num";N;}45ea207d7a2b68c49582d2d22adf953a
<div class="blank"></div>
</div>
<div class="Arear">
<div class="sale_box clearfix">
<h3><span>特价商品</span></h3>
 
      <div class="clearfix">
                 
           <ul class="clearfix">
           <li class="goodsimg"><a href="goods.php?id=134"><img src="images/201601/thumb_img/134_thumb_G_1454032795337.jpg" border="0" alt="爱冕－白18K金钻石戒指" class="B_blue"/></a></li>
			<li> <p><a href="goods.php?id=134" title="爱冕－白18K金钻石戒指">爱冕－白18K...</a></p>
             市场价：<font class="market">￥8415.6元</font> <br/>
           促销价：<font class="f1">￥1100元</font></li>
           </ul>
                 
           <ul class="clearfix">
           <li class="goodsimg"><a href="goods.php?id=136"><img src="images/201601/thumb_img/136_thumb_G_1454032609587.jpg" border="0" alt="比 翼 － 铂900对戒" class="B_blue"/></a></li>
			<li> <p><a href="goods.php?id=136" title="比 翼 － 铂900对戒">比 翼 － 铂...</a></p>
             市场价：<font class="market">￥10728元</font> <br/>
           促销价：<font class="f1">￥1100元</font></li>
           </ul>
                 
           <ul class="clearfix">
           <li class="goodsimg"><a href="goods.php?id=140"><img src="images/201601/thumb_img/140_thumb_G_1454030885517.jpg" border="0" alt="暖怀－白18K金钻石戒指" class="B_blue"/></a></li>
			<li> <p><a href="goods.php?id=140" title="暖怀－白18K金钻石戒指">暖怀－白18K...</a></p>
             市场价：<font class="market">￥5280元</font> <br/>
           促销价：<font class="f1">￥110元</font></li>
           </ul>
                 
           <ul class="clearfix">
           <li class="goodsimg"><a href="goods.php?id=139"><img src="images/201601/thumb_img/139_thumb_G_1454031123829.jpg" border="0" alt="愿望－红18K金钻石手镯" class="B_blue"/></a></li>
			<li> <p><a href="goods.php?id=139" title="愿望－红18K金钻石手镯">愿望－红18K...</a></p>
             市场价：<font class="market">￥4776元</font> <br/>
           促销价：<font class="f1">￥2220元</font></li>
           </ul>
                </div>
 </div>
 
<div class="blank" style="height:1px;"></div>
 
</div> 
  <div class="goodsBox_1">
  
  
  
<div class="xm-box">
<h4 class="title"><span>新品上架</span> <a class="more" href="search.php?intro=new">更多</a></h4>
<div id="show_new_area" class="clearfix">
      <div class="goodsItem">
       
           <a href="goods.php?id=136"><img src="images/201601/thumb_img/136_thumb_G_1454032609587.jpg" alt="比 翼 － 铂900对戒" class="goodsimg" /></a><br />
           <p class="f1"><a href="goods.php?id=136" title="比 翼 － 铂900对戒">比 翼 － 铂...</a></p>
           
           
 市场价：<font class="market">￥10728元</font> <br/>
      
           本店价：<font class="f1">
                     ￥1100元                     </font>      
		    
        </div>
    <div class="goodsItem">
       
           <a href="goods.php?id=140"><img src="images/201601/thumb_img/140_thumb_G_1454030885517.jpg" alt="暖怀－白18K金钻石戒指" class="goodsimg" /></a><br />
           <p class="f1"><a href="goods.php?id=140" title="暖怀－白18K金钻石戒指">暖怀－白18K...</a></p>
           
           
 市场价：<font class="market">￥5280元</font> <br/>
      
           本店价：<font class="f1">
                     ￥110元                     </font>      
		    
        </div>
    <div class="goodsItem">
       
           <a href="goods.php?id=137"><img src="images/201601/thumb_img/137_thumb_G_1454031910854.jpg" alt="北极光爱之舞系列铂金婚戒套装" class="goodsimg" /></a><br />
           <p class="f1"><a href="goods.php?id=137" title="北极光爱之舞系列铂金婚戒套装">北极光爱之舞系...</a></p>
           
           
 市场价：<font class="market">￥14400元</font> <br/>
      
           本店价：<font class="f1">
                     ￥12000元                     </font>      
		    
        </div>
   
    </div>
</div>
<div class="blank"></div>
  <div class="xm-box">
<h4 class="title"><span>热卖商品</span> <a class="more" href="search.php?intro=hot">更多</a></h4>
<div id="show_hot_area" class="clearfix">
      <div class="goodsItem">
       
           <a href="goods.php?id=134"><img src="images/201601/thumb_img/134_thumb_G_1454032795337.jpg" alt="爱冕－白18K金钻石戒指" class="goodsimg" /></a><br />
           <p class="f1"><a href="goods.php?id=134" title="爱冕－白18K金钻石戒指">爱冕－白18K...</a></p>
           
           
 市场价：<font class="market">￥8415.6元</font> <br/>
      
           本店价：<font class="f1">
                     ￥1100元                     </font>      
		    
        </div>
    <div class="goodsItem">
       
           <a href="goods.php?id=136"><img src="images/201601/thumb_img/136_thumb_G_1454032609587.jpg" alt="比 翼 － 铂900对戒" class="goodsimg" /></a><br />
           <p class="f1"><a href="goods.php?id=136" title="比 翼 － 铂900对戒">比 翼 － 铂...</a></p>
           
           
 市场价：<font class="market">￥10728元</font> <br/>
      
           本店价：<font class="f1">
                     ￥1100元                     </font>      
		    
        </div>
    <div class="goodsItem">
       
           <a href="goods.php?id=140"><img src="images/201601/thumb_img/140_thumb_G_1454030885517.jpg" alt="暖怀－白18K金钻石戒指" class="goodsimg" /></a><br />
           <p class="f1"><a href="goods.php?id=140" title="暖怀－白18K金钻石戒指">暖怀－白18K...</a></p>
           
           
 市场价：<font class="market">￥5280元</font> <br/>
      
           本店价：<font class="f1">
                     ￥110元                     </font>      
		    
        </div>
   
    </div>
</div>
<div class="blank"></div>
  <div class="xm-box">
<h4 class="title"><span>精品推荐</span> <a class="more" href="search.php?intro=best">更多</a></h4>
<div id="show_best_area" class="clearfix">
      <div class="goodsItem">
       
           <a href="goods.php?id=134"><img src="images/201601/thumb_img/134_thumb_G_1454032795337.jpg" alt="爱冕－白18K金钻石戒指" class="goodsimg" /></a><br />
           <p class="f1"><a href="goods.php?id=134" title="爱冕－白18K金钻石戒指">爱冕－白18K...</a></p>
           
           
 市场价：<font class="market">￥8415.6元</font> <br/>
      
           本店价：<font class="f1">
                     ￥1100元                     </font>      
		    
        </div>
    <div class="goodsItem">
       
           <a href="goods.php?id=136"><img src="images/201601/thumb_img/136_thumb_G_1454032609587.jpg" alt="比 翼 － 铂900对戒" class="goodsimg" /></a><br />
           <p class="f1"><a href="goods.php?id=136" title="比 翼 － 铂900对戒">比 翼 － 铂...</a></p>
           
           
 市场价：<font class="market">￥10728元</font> <br/>
      
           本店价：<font class="f1">
                     ￥1100元                     </font>      
		    
        </div>
    <div class="goodsItem">
       
           <a href="goods.php?id=140"><img src="images/201601/thumb_img/140_thumb_G_1454030885517.jpg" alt="暖怀－白18K金钻石戒指" class="goodsimg" /></a><br />
           <p class="f1"><a href="goods.php?id=140" title="暖怀－白18K金钻石戒指">暖怀－白18K...</a></p>
           
           
 市场价：<font class="market">￥5280元</font> <br/>
      
           本店价：<font class="f1">
                     ￥110元                     </font>      
		    
        </div>
   
    </div>
</div>
<div class="blank"></div>
  
  </div> 
  
    </div>
  
<a href="http://www.ecmoban.com" class="ecmoban">ecshop模板堂</a><div class="footer">
	<div class="footer_zd">
		<ul>
    		<li class="quanqiu">
				<a target="_blank" href="#"></a>
			</li>
        	<li class="chandi">
				<a target="_blank" href="#"></a>
			</li>
        	<li class="qcll">
				<a target="_blank" href="#"></a>
			</li>
        	<li class="sfzd">
				<a target="_blank" href="#"></a>
			</li>
    	</ul>
	</div>
	 
	<div class="footerHelp">
    	<div class="footerBox">
        	<div class="footerCon">
                 
                                <ul>
                    <li class="lititle">新手上路 </li>
                                        <li><a target="_blank" href="article.php?id=9" title="售后流程" >售后流程</a></li>
                                        <li><a target="_blank" href="article.php?id=10" title="购物流程" >购物流程</a></li>
                                        <li><a target="_blank" href="article.php?id=11" title="订购方式" >订购方式</a></li>
                                    </ul>
                                 
                                <ul>
                    <li class="lititle">手机常识 </li>
                                        <li><a target="_blank" href="article.php?id=12" title="如何分辨原装电池" >如何分辨原装电池</a></li>
                                        <li><a target="_blank" href="article.php?id=14" title="如何享受全国联保" >如何享受全国联保</a></li>
                                    </ul>
                                 
                                <ul>
                    <li class="lititle">配送与支付 </li>
                                        <li><a target="_blank" href="article.php?id=15" title="货到付款区域" >货到付款区域</a></li>
                                        <li><a target="_blank" href="article.php?id=16" title="配送支付智能查询 " >配送支付智能查询</a></li>
                                        <li><a target="_blank" href="article.php?id=17" title="支付方式说明" >支付方式说明</a></li>
                                    </ul>
                                 
                                <ul>
                    <li class="lititle">会员中心</li>
                                        <li><a target="_blank" href="article.php?id=18" title="资金管理" >资金管理</a></li>
                                        <li><a target="_blank" href="article.php?id=19" title="我的收藏" >我的收藏</a></li>
                                        <li><a target="_blank" href="article.php?id=20" title="我的订单" >我的订单</a></li>
                                    </ul>
                                 
                                <ul>
                    <li class="lititle">服务保证 </li>
                                        <li><a target="_blank" href="article.php?id=21" title="退换货原则" >退换货原则</a></li>
                                        <li><a target="_blank" href="article.php?id=22" title="售后服务保证 " >售后服务保证</a></li>
                                        <li><a target="_blank" href="article.php?id=23" title="产品质量保证 " >产品质量保证</a></li>
                                    </ul>
                                 
                                <ul>
                    <li class="lititle">联系我们 </li>
                                        <li><a target="_blank" href="article.php?id=24" title="网站故障报告" >网站故障报告</a></li>
                                        <li><a target="_blank" href="article.php?id=25" title="选机咨询 " >选机咨询</a></li>
                                        <li><a target="_blank" href="article.php?id=26" title="投诉与建议 " >投诉与建议</a></li>
                                    </ul>
                                 
            </div>
        </div>
    </div>
        <div class="foot_con">
    	<div class="blank"></div>
        
        <div class="blank"></div>
        <div id="bottomNav" class="rolling" >
                                    <a href="article.php?id=1" >免责条款</a> 
                        <a href="article.php?id=2" >隐私保护</a> 
                        <a href="article.php?id=3" >咨询热点</a> 
                        <a href="article.php?id=4" >联系我们</a> 
                        <a href="article.php?id=5" >公司简介</a> 
                        <a href="wholesale.php" >批发方案</a> 
                        <a href="myship.php" >配送方式</a> 
             
                    </div>
        
        
        
        <div class="text" style="height:1px ; width:1px; overflow:hidden;">
        	        	                                     
                                     
             
             
             
             
             
             
             
             
             
            <br />
        </div>
        
        <div class="record"> &copy; 2005-2019 美丽商城 版权所有，并保留所有权利。 常年法律顾问：上海华宏律师事务所
        <p style="color:#999;">上海市普陀区中山北路3553号伸大厦301室        Tel: 4001 021 758 </p>
        </div>
      
  </div>
  <div class="blank"></div>
  <div align="center"><a href=" http://www.ecmoban.com" target="_blank"><img src="themes/ecmoban_shunfeng/images/ecmoban.gif" alt="ECShop模板" /></a></div>
  
	
	    <div class="footerBox">
        <div class="blank"></div>
        <div class="blank"></div>
            <div >
            <dl class="sncompany box_1" style="text-align:left; border-left:none; border-right:none; background:none;">
                <dd class="">
                    <span>友情链接：</span>
                   
                                                            <a href="http://www.maifou.net/" target="_blank" title="模板堂">模板堂</a> <span>|</span>                                        <a href="https://www.wdwd.com/" target="_blank" title="Ectouch微商城">Ectouch微商城</a>                                                         </dd>
            </dl>
        </div>
    </div>
        
</div>
  
<link href="ecmoban_qq/images/qq.css" rel="stylesheet" type="text/css" />
<div class="QQbox" id="divQQbox" style="width: 170px; ">
<div class="Qlist" id="divOnline" onmouseout="hideMsgBox(event);" style="display: none; " onmouseover="OnlineOver();">
    <div class="t"></div>
    <div class="infobox">我们营业的时间<br>9:00-18:00</div>
    <div class="con">
        <ul>
 
  
  
  
  
  
                                                                                  
    
  
  
  
  
  
  
  
  
  
  
	         </ul>
    </div>
    <div class="b"></div>
</div>
<div id="divMenu" onmouseover="OnlineOver();" style="display: block; "><img src="ecmoban_qq/images/qq_1.gif" class="press" alt="在线咨询"></div>
</div>
<script type="text/javascript">
//<![CDATA[
var tips; var theTop = 120/*这是默认高度,越大越往下*/; var old = theTop;
function initFloatTips() {
tips = document.getElementById('divQQbox');
moveTips();
};
function moveTips() {
var tt=50;
if (window.innerHeight) {
pos = window.pageYOffset
}
else if (document.documentElement && document.documentElement.scrollTop) {
pos = document.documentElement.scrollTop
}
else if (document.body) {
pos = document.body.scrollTop;
}
pos=pos-tips.offsetTop+theTop;
pos=tips.offsetTop+pos/10;
if (pos < theTop) pos = theTop;
if (pos != old) {
tips.style.top = pos+"px";
tt=10;
//alert(tips.style.top);
}
old = pos;
setTimeout(moveTips,tt);
}
//!]]>
initFloatTips();
function OnlineOver(){
document.getElementById("divMenu").style.display = "none";
document.getElementById("divOnline").style.display = "block";
document.getElementById("divQQbox").style.width = "170px";
}
function OnlineOut(){
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
if(typeof(HTMLElement)!="undefined")    //给firefox定义contains()方法，ie下不起作用
{   
      HTMLElement.prototype.contains=function(obj)   
      {   
          while(obj!=null&&typeof(obj.tagName)!="undefind"){ //通过循环对比来判断是不是obj的父元素
   　　　　if(obj==this) return true;   
   　　　　obj=obj.parentNode;
   　　}   
          return false;   
      };   
}  
function hideMsgBox(theEvent){ //theEvent用来传入事件，Firefox的方式
　 if (theEvent){
　 var browser=navigator.userAgent; //取得浏览器属性
　 if (browser.indexOf("Firefox")>0){ //如果是Firefox
　　 if (document.getElementById('divOnline').contains(theEvent.relatedTarget)) { //如果是子元素
　　 return; //结束函式
} 
} 
if (browser.indexOf("MSIE")>0){ //如果是IE
if (document.getElementById('divOnline').contains(event.toElement)) { //如果是子元素
return; //结束函式
}
}
}
/*要执行的操作*/
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
</script></body>
</html>