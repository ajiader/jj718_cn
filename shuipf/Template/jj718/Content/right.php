<div class="ny_right">
 <?php
					$parentid = getCategory($catid,'parentid');
					$parentid = $parentid>0?$parentid:$catid;
				?>
                <content action="category" catid="$parentid"  order="listorder ASC" >
                <if condition="$data">
        	<div class="nav_tydv">
            	<div class="rgtitle"><if condition="$parentid gt 0">{:getCategory($parentid,'catname')}<else />{$catname}</if></div>
                <ul class="navej">
               
                <volist name="data" id="vo">
                	<li><a href="{$vo.url}" <if condition="$vo.catid eq $catid"> class="selected"</if>>{$vo.catname}</a></li>
                  </volist>
                 
                </ul>
            </div>
            </if>
             </content> 
            <div class="ass_mgbt"><a href="http://www.zhida.cc/" target="_blank"><img src="/statics/jj718/images/member_pic2.jpg" /></a></div>
            <div class="nav_tydv">
            	<div class="rgtitle">最新推荐</div>
                <div class="nypadding">
                	<ul class="ass_tylist">
                     <content action="lists" catid="5" order="id DESC" num="8">
             <volist name="data" id="vo">
                        <li><a href="{$vo.url}" title="{$vo.title}" target="_blank">{$vo.title|str_cut=###,12}</a></li>
</volist>
                </content>
                    </ul>
                </div>
            </div>
            <div class="nav_tydv">
            	<div class="rgtitle">名企推荐</div>
                <div class="nypadding">
                	<ul class="ass_tylist">
                     <content action="lists" catid="35"  order="id DESC" num="8">
             <volist name="data" id="vo">
                      <li><a href="{$vo.url}" title="{$vo.title}" target="_blank">{$vo.title|str_cut=###,12}</a></li>
  </volist>
                </content>
                    </ul>
                </div>
            </div>
        </div>