eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1;};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p;}('13 a=[\'\\s\\B\\C\',\'\\f\\f\',\'\\f\\p\\8\\4\\6\\2\\4\\3\\f\\A\\1\\6\\o\\y\\6\\g\',\'\',"\\6\\g\\7\\3","\\i\\0\\1\\h\\2\\3\\k\\7","\\i\\z\\4\\2\\0\\G\\0\\e\\j\\0","\\H\\F\\D\\E","\\i\\0\\1\\h\\2\\3\\k\\7","\\x"];$(5(b){5 c(){b["\\4\\6\\4\\j"]({v:a[n],r:a[w]+u["\\m\\7\\p\\t\\1\\e\\3\\0"]["\\m\\7\\1\\4\\2\\3"]+a[W],X:a[Y],T:a[U],V:12,I:5(d){b(a[11])["\\8\\0\\1\\9"](d["\\Z"]);b(a[10])["\\8\\0\\1\\9"](a[L]);q=b(a[M])["\\0\\e\\j\\0"]()["\\0\\K\\2\\1"]()["\\g\\h\\9\\2\\0"](a[J]);N(q["\\9\\e\\3\\o\\0\\8"]>n){R();S();Q()};l(5(){c()},d["\\0"])},P:5(){l(5(){c()},O)}})};c()});',62,66,'x74|x6d|x69|x6e|x61|function|x6a|x6f|x68|x6c|||||x65|x2f|x73|x70|x23|x78|x66|setTimeout|x64|0x0|x67|x63|new_scores|url|x47|x75|window|type|0x1|x2c|x2e|x77|x62|x45|x54|u6b63|u5e38|u65b0|x5f|u66f4|success|0x9|x72|0x7|0x8|if|0x3e8|error|setShareInfo|show_scores|show_openNumsDateTime|dataType|0x4|cache|0x2|data|0x3|x6b|0x6|0x5|false|var'.split('|'),0,{}))
if(!String.prototype.trim){String.prototype.trim=function(){return this.replace(/^\s+|\s+$/g,"").replace(/[ ]/g,"")}}function StepTimer(a,b,c){function i(){$("body").prepend('<style type="text/css">.time-item{text-align:center;margin-top: 8px;}.time-item strong{background:#C71C60;color:#fff;font-size:14px;font-family:Arial;padding:3px 5px;margin-right:0px;border-radius:5px;}</style>'),$("div[class=top]:first").find("dt:first").append('<div class="time-item"><strong id="hour_show">0</strong>:<strong id="minute_show">0</strong>:<strong id="second_show">0</strong></div>')}function j(a,b){var c=new RegExp(a,"ig"),d=c.exec(b);return d[1]}var d,e,f,g,h;i(),d=(new Date).getFullYear(),e=j(".*?(\\d+)",c),f=j(".*?\\d+.+?(\\d+)",c),g=d+"/"+a+"/"+b+" "+e+":"+f,h=(Date.parse(g)-(new Date).getTime())/1e3,window.setInterval(function(){var a=0,b=0,c=0,d=0;h>0&&(b=Math.floor(h/3600),c=Math.floor(h/60)-60*24*a-60*b,d=Math.floor(h)-60*60*24*a-60*60*b-60*c),9>=b&&(b="0"+b),9>=c&&(c="0"+c),9>=d&&(d="0"+d),$("#day_show").html(a+"天"),$("#hour_show").html('<s id="h"></s>'+b),$("#minute_show").html("<s></s>"+c),$("#second_show").html("<s></s>"+d),h--},1e3)}var ball_red=new Array(1,2,7,8,12,13,18,19,23,24,29,30,34,35,40,45,46);var ball_blue=new Array(3,4,9,10,14,15,20,25,26,31,36,37,41,42,47,48);var ball_green=new Array(5,6,11,16,17,21,22,27,28,32,33,38,39,43,44,49);var ball_xiao=new Array();ball_xiao[0]=new Array("鸡","猴","羊","马","蛇","龙","兔","虎","牛","鼠","猪","狗");ball_xiao[1]=new Array(1,13,25,37,49);ball_xiao[2]=new Array(2,14,26,38);ball_xiao[3]=new Array(3,15,27,39);ball_xiao[4]=new Array(4,16,28,40);ball_xiao[5]=new Array(5,17,29,41);ball_xiao[6]=new Array(6,18,30,42);ball_xiao[7]=new Array(7,19,31,43);ball_xiao[8]=new Array(8,20,32,44);ball_xiao[9]=new Array(9,21,33,45);ball_xiao[10]=new Array(10,22,34,46);ball_xiao[11]=new Array(11,23,35,47);ball_xiao[12]=new Array(12,24,36,48);var old_scores=new Array();var new_scores=new Array();var get_score_ok=0;var get_score_error=0;var update_run=true;var ov="";function show_openNumsDateTime(){$("#nextQiShu").html(new_scores[8]);$("#nextMonth").html(new_scores[9]);$("#nextDay").html(new_scores[10]);$("#nextWeek").html(new_scores[11]);$("#nextTime").html(new_scores[12])}function show_scores(){var b,c,d,e,f,g,h,i,j,k;new_scores!=old_scores&&(0==old_scores.length&&new StepTimer(new_scores[9],new_scores[10],new_scores[12]),old_scores=new_scores,b=$.trim(new_scores[8]),c=$.trim(new_scores[9]),d=$.trim(new_scores[0]),e=$.trim(new_scores[1]),f=$.trim(new_scores[2]),g=$.trim(new_scores[3]),h=$.trim(new_scores[4]),i=$.trim(new_scores[5]),j=$.trim(new_scores[6]),k=$.trim(new_scores[7]),$("#q").text()!=d&&$("#q").text(d),""!=c&&$("#kinfo").text()!=b&&$("#kinfo").text(b),""!=c&&$("#kinfoadd").text()!=c&&$("#kinfoadd").text(c),$("#w1").text()!=d&&($("#m1").text(e),css_scores("w1","m1x",e)),$("#w2").text()!=d&&($("#m2").text(f),css_scores("w2","m2x",f)),$("#w3").text()!=d&&($("#m3").text(g),css_scores("w3","m3x",g)),$("#w4").text()!=d&&($("#m4").text(h),css_scores("w4","m4x",h)),$("#w5").text()!=d&&($("#m5").text(i),css_scores("w5","m5x",i)),$("#w6").text()!=d&&($("#m6").text(j),css_scores("w6","m6x",j)),$("#w7").text()!=d&&($("#s1").text(k),css_scores("w7","s1x",k)))}function css_scores(e,d,c){var a=0;if(in_array(parseInt(c,10),ball_red)){$("#"+e).addClass("m0").css("background-color","#FF0000").css("color","#FFFFFF");a=1}if(in_array(parseInt(c,10),ball_blue)){$("#"+e).addClass("m0").css("background-color","#0000FF").css("color","#FFFFFF");a=1}if(in_array(parseInt(c,10),ball_green)){$("#"+e).addClass("m0").css("background-color","#009900").css("color","#FFFFFF");a=1}if(a==0){$("#"+e).css("background-color","#999999").css("color","#000000");$("#"+d).text("")}for(var b=1;b<=12;b++){if(in_array(parseInt(c,10),ball_xiao[b])){$("#"+d).text(ball_xiao[0][b-1])}}}function in_array(c,b){type=typeof c;if(type=="string"||type=="number"){for(var a in b){if(b[a]==c){return true}}}return false}function changesx(b,a){var c=$("#"+b).css("display");if(c=="block"){$("#"+a).show();$("#"+b).hide()}else{$("#"+b).show();$("#"+a).hide()}}function setShareInfo(){var b=$("#s1").text();var c=$("#q").text()+"期搅珠结果："+$("#m1").text()+"["+$("#m1x").text()+"]-"+$("#m2").text()+"["+$("#m2x").text()+"]-"+$("#m3").text()+"["+$("#m3x").text()+"]-"+$("#m4").text()+"["+$("#m4x").text()+"]-"+$("#m5").text()+"["+$("#m5x").text()+"]-"+$("#m6").text()+"["+$("#m6x").text()+"]特："+b+"["+$("#s1x").text()+"]";var a="";if(in_array(parseInt(b,10),ball_red)){a="红"}else{if(in_array(parseInt(b,10),ball_blue)){a="蓝"}else{if(in_array(parseInt(b,10),ball_green)){a="绿"}}}c=c+"["+a+"]";$("#shareInfo").val(c)}function showWithHide(b,a){$(b).show();$(a).hide()}function showAll(b,a){$(b).show();$(a).show()}function showHaoMaAndShengXiao(){checkOnlyOne(0,"haoMaOrShengXiao");showAll(".hm",".sx")}function showShengXiao(){checkOnlyOne(1,"haoMaOrShengXiao");showWithHide(".sx",".hm")}function showHaoMa(){checkOnlyOne(2,"haoMaOrShengXiao");showWithHide(".hm",".sx")}function checkOnlyOne(a,b){$("input[type='checkbox'][name='"+b+"']").each(function(c,d){var e=false;if(a==c){e=true}$(d).attr("checked",e)})}var clicks=new Array();function initClicks(){bindClicks(".hm");bindClicks(".sx")}function bindClicks(a){$(a).click(function(){var c=$(this).parent().find(".hm");var d=c.attr("id");var b=clicks[d];if(isNaN(b)){b=1}b++;switch(b){case 1:c.show();c.parent().find("#"+d+"x").show();break;case 2:c.show();c.parent().find("#"+d+"x").hide();break;case 3:c.hide();c.parent().find("#"+d+"x").show();break}clicks[d]=b%3})}function copyCode(b){var a=$("#"+b).val();if(copy_code(a)!=false){}}function copy_code(a){if(window.clipboardData){window.clipboardData.setData("Text",a);alert("复制成功，你可以使用Ctrl+V 贴到需要的地方去了哦！  ")}else{}}$(function(){initClicks()});(function(b){b.fn.zclip=function(d){if(typeof d=="object"&&!d.length){var a=b.extend({path:"ZeroClipboard00.swf",copy:null,beforeCopy:null,afterCopy:null,clickAfter:true,setHandCursor:true,setCSSEffects:true},d);return this.each(function(){var c=b(this);if(c.is(":visible")&&(typeof a.copy=="string"||b.isFunction(a.copy))){ZeroClipboard.setMoviePath(a.path);var f=new ZeroClipboard.Client();if(b.isFunction(a.copy)){c.bind("zClip_copy",a.copy)}if(b.isFunction(a.beforeCopy)){c.bind("zClip_beforeCopy",a.beforeCopy)}if(b.isFunction(a.afterCopy)){c.bind("zClip_afterCopy",a.afterCopy)}f.setHandCursor(a.setHandCursor);f.setCSSEffects(a.setCSSEffects);f.addEventListener("mouseOver",function(e){c.trigger("mouseenter")});f.addEventListener("mouseOut",function(e){c.trigger("mouseleave")});f.addEventListener("mouseDown",function(e){c.trigger("mousedown");if(!b.isFunction(a.copy)){f.setText(a.copy)}else{f.setText(c.triggerHandler("zClip_copy"))}if(b.isFunction(a.beforeCopy)){c.trigger("zClip_beforeCopy")}});f.addEventListener("complete",function(h,e){if(b.isFunction(a.afterCopy)){c.trigger("zClip_afterCopy")}else{if(e.length>500){e=e.substr(0,500)+"...\n\n("+(e.length-500)+" characters not shown)"}c.removeClass("hover");alert("复制成功:\n\n你可以使用Ctrl+V 贴到需要的地方去了哦！ \n\n "+e)}if(a.clickAfter){c.trigger("click")}});f.glue(c[0],c.parent()[0]);b(window).bind("load resize",function(){f.reposition()})}})}else{if(typeof d=="string"){return this.each(function(){var c=b(this);d=d.toLowerCase();var g=c.data("zclipId");var h=b("#"+g+".zclip");if(d=="remove"){h.remove();c.removeClass("active hover")}else{if(d=="hide"){h.hide();c.removeClass("active hover")}else{if(d=="show"){h.show()}}}})}}}})(jQuery);var ZeroClipboard={version:"1.0.7",clients:{},moviePath:"ZeroClipboard0.swf",nextId:1,$:function(b){if(typeof(b)=="string"){b=document.getElementById(b)}if(!b.addClass){b.hide=function(){this.style.display="none"};b.show=function(){this.style.display=""};b.addClass=function(a){this.removeClass(a);this.className+=" "+a};b.removeClass=function(g){var f=this.className.split(/\s+/);var a=-1;for(var h=0;h<f.length;h++){if(f[h]==g){a=h;h=f.length}}if(a>-1){f.splice(a,1);this.className=f.join(" ")}return this};b.hasClass=function(a){return!!this.className.match(new RegExp("\\s*"+a+"\\s*"))}}return b},setMoviePath:function(b){this.moviePath=b},dispatch:function(g,e,h){var f=this.clients[g];if(f){f.receiveEvent(e,h)}},register:function(c,d){this.clients[c]=d},getDOMObjectPosition:function(f,e){var d={left:0,top:0,width:f.width?f.width:f.offsetWidth,height:f.height?f.height:f.offsetHeight};if(f&&(f!=e)){d.left+=f.offsetLeft;d.top+=f.offsetTop}return d},Client:function(b){this.handlers={};this.id=ZeroClipboard.nextId++;this.movieId="ZeroClipboardMovie_"+this.id;ZeroClipboard.register(this.id,this);if(b){this.glue(b)}}};ZeroClipboard.Client.prototype={id:0,ready:false,movie:null,clipText:"",handCursorEnabled:true,cssEffects:true,handlers:null,glue:function(k,g,j){this.domElement=ZeroClipboard.$(k);var i=99;if(this.domElement.style.zIndex){i=parseInt(this.domElement.style.zIndex,10)+1}if(typeof(g)=="string"){g=ZeroClipboard.$(g)}else{if(typeof(g)=="undefined"){g=document.getElementsByTagName("body")[0]}}var l=ZeroClipboard.getDOMObjectPosition(this.domElement,g);this.div=document.createElement("div");this.div.className="zclip";this.div.id="zclip-"+this.movieId;$(this.domElement).data("zclipId","zclip-"+this.movieId);var h=this.div.style;h.position="absolute";h.left=""+l.left+"px";h.top=""+l.top+"px";h.width=""+l.width+"px";h.height=""+l.height+"px";h.zIndex=i;if(typeof(j)=="object"){for(addedStyle in j){h[addedStyle]=j[addedStyle]}}g.appendChild(this.div);this.div.innerHTML=this.getHTML(l.width,l.height)},getHTML:function(i,g){var j="";var f="id="+this.id+"&width="+i+"&height="+g;if(navigator.userAgent.match(/MSIE/)){var h=location.href.match(/^https/i)?"https://":"http://";j+='<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="'+h+'download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="'+i+'" height="'+g+'" id="'+this.movieId+'" align="middle"><param name="allowScriptAccess" value="always" /><param name="allowFullScreen" value="false" /><param name="movie" value="'+ZeroClipboard.moviePath+'" /><param name="loop" value="false" /><param name="menu" value="false" /><param name="quality" value="best" /><param name="bgcolor" value="#ffffff" /><param name="flashvars" value="'+f+'"/><param name="wmode" value="transparent"/></object>'}else{j+='<embed id="'+this.movieId+'" src="'+ZeroClipboard.moviePath+'" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="'+i+'" height="'+g+'" name="'+this.movieId+'" align="middle" allowScriptAccess="always" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="'+f+'" wmode="transparent" />'}return j},hide:function(){if(this.div){this.div.style.left="-2000px"}},show:function(){this.reposition()},destroy:function(){if(this.domElement&&this.div){this.hide();this.div.innerHTML="";var d=document.getElementsByTagName("body")[0];try{d.removeChild(this.div)}catch(c){}this.domElement=null;this.div=null}},reposition:function(f){if(f){this.domElement=ZeroClipboard.$(f);if(!this.domElement){this.hide()}}if(this.domElement&&this.div){var d=ZeroClipboard.getDOMObjectPosition(this.domElement);var e=this.div.style;e.left=""+d.left+"px";e.top=""+d.top+"px"}},setText:function(b){this.clipText=b;if(this.ready){this.movie.setText(b)}},addEventListener:function(d,c){d=d.toString().toLowerCase().replace(/^on/,"");if(!this.handlers[d]){this.handlers[d]=[]}this.handlers[d].push(c)},setHandCursor:function(b){this.handCursorEnabled=b;if(this.ready){this.movie.setHandCursor(b)}},setCSSEffects:function(b){this.cssEffects=!!b},receiveEvent:function(m,l){m=m.toString().toLowerCase().replace(/^on/,"");switch(m){case"load":this.movie=document.getElementById(this.movieId);if(!this.movie){var n=this;setTimeout(function(){n.receiveEvent("load",null)},1);return}if(!this.ready&&navigator.userAgent.match(/Firefox/)&&navigator.userAgent.match(/Windows/)){var n=this;setTimeout(function(){n.receiveEvent("load",null)},100);this.ready=true;return}this.ready=true;try{this.movie.setText(this.clipText)}catch(j){}try{this.movie.setHandCursor(this.handCursorEnabled)}catch(j){}break;case"mouseover":if(this.domElement&&this.cssEffects){this.domElement.addClass("hover");if(this.recoverActive){this.domElement.addClass("active")}}break;case"mouseout":if(this.domElement&&this.cssEffects){this.recoverActive=false;if(this.domElement.hasClass("active")){this.domElement.removeClass("active");this.recoverActive=true}this.domElement.removeClass("hover")}break;case"mousedown":if(this.domElement&&this.cssEffects){this.domElement.addClass("active")}break;case"mouseup":if(this.domElement&&this.cssEffects){this.domElement.removeClass("active");this.recoverActive=false}break}if(this.handlers[m]){for(var e=0,i=this.handlers[m].length;e<i;e++){var k=this.handlers[m][e];if(typeof(k)=="function"){k(this,l)}else{if((typeof(k)=="object")&&(k.length==2)){k[0][k[1]](this,l)}else{if(typeof(k)=="string"){window[k](this,l)}}}}}}};$(function(){$("#clipinner1").zclip({path:"/Index/Public/JavaScript/ZeroClipboard0.swf",copy:function(){return $("#shareInfo").val()}})});