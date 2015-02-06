<div class="xhphonetop">
    <div class="xhlogo"><a href="/"><img src="/statics/mobile/images/xh_phone_logo.gif" /></a></div>
    <div class="xhfhsy"><a href="/"><img src="/statics/mobile/images/fhindex.gif" /></a></div>
    <div class="clear"></div>
</div>
<div class="ass_banner" id="slider">
    <position action="position" posid="1" thumb="1" num="5" order="listorder desc">
    <volist name="data" id="vo">
    <a href="{$vo.data.url}"  style="background:url({:thumb($vo[data][thumb],500,192)}) no-repeat center top;"><img title="{$vo.data.title}" /></a>
    </volist>
    </position>
</div>