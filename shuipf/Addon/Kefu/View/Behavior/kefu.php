<link rel="stylesheet" type="text/css" href="{$Config.siteurl}statics/addons/kefu/css/global.css"/>
<link rel="stylesheet" type="text/css" href="{$Config.siteurl}statics/addons/kefu/css/sidebar.css"/>
<div class="scrollsidebar" id="scrollsidebar">
  <div class="side_content">
    <div class="side_list">
      <div class="side_title"><a title="关闭" class="close_btn"><span>关闭</span></a></div>
      <div class="side_center">
        <div class="qqserver">
        <volist name="qqList" id="vo">
          <p> <a title="点击这里给我发消息" href="http://wpa.qq.com/msgrd?v=3&amp;uin={$vo.qq}&amp;site=qq&amp;menu=yes" target="_blank"> <img src="http://wpa.qq.com/pa?p=1:954502368:47"> {$vo.nick} </a> </p>
        </volist>
        </div>
        <if condition=" !empty($book) "> 
        <hr>
        <div class="msgserver">
          <p><a href="{$book}" target="_blank">给我们留言</a></p>
        </div>
        </if>
      </div>
      <div class="side_bottom"></div>
    </div>
  </div>
  <div class="show_btn"><span>在线客服</span></div>
</div>
<script type="text/javascript" src="{$Config.siteurl}statics/addons/kefu/js/jquery.fixed.1.3.js"></script>
<script language="javascript">
jQuery(document).ready(function() {
  	//悬浮客服
	jQuery("#scrollsidebar").fix({
		float : '{$location}',	//default.left or right
		minStatue : true,
		skin : '{$theme}',	//default.gray or yellow 、blue 、green 、orange 、gray 、white
		durationTime : 600
	});
});
</script>