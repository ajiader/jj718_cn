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
<!-- header<start>-->
<template file="Content/header.php"/>
<!-- header<end>-->
<div class="acc_center">

	<template file="Content/side_gonggao.php"/>
    
    <div class="ass_mgbt member_pic"><a href="#"><img src="/statics/jj718/images/member_gg1.jpg" /></a><a href="#"><img src="/statics/jj718/images/member_gg2.jpg" /></a><a href="#"><img src="/statics/jj718/images/member_gg3.jpg" class="mg1" /></a></div>
    
    <div class="current_position">当前位置：<a href="/">首页</a> &gt;<navigate catid="$catid" space=" &gt; " /> &gt; {$title} </div>
    
    <div class="ny_conentdv">
    	<div class="ny_left leftcontenttopborder">
            <div class="leftcontent nr_p">
            	<h2 class="newscontenttitle">{$title}</h2>
                <div class="newscontenttime">UPTATED: {$updatetime}　<if condition="$copyfrom"> 来源：{$copyfrom}</if> 查看<span id="hits"></span>次</div>
               <?php  if($videourl): ?>
                 <p style="text-align:center"><embed type="application/x-shockwave-flash" class="edui-faked-video" pluginspage="http://www.macromedia.com/go/getflashplayer"
                  src="{$videourl}" width="800" height="500" wmode="transparent" play="true" loop="false" menu="false" allowscriptaccess="never" allowfullscreen="true"/></p>
               <?php endif;?>
                {$content}
          
                
                 <div class="fanye" style="border: 0px solid #CCC;">
      <ul>
        {$pages}
      </ul>
       <div class="page">
        <p>上一篇：<pre target="1" msg="已经没有了" /> </p>
        <p>下一篇：<next target="1" msg="已经没有了" /> </p>
      </div>
      <div style="clear:both"></div>
    </div>
            </div>
        </div>
        
        <template file="Content/right.php"/>
        
        <div class="clear"></div>
        
    </div>

</div>

<template file="Content/footer.php"/>
<script type="text/javascript">
$(function (){
	//点击
	$.get("{$config_siteurl}api.php?m=Hits&catid={$catid}&id={$id}", function (data) {
	    $("#hits").html(data.views);
	}, "json");
});

</script> 

</body>
</html>
