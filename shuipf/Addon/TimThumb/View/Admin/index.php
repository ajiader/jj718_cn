<?php if (!defined( 'SHUIPF_VERSION')) exit(); ?>
<Admintemplate file="Common/Head" />
<body class="J_scroll_fixed">
<div class="wrap">
  <Admintemplate file="Common/Nav" />
  <div class="h_a">温馨提示</div>
  <div class="prompt_text">
    <p>本插件不依赖于任何PHP框架，配置完毕提交后将在网站根目录生成文件，请确保其有权限！！</p>
    <p> Wordpress享誉盛名的缩略图工具-TimThumb缩略图插件，配合伪静态告别URL参数洁癖！<br/>
      ========================================================================= <br/>
      需要在.htaccess中加入以下伪静态,然后既可以使用 <span style="color:red;">TT($src = "", $width = 0, $height = 0) 公共函数</span>： <br/>
    <pre>
#URL自动图形化处理
RewriteRule ^thumb/remotes/(.*)/(\d+)/(\d+)(\.jpg|\.gif|\.png|/){0,1}$ /_tim.php?src=https://$1$4&w=$2&h=$3
RewriteRule ^thumb/remote/(.*)/(\d+)/(\d+)(\.jpg|\.gif|\.png|/){0,1}$ /_tim.php?src=http://$1$4&w=$2&h=$3
RewriteRule ^thumb/(.*)/(\d+)/(\d+)(\.jpg|\.gif|\.png|/){0,1}$ /_tim.php?src=$1$4&w=$2&h=$3</pre>
    </p>
  </div>
  <div class="h_a">参数设置</div>
  <form action="{:U('Addons/TimThumb/save',array('isadmin'=>1))}" method="post" name="myform" class="J_ajaxForm">
    <div class="table_full">
      <table width="100%" cellspacing="0">
        <thead>
          <tr>
            <th align="center" width="220">配置名称</th>
            <th align="center">配置值</th>
          </tr>
        </thead>
        <tbody height="200" class="nHover td-line">
          <tr>
            <th>最大图片宽度</th>
            <td><input type="text" class="input" name="value[MAX_WIDTH]" style="width:120px;" value="{$MAX_WIDTH}">
              [整型]</td>
          </tr>
          <tr>
            <th>最大图片高度</th>
            <td><input type="text" class="input" name="value[MAX_HEIGHT]" style="width:120px;" value="{$MAX_HEIGHT}">
              [整型]</td>
          </tr>
          <tr>
            <th>缓存路径（建议设置根目录某文件夹）</th>
            <td><input type="text" class="input" name="value[FILE_CACHE_DIRECTORY]" style="width:120px;" value="{$FILE_CACHE_DIRECTORY}"></td>
          </tr>
          <tr>
            <th>缩略图质量</th>
            <td><input type="text" class="input" name="value[DEFAULT_Q]" style="width:120px;" value="{$DEFAULT_Q}">
              [整型]</td>
          </tr>
          <tr>
            <th>错误时的图片</th>
            <td><input type="text" class="input" name="value[ERROR_IMAGE]" style="width:520px;" value="{$ERROR_IMAGE}">
              [URL]</td>
          </tr>
          <tr>
            <th>未找到时图片</th>
            <td><input type="text" class="input" name="value[NOT_FOUND_IMAGE]" style="width:520px;" value="{$NOT_FOUND_IMAGE}">
              [URL]</td>
          </tr>
          <tr>
            <th>允许的外部图片域</th>
            <td><textarea name="value[ALLOWED_SITES]" style="width:520px;height:200px;" value="{$ALLOWED_SITES}">{$ALLOWED_SITES}</textarea>
              <p>格式：xxx.com;aaa.com <br/>
                ！！只有授权域名下的图片才可以被缩略到本地！！</p></td>
          </tr>
        </tbody>
        <thead>
          <tr>
            <th align="center" colspan="2"> <div class="h_a">高级选项[建议保持默认]</div></th>
        <tbody height="200" class="nHover td-line">
          <tr>
            <th>内存最大限制</th>
            <td><input type="text" class="input" name="value[MEMORY_LIMIT]" style="width:520px;" value="{$MEMORY_LIMIT}">
              [整形，单位M]</td>
          </tr>
          <tr>
            <th>开启图片防盗链</th>
            <td><input type="text" class="input" name="value[BLOCK_EXTERNAL_LEECHERS]" style="width:520px;" value="{$BLOCK_EXTERNAL_LEECHERS}">
              [true,false]</td>
          </tr>
          <tr>
            <th>文件缓存更新时间</th>
            <td><input type="text" class="input" name="value[FILE_CACHE_TIME_BETWEEN_CLEANS]" style="width:520px;" value="{$FILE_CACHE_TIME_BETWEEN_CLEANS}">
              [秒]</td>
          </tr>
          <tr>
            <th>缓存文件生存时间</th>
            <td><input type="text" class="input" name="value[FILE_CACHE_MAX_FILE_AGE]" style="width:520px;" value="{$FILE_CACHE_MAX_FILE_AGE}">
              [秒]</td>
          </tr>
          <tr>
            <th>最大处理图片</th>
            <td><input type="text" class="input" name="value[MAX_FILE_SIZE]" style="width:520px;" value="{$MAX_FILE_SIZE}">
              [限制此脚本最大处理多大体积的图片，默认10485760（10M）]</td>
          </tr>
          <tr>
            <th>抓取远程图片的超时限制</th>
            <td><input type="text" class="input" name="value[CURL_TIMEOUT]" style="width:520px;" value="{$CURL_TIMEOUT}">
              [秒]</td>
          </tr>
          <tr>
            <th>浏览器对图片的缓存时间</th>
            <td><input type="text" class="input" name="value[BROWSER_CACHE_MAX_AGE]" style="width:520px;" value="{$BROWSER_CACHE_MAX_AGE}">
              [秒]</td>
          </tr>
          <tr>
            <th>默认裁剪格式</th>
            <td><input type="text" class="input" name="value[DEFAULT_ZC]" style="width:520px;" value="{$DEFAULT_ZC}">
              <br/>
              0：根据传入的值进行缩放（不裁剪）<br/>
              1：以最合适的比例裁剪和调整大小（裁剪）<br/>
              2：按比例调整大小，并添加边框（裁剪） </td>
          </tr>
          <tr>
            <th>是否进行图片锐化</th>
            <td><input type="text" class="input" name="value[DEFAULT_S]" style="width:520px;" value="{$DEFAULT_S}">
              [0,1]</td>
          </tr>
        </tbody>
          </tr>
        
          </thead>
        
      </table>
    </div>
    <div class="btn_wrap">
      <div class="btn_wrap_pd">
        <input name="catid" type="hidden" value="10">
        <button class="btn btn_submit mr10 J_ajax_submit_btn" type="submit">保存设置</button>
      </div>
    </div>
  </form>
</div>
<script src="{$config_siteurl}statics/js/common.js"></script>
</body>
</html>