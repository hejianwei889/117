<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo ($id); ?>年开奖记录[手机版]</title>
<META name=viewport content="width=device-width; initial-scale=1.0; maximum-scale=1.0; minimum-scale=1.0; user-scalable=no;">
<META name=MobileOptimized content=480>
<meta name="keywords" content="手机报码,手机报码网,手机开奖网址,手机开奖结果,记录查询">
<meta name="description" content="第一时间更新开奖结果,不用电脑上网也可以用手机查看最新开奖结果,查询全年开奖记录">
</head>
<body>
<style>
BODY,h1 {
PADDING-BOTTOM: 0px; LIST-STYLE-TYPE: none; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; LIST-STYLE-IMAGE: none; PADDING-TOP: 0px
}
UL {
PADDING-BOTTOM: 0px; LIST-STYLE-TYPE: none; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; LIST-STYLE-IMAGE: none; PADDING-TOP: 0px
}
LI {
PADDING-BOTTOM: 0px; LIST-STYLE-TYPE: none; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; LIST-STYLE-IMAGE: none; PADDING-TOP: 0px
}
DL {
PADDING-BOTTOM: 0px; LIST-STYLE-TYPE: none; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; LIST-STYLE-IMAGE: none; PADDING-TOP: 0px
}
DT {
PADDING-BOTTOM: 0px; LIST-STYLE-TYPE: none; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; LIST-STYLE-IMAGE: none; PADDING-TOP: 0px
}
A {
color:#0000FF;TEXT-DECORATION: none
}
A:hover {
COLOR: #FF0000
}
h1 {
PADDING-BOTTOM: 0px; LINE-HEIGHT: 35px;  PADDING-LEFT: 3px; PADDING-RIGHT: 3px; BACKGROUND: #FE9F01; HEIGHT: 35px; COLOR: #fff; PADDING-TOP: 0px; font-size:16px; margin-top:0px
}
h1 span{float:right}
h1 span a{ color: #FFFF00}
.s{padding:5px 0; background:#FFFFCC; color:#999; font-size:14px}
.d{margin:2px 0; background: #fafafa}
dt{line-height:1.3em; padding-left:3px; color:#666; font-size:13px}
.jl td{text-align:center; font-family:Tahoma}
.p{border:1px solid #e3e3e3; width:100%}
.hm{font-family:Tahoma;}
.sx{background:#FFFFFF; color:#666666}
.redBoClass{
color:#FFF;
background-color:red;
}
.blueBoClass{
color:#FFF;
background-color:blue;
}
.greenBoClass{
color:#FFF;
background-color:green;
}
.di{padding:3px 0; line-height:1.5em; color:#999; font-family:"宋体"; background:#fbfbfb; border-top:1px solid #efefef; margin-top:5px}
.years{padding-left:10px}
.c{clear:both}
</style>
<link href="<?php echo (CSS_URL); ?>m.css" rel="stylesheet" type="text/css" />
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

<h1>
<span>
<a href="/wap.html">其它年份</a>
</span><?php echo ($id); ?>年开奖记录</h1>
<div class="s">
<input checked="checked" name="haoMaOrShengXiao" onClick="showHaoMaAndShengXiao();" type="checkbox">
<a href="javascript:void(0);" onClick="showHaoMaAndShengXiao();">完整版</a>
<input name="haoMaOrShengXiao" onClick="showShengXiao();" type="checkbox">
<a href="javascript:void(0);" onClick="showShengXiao();">只显生肖</a>
<input name="haoMaOrShengXiao" onClick="showHaoMa();" type="checkbox">
<a href="javascript:void(0);" onClick="showHaoMa();">只显号码</a>
</div>
<?php if(is_array($list)): foreach($list as $key=>$vo): ?><dl class="d">
<dt><?php echo ($vo['title']); ?>(开奖时间:<?=date("Y-m-d",$vo['begtime'])?>)</dt>
<table width="100%" border="0" class="jl">
<tr>
<td width="13%"><div class="p"><div class="hm <?=yx_no_band($vo['tit1'],5)?>"><?=$vo['tit1']?></div><div class="sx"><?=$vo['tit01']?></div></div></td>
<td width="13%"><div class="p"><div class="hm <?=yx_no_band($vo['tit2'],5)?>"><?=$vo['tit2']?></div><div class="sx"><?=$vo['tit02']?></div></div></td>
<td width="13%"><div class="p"><div class="hm <?=yx_no_band($vo['tit3'],5)?>"><?=$vo['tit3']?></div><div class="sx"><?=$vo['tit03']?></div></div></td>
<td width="13%"><div class="p"><div class="hm <?=yx_no_band($vo['tit4'],5)?>"><?=$vo['tit4']?></div><div class="sx"><?=$vo['tit04']?></div></div></td>
<td width="13%"><div class="p"><div class="hm <?=yx_no_band($vo['tit5'],5)?>"><?=$vo['tit5']?></div><div class="sx"><?=$vo['tit05']?></div></div></td>
<td width="13%"><div class="p"><div class="hm <?=yx_no_band($vo['tit6'],5)?>"><?=$vo['tit6']?></div><div class="sx"><?=$vo['tit06']?></div></div></td>
<td width="7%"><font color="#BBBBBB">特</font></td>
<td width="15%"><div class="p"><div class="hm <?=yx_no_band($vo['tit7'],5)?>"><?=$vo['tit7']?></div><div class="sx"><?=$vo['tit07']?></div></div></td>
</tr>
</table>
</dl><?php endforeach; endif; ?>

<div>

<a></a>
<a></a>
<span class="years">[<?php echo ($id); ?>]</span>

</div>
<h1>
<span>
[<?php echo ($id); ?>][<a href="/history.html?id=<?php echo ($id-1); ?>"><?php echo ($id-1); ?></a>
</span><a href="javascript:void(0);" onclick="loadmorePageSize(20);" id="loadmorePageSizeBtn">[加载20期]</a>
<a href="javascript:void(0);" onclick="loadmoreAll();" id="loadmoreAllBtn">[加载全年]</a></h1>
<div id="loadmore"></div>
<div></div>
<div class="s" style="margin-top:5px">
<span style="background-color: #FFFF00; color: #000"></span>
</div>
<script> 
var totalPage = parseInt("<?php echo ($total); ?>");
var _contextPath = "";
var _name = "<?php echo ($id); ?>";
</script>
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
<script src="/Index/Public/JavaScript/jquery.min.js"></script>
<script src="/Index/Public/JavaScript/wapList.js"></script>