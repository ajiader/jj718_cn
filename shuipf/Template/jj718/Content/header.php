<?php if (!defined('SHUIPF_VERSION')) exit(); ?>
<div class="top_pic" style="display:none;"><a href="http://i.jj718.com/hxylrzg/" target="_blank"></a></div>
<div class="acc_center">
	<div class="ass_logo"></div>
  <div class="ass_rg"><!--欢迎您的光临，<a href="#">请登录</a><a href="#">免费注册</a>--><div class="searchdv"> <form  name="formsearch" class="form" action="{:U('Search/Index/index')}" method="post"><input type="text" value="请输入你需要查询的内容" onfocus="this.value=''; this.style.color='#333333'" name="q" class="input_text" id="q" /><input type="submit" name="searchbtn" id="searchbtn" class="input_btn" value="搜索" /></form></div></div>
</div>
<div class="ass_menu">
	<div class="acc_center">
    	<ul>
        	<li><a href="{$config_siteurl}" class="xialaguang <if condition="  !isset($catid) "> navhovers</if>" title="{$Config.sitename}"><p>Home</p><b>网站首页</b></a></li>
            <li><a href="{:getCategory(26,'url')}"><p>About</p><b>关于协会</b></a></li>
            <li><a href="{:getCategory(5,'url')}"><p>News</p><b>资讯中心</b></a></li>
            <li><a href="{:getCategory(6,'url')}"><p>Member</p><b>会员中心</b></a></li>
            <li><a href="{:getCategory(7,'url')}"><p>Message</p><b>展会信息</b></a></li>
            <li><a href="{:getCategory(8,'url')}"><p>Industry</p><b>产业集群</b></a></li>
            <li><a href="{:getCategory(37,'url')}"><p>Magazine</p><b>电子刊物</b></a></li>
            <li><a href="{:getCategory(38,'url')}"><p>Topics</p><b>专题</b></a></li>
            <li class="last"><a href="{:getCategory(39,'url')}"><p>Video</p><b>视频专区</b></a></li>
        </ul>
    </div>
</div>
