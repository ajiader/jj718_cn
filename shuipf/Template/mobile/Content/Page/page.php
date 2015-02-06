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
	<div class="xhabout_title">
    	<content action="category" catid="$parentid"  order="listorder ASC" >
                <volist name="data" id="vo">
        <a href="{$vo.url}" <if condition="$vo.catid eq $catid"> class="selected"</if>>{$vo.catname}</a>
         </volist>
                  </content>
    </div>
    <div class="xhcontent">
    	<div class="xhtitle xhtymg">{$catname}</div>
        {$content}
    </div>
    <template file="Content/footer.php"/>
</div>

<script type="text/javascript" src="/statics/mobile/js/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="/statics/mobile/js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider();
});
</script>
</body>
</html>

</body>
</html>
