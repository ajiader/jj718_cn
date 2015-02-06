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
	<div class="xhabout_title xhhuiyuan">
    <if condition="$catid eq 7">
    <!-- <a class="selected" href="#">最新展会</a><a href="#">展会预告</a><a href="#">展会回顾</a>-->
    <else />
    	 <?php
					$parentid = getCategory($catid,'parentid');
					$parentid = $parentid>0?$parentid:$catid;
				?>
                <content action="category" catid="$parentid"  order="listorder ASC" >
                <volist name="data" id="vo">
                	<a href="{$vo.url}" <if condition="$vo.catid eq $catid"> class="selected"</if>>{$vo.catname}</a>
           </volist>
      </content>
       </if>
  </div>
    <div class="xhline"></div>
    <div class="xhgyxh_nr xhzhxx">
      <content action="lists" catid="$catid" order="listorder asc,id DESC" num="5" page="$page"> <volist name="data" id="vo">
        <dl>
            <dt><a href="{$vo.url}" title="{$vo.title}"><img src="{:thumb($vo[thumb],186,131)}" /></a></dt>
            <dd><h2><a href="{$vo.url}" title="{$vo.title}">{$vo.title|str_cut=###,20}</a></h2>
            <p>{$vo.description|str_cut=###,20}<a href="{$vo.url}">【详细】</a></p></dd>
        </dl>
         </volist>  </content> 
    </div>
    
    <div class="jy_fy">{$pages}
 	</div>
  <template file="Content/footer.php"/>  
</div>

<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider();
});
</script>
</body>
</html>

</body>
</html>
