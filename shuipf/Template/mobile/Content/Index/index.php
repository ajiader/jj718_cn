<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=0.5, minimum-scale=1, maximum-scale=1, user-scalable=no" />
<title><if condition=" isset($SEO['title']) && !empty($SEO['title']) ">{$SEO['title']}</if>{$SEO['site_title']}</title>
<meta name="description" content="{$SEO['description']}" />
<meta name="keywords" content="{$SEO['keyword']}" />
<link type="text/css" rel="stylesheet" href="/statics/mobile/css/xh_phone.css" />
</head>

<body>
<div class="xhmian">
    <template file="Content/header.php"/>
    <div class="xhmenu">
        <a href="{:getCategory(26,'url')}"><span><img src="/statics/mobile/images/xhicon1.gif" /></span><h2>关于协会</h2></a>
        <a href="{:getCategory(31,'url')}"><span><img src="/statics/mobile/images/xhicon2.gif" /></span><h2>资讯中心</h2></a>
        <a href="{:getCategory(34,'url')}"><span><img src="/statics/mobile/images/xhicon3.gif" /></span><h2>会员中心</h2></a>
        <a href="{:getCategory(7,'url')}"><span><img src="/statics/mobile/images/xhicon4.gif" /></span><h2>展会信息</h2></a>
        <div class="clear"></div>
    </div>
    <div class="xhline"></div>
    <div class="xhtitle xhtymg">关于协会</div>
    <div class="xhgyxh_nr">
    <get sql="SELECT title,content FROM shuipfcms_page  WHERE catid=26 "  num="1">
                <volist name="data" id="vo">
        <dl>
            <dt><a href="{:getCategory(26,'url')}"><img src="/statics/mobile/images/xhpic1.jpg" /></a></dt>
            <dd>
              <h2>{$vo.title|str_cut=###,50}</h2>
              <p>{$vo.content|str_cut=###,100}<a href="{:getCategory(26,'url')}">【详细】</a></p></dd>
        </dl>
         </volist></get> 
        <div class="clear"></div>
        <div class="xhamore"><a href="{:getCategory(26,'url')}">查看更多</a></div>
    </div>
    
    <div class="xhline"></div>
    <div class="xhtitle xhtymg">资讯中心</div>
    <div class="xhgyxh_nr xhzhxx">
    <content action="lists" catid="5" where="`thumb`!='' AND `status`=99" order="id DESC" num="4">
                <volist name="data" id="vo">
        <dl>
            <dt><a href="{$vo.url}" title="{$vo.title}"><img src="{:thumb($vo[thumb],186,133)}" alt="{$vo.title}" title="{$vo.title}" /></a></dt>
            <dd><h2><a href="{$vo.url}" title="{$vo.title}">{$vo.title|str_cut=###,20}</a></h2><p>{$vo.description|str_cut=###,40}<a href="{$vo.url}">【详细】</a></p></dd>
        </dl>
       </volist>
                </content>
        
    </div>
    <div class="xhamore"><a href="{:getCategory(31,'url')}">查看更多</a></div>
    <div class="xhline"></div>
    <div class="xhtitle xhtymg">会员中心</div>
    <div class="xhhuiyuan">
      <content action="lists" catid="35" where="`thumb`!='' AND `status`=99" order="listorder asc,id DESC"  num="4">
                <volist name="data" id="vo">
        <div class="hylist <eq name="mod" value="2">bodrg</eq>">
        	<span><a href="{$vo.url}" title="{$vo.title}"><img src="{:thumb($vo[thumb],283,171)}" alt="{$vo.title}" title="{$vo.title}" /></a></span>
            <h2><a href="{$vo.url}" title="{$vo.title}" >{$vo.title|str_cut=###,20}</a></h2>
            <p class="p1">{$vo.updatetime|date="Y/m/d",###}</p>
            <p class="p2">{$vo.description|str_cut=###,30}<a href="{$vo.url}">【详细】</a></p>
        </div>
        </volist>
                </content>
        <div class="clear"></div>
    </div>
    
    <div class="xhamore"><a href="{:getCategory(34,'url')}">查看更多</a></div>
    <div class="xhline"></div>
    <div class="xhtitle xhtymg">展会信息</div>
    <div class="xhgyxh_nr xhzhxx">
    <content action="lists" catid="7" where="`thumb`!='' AND `status`=99" order="id DESC" num="4">
                <volist name="data" id="vo">
        <dl>
            <dt><a href="{$vo.url}" title="{$vo.title}"><img src="{:thumb($vo[thumb],186,133)}" alt="{$vo.title}" title="{$vo.title}" /></a></dt>
            <dd><h2><a href="{$vo.url}" title="{$vo.title}">{$vo.title|str_cut=###,20}</a></h2><p>{$vo.description|str_cut=###,40}<a href="{$vo.url}">【详细】</a></p></dd>
        </dl>
       </volist>
                </content>
        
    </div>
    <div class="xhamore"><a href="{:getCategory(7,'url')}">查看更多</a></div>
    <div class="xhline"></div>
<template file="Content/footer.php"/>
</div>
</body>
</html>
