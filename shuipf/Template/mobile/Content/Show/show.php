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
	<div class="xh_pos">
    	当前位置：当前位置：<a href="/">首页</a> &gt;<navigate catid="$catid" space=" &gt; " /> &gt; {$title}
    </div>
    <div class="xhcontent">
    	<div class="xhtitle xhtymg">{$title}</div>
        {$content}
    </div>
    <template file="Content/footer.php"/>
</div>

</body>
</html>

</body>
</html>
