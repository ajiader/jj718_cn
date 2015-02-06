<?php if (!defined('SHUIPF_VERSION')) exit(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link href="favicon.ico" rel="shortcut icon" />
<link rel="canonical" href="{$config_siteurl}" />
<title><if condition=" isset($SEO['title']) && !empty($SEO['title']) ">{$SEO['title']}</if>{$SEO['site_title']}</title>
<meta name="description" content="{$SEO['description']}" />
<meta name="keywords" content="{$SEO['keyword']}" />
<link type="text/css" rel="stylesheet" href="/statics/jj718/css/association.css" />
</head>

<body>
<div id="weixindv">
    <div id="weixinimg" style=" background:url(http://www.jj718.com/skin/wnew/jj718/images/jjcl_wximg.png) no-repeat; width:159px; height:150px; position:absolute; left:200px; top:-36px;"></div>
</div>
<!-- header<start>-->
<template file="Content/header.php"/>
<!-- header<end>-->

<div class="acc_center ass_pdtop">
	<div class="ass_content1 ass_mgbt">
    	<div class="ass_banner" id="slider">
        <position action="position" posid="1" thumb="1" num="5" order="listorder desc">
        <volist name="data" id="vo">
        	<a href="{$vo.data.url}" target="_blank"><img src="{:thumb($vo[data][thumb],944,363)}" alt="" title="{$vo.data.title}" /></a>
    	</volist>
		</position>	
        </div>
        <div class="ass_xhgg">
        	<div class="gg_cut" id="assgg"><a href="{:getCategory(26,'url')}" target="_blank" class="selected">关于协会</a><a href="{:getCategory(4,'url')}" target="_blank">协会公告</a></div>
            <div class="rgcontent" id="assggDIV">
            	<ul class="ass_tylist">
                <get sql="SELECT title,content FROM shuipfcms_page  WHERE catid=26 "  num="1">
                <volist name="data" id="vo">
                      <li class="xh_introduction">{$vo.content|str_cut=###,160}<a href="{:getCategory(26,'url')}" target="_blank">[更多]</a></li>
                </volist></get>  
                </ul>
            	<ul class="ass_tylist" style="display:none;">
                <content action="lists" catid="4"  order="id DESC" num="10">
                <volist name="data" id="vo">
                	<li><a href="{$vo.url}" title="{$vo.title}" target="_blank">{$vo.title|str_cut=###,12}</a></li>
                  </volist>
                </content>
                </ul>
                
            </div>
        </div>
    </div>
    
    
    <div class="ass_content2 ass_mgbt">
    	<div class="bd_bg"></div>
        <div class="ass_sdlist">
        	<div class="sdcut"><span>FOCUS</span><font><a href="{:getCategory(31,'url')}" target="_blank">行业聚焦</a></font></div>
            <position action="position" posid="3" thumb="1" num="1" order="listorder desc">
        <volist name="data" id="vo">
            <div class="sdpic"><a href="{$vo.data.url}" target="_blank"><img src="{:thumb($vo[data][thumb],360,205)}" alt="" title="{$vo.data.title}" /></a></div>
            <h2><a href="{$vo.data.url}" target="_blank">{$vo.data.title|str_cut=###,12}</a><img src="/statics/jj718/images/hot.gif" /></h2>
            </volist> </position>
            
            <ul class="ass_tylist">
                <content action="lists" catid="31"  order="updatetime DESC" num="5">

                <volist name="data" id="vo">
                	<li><a href="{$vo.url}" title="{$vo.title}" target="_blank">{$vo.title|str_cut=###,20}</a><span>{$vo.updatetime|date="m-d",###}</span></li>
                  </volist>
                </content>
                <li class="newsmore"><a href="{:getCategory(31,'url')}" target="_blank"><img src="/statics/jj718/images/more.gif" /></a></li>
            </ul>
        </div>
        <div class="ass_sdlist">
        	<div class="sdcut"><span>TREND</span><font><a href="{:getCategory(32,'url')}" target="_blank">协会动态</a></font></div>
           <position action="position" posid="4" thumb="1" num="1" order="listorder desc">
        <volist name="data" id="vo">
            <div class="sdpic"><a href="{$vo.data.url}" target="_blank"><img src="{:thumb($vo[data][thumb],360,205)}" alt="" title="{$vo.data.title}" /></a></div>
            <h2><a href="{$vo.data.url}" target="_blank">{$vo.data.title|str_cut=###,12}</a><img src="/statics/jj718/images/hot.gif" /></h2>
            </volist> </position>
            <ul class="ass_tylist">
                <content action="lists" catid="32"  order="updatetime DESC" num="5">
                <volist name="data" id="vo">
                	<li><a href="{$vo.url}" title="{$vo.title}" target="_blank">{$vo.title|str_cut=###,20}</a><span>{$vo.updatetime|date="m-d",###}</span></li>
                  </volist>
                </content>
                <li class="newsmore"><a href="{:getCategory(32,'url')}" target="_blank"><img src="/statics/jj718/images/more.gif" /></a></li>
            </ul>
        </div>
        <div class="ass_sdlist">
        	<div class="sdcut"><span>SYSTEM</span><font><a href="{:getCategory(33,'url')}" target="_blank">政策法规</a></font></div>
           <position action="position" posid="5" thumb="1" num="1" order="listorder desc">
        <volist name="data" id="vo">
            <div class="sdpic"><a href="{$vo.data.url}" target="_blank"><img src="{:thumb($vo[data][thumb],360,205)}" alt="" title="{$vo.data.title}" /></a></div>
            <h2><a href="{$vo.data.url}" target="_blank">{$vo.data.title|str_cut=###,12}</a><img src="/statics/jj718/images/hot.gif" /></h2>
            </volist> </position>
             <ul class="ass_tylist">
                <content action="lists" catid="33"  order="updatetime DESC" num="5">
                <volist name="data" id="vo">
                	<li><a href="{$vo.url}" title="{$vo.title}" target="_blank">{$vo.title|str_cut=###,20}</a><span>{$vo.updatetime|date="m-d",###}</span></li>
                  </volist>
                </content>
                <li class="newsmore"><a href="{:getCategory(33,'url')}" target="_blank"><img src="/statics/jj718/images/more.gif" /></a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
    
    <div class="ass_mgbt"><a href="http://i.jj718.com/fdpg/" target="_blank"><img src="/statics/jj718/images/banner_gg1.jpg" /></a></div>
    
    <div class="ass_content3 ass_mgbt">
    	<div class="hyfc_lf">会<br />员<br />风<br />采</div>
        <div class="hyfc_rg">
        	<ul>
             <position action="position" posid="2" thumb="1" num="10" order="listorder desc">
        <volist name="data" id="vo">
        	<li><span><a href="{$vo.data.url}" target="_blank"><img src="{:thumb($vo[data][thumb],125,165)}" alt="" title="{$vo.data.title}" /></a><div>{$vo.data.description|str_cut=###,30}</div></span><p><a href="{$vo.data.url}" target="_blank" title="{$vo.data.title}">{$vo.data.title|str_cut=###,10}</a></p></li>
    	</volist>
		</position>	
            	
               
            </ul>
        </div>
        <div class="clear"></div>
    </div>
    
    <div class="ass_content4 ass_mgbt">
    	<div class="zh_info">
        	<div class="info_title"><span>展会信息</span><a href="{:getCategory(7,'url')}" target="_blank"><img src="/statics/jj718/images/more.gif" /></a></div>
            <div class="info_list">
            	<ul class="ass_tylist">
                <content action="lists" catid="7"  order="id DESC" num="11">
             <volist name="data" id="vo">
                    <li><a href="{$vo.url}" title="{$vo.title}" target="_blank">{$vo.title|str_cut=###,20}</a></li>
                   </volist>
                </content>
                </ul>
            </div>
        </div>
        <div class="info_rgpic ">
            <ul>
            <position action="position" posid="6" thumb="1" num="4" order="listorder desc">
        <volist name="data" id="vo">
                <li><a href="{$vo.data.url}" target="_blank"><img src="{:thumb($vo[data][thumb],382,187)}" alt="" title="{$vo.data.title}" /></a></li>
               </volist>
                </position>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
    
    <div class="ass_content4 ass_content5 ass_mgbt">
    	<div class="zh_info cyjqlfhg">
        	<div class="info_title"><span>产业集群</span><a href="{:getCategory(8,'url')}" target="_blank"><img src="/statics/jj718/images/more.gif" /></a></div>
            <div class="info_list">
            	<ul class="ass_tylist">
                   <content action="lists" catid="8"  order="updatetime DESC" num="4">
                <volist name="data" id="vo">
                	<li><a href="{$vo.url}" title="{$vo.title}" target="_blank">{$vo.title|str_cut=###,20}</a><span>{$vo.updatetime|date="m-d",###}</span></li>
                  </volist>
                </content>
                </ul>
                <div class="cyjq_lfpic">
                 <position action="position" posid="8" thumb="1" num="4" order="listorder desc">
        <volist name="data" id="vo">
                <a href="{$vo.data.url}" target="_blank"><img src="{:thumb($vo[data][thumb],365,161)}" alt="" title="{$vo.data.title}" /></a>
                </volist>
                </position>
                </div>
            </div>
        </div>
        <div class="cyjq_ctpic"><position action="position" posid="10" thumb="1" num="4" order="listorder desc">
        <volist name="data" id="vo">
                <a href="{$vo.data.url}" target="_blank"><img src="{:thumb($vo[data][thumb],381,353)}" alt="" title="{$vo.data.title}" /></a>
                </volist>
                </position></div>
        <div class="zh_info cyjqlfhg video_rg">
        	<div class="info_title"><span>视频专区</span><a href="{:getCategory(39,'url')}" target="_blank"><img src="/statics/jj718/images/more.gif" /></a></div>
            <div class="ass_video">
 <position action="position" posid="11" thumb="1" num="4" order="listorder desc">
        <volist name="data" id="vo">
            	 <a href="{$vo.data.url}" target="_blank"><img src="{:thumb($vo[data][thumb],361,239)}" alt="" title="{$vo.data.title}" /></a>
                <p><a href="{$vo.data.url}" target="_blank" title="{$vo.data.title}">{$vo.data.title}</a></p>
             </volist>
                </position>   
            </div>
        </div>
        <div class="clear"></div>
    </div>
    
    <div class="ass_mgbt"><a href="#"><img src="/statics/jj718/images/banner_gg2.jpg" /></a></div>
    
    <div class="ass_content4 ass_content6 ass_mgbt">
    	<div class="zh_info zt_left">
        	<div class="info_title"><span>专题</span><a href="{:getCategory(38,'url')}" target="_blank"><img src="/statics/jj718/images/more.gif" /></a></div>
            <content action="lists" catid="38" where="`thumb`!='' AND `status`=99"  order="updatetime DESC" num="5">
             <volist name="data" id="vo">
            <dl>
            	<dt><a href="{$vo.url}" title="{$vo.title}"><img src="{:thumb($vo[thumb],124,77)}" alt="" title="{$vo.title}" /></a></dt>
                <dd><h2><a href="{$vo.url}" title="{$vo.title}" target="_blank">{$vo.title|str_cut=###,20}</a></h2><p class="introduction">{$vo.description|str_cut=###,50}</p><p class="know_more"><a href="{$vo.url}" target="_blank">了解更多</a></p></dd>
            </dl>
            </volist>
                </content>
            
        </div>
        <div class="dzkw_rg">
        	<div class="info_title"><span>电子刊物</span><a href="{:getCategory(37,'url')}" target="_blank"><img src="/statics/jj718/images/more.gif" /></a></div>
            <div class="ass_dzkw">
            	<div class="dzkwbox" id="cd_tyg">
                	<ul>
                    <position action="position" posid="13" thumb="1" num="5" order="listorder desc">
             <volist name="data" id="vo">
                    	<li> <a href="{$vo.data.url}" target="_blank"><img src="{:thumb($vo[data][thumb],246,314)}" alt="" title="{$vo.data.title}" /></a><h2><a href="{$vo.data.url}" title="{$vo.data.title}" target="_blank">{$vo.data.title|str_cut=###,10}</a></h2><p>{$vo.data.description|str_cut=###,50}</p></li>
						 </volist>
                </position>
                    </ul>
                </div>
                <a id="cd-tyg-backward" class="click_a_lf" href="javascript:void(0)"></a>
				<a id="cd-tyg-forward"  class="click_a_rg" href="javascript:void(0)"></a>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    
    <div class="ass_yqlj">
    	<div class="yqljtitle">友情链接</div>
        <div class="yqljcontent">
        	
            <get table="links" termsid="1" visible="1" order="id DESC" num="50">
    <volist name="data" id="vo">
<a href="{$vo.url}"  target="{$vo.target}" title="{$vo.description}" >{$vo.name}</a>
    </volist>
</get>
        </div>
    </div>
    
</div>

<template file="Content/footer.php"/>
<script type="text/javascript" src="/min/?b=statics/jj718/js&amp;f=jquery.nivo.slider.pack.js,hy_scrollleft.js,jquery.scrollbox.js"></script>
<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider();
});
</script>
<script language="javascript">
$(function() {
	$('#assgg a').mouseover(function(){
		$(this).addClass("selected").siblings().removeClass();
		$("#assggDIV > ul").eq($('#assgg a').index(this)).show().siblings().hide();
	});
	
	$(".hyfc_rg").imgscroll({
		speed: 40,    //图片滚动速度
		amount: 0,    //图片滚动过渡时间
		width: 1,     //图片滚动步数
		dir: "left"   // "left" 或 "up" 向左或向上滚动
	});
	
	$('#cd_tyg').scrollbox({
	  direction: 'h',
	  distance: 246
	});
	$('#cd-tyg-backward').click(function () {
	  $('#cd_tyg').trigger('backward');
	});
	$('#cd-tyg-forward').click(function () {
	  $('#cd_tyg').trigger('forward');
	});
	
	$("#weixindv").hover(function(){
		$(this).find("#weixinimg").stop().animate({left:"-165"},200);
	  },function(){
		$(this).find("#weixinimg").stop().animate({left:"200"},200);
	  });
	
	$(".hyfc_rg li").hover(function(){
		$(this).find("div").stop().animate({top:"0"},200);
	  },function(){
		$(this).find("div").stop().animate({top:"165"},200);
	  });
	  
	  
	
});
</script>
</body>
</html>
