<?php if (!defined('THINK_PATH')) exit();?><HTML>
<HEAD>
<meta charset="utf-8" />
<title>高手贴</title>
</HEAD>
<link href="/Public/tu/ak7_cc.css" rel="stylesheet" type="text/css" />

<body style="background: none;">

<div id="wmbbslist">
	<table border="0" width="100%" cellspacing="0" cellpadding="0">
		<tr>
			<td height="44">
			<table border="0" width="100%" cellspacing="0" cellpadding="0">
				<tr>
					<td height="65" background="/Public/tu/1231.png">
					<table border="0" width="100%" cellspacing="0" cellpadding="0">
						<tr>
							<td height="65" width="178">　</td>
							<td height="65">
							
							<b>
							<font color="#1C65B9" face="楷体" style="font-size: 14pt">
							<?=Cz_cig('site_name')?><span lang="en-us">:</span></font><font face="楷体" style="font-size: 14pt" color="#FF0000"><?=Cz_cig('site_url')?></font><font face="楷体" style="font-size: 14pt" color="#1C65B9">  
							手机网站<span lang="en-us">:</span></font><span lang="en-us"><font face="楷体" style="font-size: 14pt" color="#FF0000"><?=Cz_cig('site_wap')?></font><font color="#1C65B9" face="楷体" style="font-size: 14pt"> 
							请互相转告！</font>
							</b>
							</td>
						</tr>
					</table>
					</td>
				</tr>
			</table>
			</td>
		</tr>
	</table>
	<table class="gsb" width="100%" border="0" cellspacing="0" cellpadding="0">
		<colgroup>
			<col width="60" /><col width="30" /><col width /><col width="100" />
		</colgroup>
<?php if(is_array($list1)): foreach($list1 as $key=>$vo): if(is_array($vo['voo1'])): $i = 0; $__LIST__ = $vo['voo1'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub1): $mod = ($i % 2 );++$i; if(is_array($list)): foreach($list as $key=>$vo): if(is_array($vo['voo'])): $i = 0; $__LIST__ = $vo['voo'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><tr>
			<td bgcolor="#FFFFFF">
			<font face="宋体">
			<span style="background-color: #FFFFFF">
			<img src="/Public/tu/gsb.gif" width="48" height="17" /></span></font></td>
			<td bgcolor="#FFFFFF"><font face="宋体">
			<span style="background-color: #FFFFFF">
			<img src="/Public/tu/jing.gif" width="15" height="15" /></span></font></td>
			<td bgcolor="#FFFFFF">
			<span style="font-size: 11pt">
			<a target="_blank" href="/Bbs/<?php echo ($sub1["id"]); ?>.html"><?php echo ($sub1["title"]); ?></a></span><font face="宋体"><span style="background-color: #FFFFFF"><img border="0" src="/Public/tu/t9.gif" width="28" height="11" align="texttop"></span></font></td>
			<td bgcolor="#FFFFFF"><font face="宋体"><span style="background-color: #FFFFFF">
			<font color="#0000FF">作者</font>：<font color="#FF0000"><?php echo ($sub1["zuozhe"]); ?></font></span></td>
		</tr><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; ?>
	</table>
</div>
	</body>

</html>