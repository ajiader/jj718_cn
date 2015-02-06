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
<!-- header<start>-->
<template file="Content/header.php"/>
<!-- header<end>-->
<div class="acc_center">

	<template file="Content/side_gonggao.php"/>
    
    <div class="ass_mgbt member_pic"><a href="#"><img src="/statics/jj718/images/member_gg1.jpg" /></a><a href="#"><img src="/statics/jj718/images/member_gg2.jpg" /></a><a href="#"><img src="/statics/jj718/images/member_gg3.jpg" class="mg1" /></a></div>
    
    <div class="ny_conentdv">
    	<div class="ny_left">
        	<div class="nycutty"><span>{$catname}</span></div>
            <div class="leftcontent">
            <content action="lists" catid="$catid" order="listorder asc,id DESC" num="5" page="$page">
                 <volist name="data" id="vo">
            	<div class="member_first">
                	<div class="firstpic"><a href="{$vo.url}" title="{$vo.title}"><img src="{:thumb($vo[thumb],212,134)}" alt="{$vo.title}" title="{$vo.title}" /></a></div>
                    <div class="firstnr">
                    	<h2><a href="{$vo.url}" target="_blank" title="{$vo.title}">{$vo.title|str_cut=###,20}</a><span>{$vo.updatetime|date="Y/md",###}</span></h2>
                        <p>{$vo.description|str_cut=###,150}<a href="{$vo.url}" target="_blank">[详情]</a></p>
                    </div>
                </div>
            </volist>  </content> 
                
                <div class="jy_fy">{$pages}</div>
            </div>
        </div>
        
        <template file="Content/right.php"/>
        
        <div class="clear"></div>
        
    </div>

</div>

<template file="Content/footer.php"/>
<script type="text/ecmascript" src="/statics/jj718/js/jquery.scrollbox.js"></script>
<script language="javascript">
$(function() {
	$('#scrollcontent').scrollbox();
});
</script>
</body>
</html>
