<div class="scroll_notice">
    	<strong>协会公告：</strong>
        <div class="scroll_dv" id="scrollcontent">
        	<ul>
           
            	<li> <content action="lists" catid="4"  order="id DESC" num="15">
             <volist name="data" id="vo" key="k"><a href="{$vo.url}" title="{$vo.title}" target="_blank">{$vo.title|str_cut=###,20}</a><if condition="$k egt 5 "></li><li></if>
              </volist>
                </content>
             </li>
            </ul>
        </div>
    </div>