<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="一起发开奖现场">
<meta name="format-detection" content="telephone=no,address=no,email=no">
<meta name="wap-font-scale" content="no">
<meta name="aplus-touch" content="1">
<meta name="msapplication-tap-highlight" content="no">
<TITLE><?php echo ($data["title"]); ?>_<?=Cz_cig('site_name')?></TITLE>
<meta name="keywords" content="<?php echo ($data["title"]); ?>,手机报码,手机报码网,手机开奖网址" />
<meta name="description" content="<?php echo ($data["title"]); ?>_第一时间更新开奖结果,不用电脑上网也可以用手机查看最新开奖结果" />
<link href="<?php echo (CSS_URL); ?>m.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="spinnerbox" style="display: none;">
	<div class="spinner">
		<div class="bounce1">
		</div>
		<div class="bounce2">
		</div>
		<div class="bounce3">
		</div>
	</div>
</div>
<header>
<div class="go6h_header">
	<div class="go6h_header_ul" style="width:auto;">
		<a href="/m_index.html" >
		<div class="go6h_header_li go6h_header_logo">
			<span></span>
			<i></i>
		</div>
		</a>
	</div>
	<div class="go6h_header_right">
		<a class="link go6h_header_rightUserIcon" href="/sx" >生肖对照表</a>
	</div>
	<div class="clear">
	</div>
</div>
</header>
<script src="/Index/Public/wap/src/jquery.min.js" type="text/javascript"></script>
<style>
@media screen and (min-width: 720px) {
		.go6h_header,.top_bar{
			width: 720px;
			left:50%;
			margin-left: -360px;
		}

		body {
		max-width: 720px;
		margin-left: auto !important;
		margin-right: auto !important;
	}

}
</style>

<div id="top1"></div>
<div class="nav-dh">
    <a href="/m_index.html">首页</a><a href="/news">资料大全</a><a href="/lists/m_<?php echo ($data["id"]); ?>.html"><?php echo ($data["title"]); ?></a>
</div>
			<!--广告开始-->
			<?php if(is_array($plug_ad_22)): foreach($plug_ad_22 as $key=>$v): if($v[plug_ad_checkid]==1): ?><a target="_blank" href="<?php echo ($v["plug_ad_url"]); ?>"><font color="#0066FF"><img src="/Public/<?php echo ($v["plug_ad_pic"]); ?>" width="100%" title="<?php echo ($v["plug_ad_name"]); ?>" /></font></a><br>	
			<?php elseif($v[plug_ad_checkid]==2): ?>
			<?php echo (stripslashes(htmlspecialchars_decode($v["plug_ad_js"]))); endif; endforeach; endif; ?>
			<!--广告结束-->	
<div class="fl-list">
<div width="100%" border="0" id="www_ak7_cc">
<?php if(is_array($list)): foreach($list as $key=>$vo): if(is_array($vo['voo'])): $i = 0; $__LIST__ = $vo['voo'];if( count($__LIST__)==0 ) : echo "暂时没有文章" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><ul>
<?php if($data[id]==2): ?><li><a href="/quannian/m_<?php echo ($sub["id"]); ?>.html"><?php echo (mb_substr($sub["title"],0,200,'utf-8')); ?></a></li>
<?php else: ?>
<li><a href="/news/<?php echo ($sub["id"]); ?>.html"><?php echo (mb_substr($sub["title"],0,200,'utf-8')); ?></a></li><?php endif; ?>

</ul><?php endforeach; endif; else: echo "暂时没有文章" ;endif; endforeach; endif; ?>
</div>
</div>



<div id="changpage"></div>
<script language="javascript">
var obj,j;
var page=0;
var nowPage=0;//当前页
var listNum=15;//每页显示<ul>数
var PagesLen;//总页数
var PageNum=5;//分页链接接数(5个)
onload=function(){
obj=document.getElementById("www_ak7_cc").getElementsByTagName("ul");
j=obj.length
PagesLen=Math.ceil(j/listNum);
upPage(0)
}
function upPage(p){
nowPage=p
//内容变换
for (var i=0;i<j;i++){
obj[i].style.display="none"
}
for (var i=p*listNum;i<(p+1)*listNum;i++){
if(obj[i])obj[i].style.display="block"
}//www.ak7.cc
//分页链接变换
strS='<a href="###" onclick="upPage(0)">首页</a>  '
var PageNum_2=PageNum%2==0?Math.ceil(PageNum/2)+1:Math.ceil(PageNum/2)
var PageNum_3=PageNum%2==0?Math.ceil(PageNum/2):Math.ceil(PageNum/2)+1
var strC="",startPage,endPage;
if (PageNum>=PagesLen) {startPage=0;endPage=PagesLen-1}
else if (nowPage<PageNum_2){startPage=0;endPage=PagesLen-1>PageNum?PageNum:PagesLen-1}//首页
else {startPage=nowPage+PageNum_3>=PagesLen?PagesLen-PageNum-1: nowPage-PageNum_2+1;var t=startPage+PageNum;endPage=t>PagesLen?PagesLen-1:t}
for (var i=startPage;i<=endPage;i++){
 if (i==nowPage)strC+='<a href="#top" class="page-now" onclick="upPage('+i+')">'+(i+1)+'</a> '
 else strC+='<a href="#top1" onclick="upPage('+i+')">'+(i+1)+'</a> '
}
strE2=nowPage+1+"/"+PagesLen+"页"+"  共"+j+"条"
document.getElementById("changpage").innerHTML=strC
}
</script> 
<div class="blank"></div>
			<?php $config=M('config')->where(array('id'=>1))->find(); ?>


<footer>
 <p class="footer_copy">&copy; <?php echo ($config["site_name"]); ?> 版权所有</p>    
 <p class="footer_copy">香港特别行政区六合彩彩票发行管理中心唯一指定网络信息发布媒体</p>
        <p><?php echo (stripslashes(htmlspecialchars_decode($config["wap_tj"]))); ?></p>
</footer>

<div class="gotop backtop" style="display:none;"></div>
<script type="text/javascript">
//返回顶部
$(document).ready(function(){
	$(window).scroll(function () {
		var scrollHeight = $(document).height();
		var scrollTop = $(window).scrollTop();
		var $windowHeight = $(window).innerHeight();
		scrollTop > 75 ? $(".gotop").fadeIn(200).css("display","block") : $(".gotop").fadeOut(200).css({"background-image":"url(/Index/Public/wap/iconfont-fanhuidingbu_up.png)"});
	});
	$('.backtop').click(function (e) {
		$(".gotop").css({"background-image":"url(/Index/Public/wap/iconfont-fanhuidingbu.png)"});
		e.preventDefault();
		$('html,body').animate({ scrollTop:0});
	});
});
</script>

<div class="top_bar">
  <nav>
    <ul id="top_menu" class="top_menu">
    <li><a href="/m_index.html"><img src="/Index/Public/wap/plugmenu1.png"><label>首页</label></a></li>
	<li><a href="/kj"><img src="/Index/Public/wap/plugmenu2.png"><label>开奖</label></a></li>    
	<li class="home"><a href="/"></a></li>
	<li><a href="/caise"><img src="/Index/Public/wap/plugmenu3.png"><label>图库</label></a></li>
	<li><a href="/zst"><img src="/Index/Public/wap/plugmenu4.png"><label>图表</label></a></li>    
	</ul>
  </nav>
</div>
</body>
</html>