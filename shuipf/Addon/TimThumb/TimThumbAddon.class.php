<?php

/**
 * TimThumb缩略图插件 插件
 * Some rights reserved：abc3210.com
 * Contact email:admin@abc3210.com
 */

namespace Addon\TimThumb;

use \Addons\Util\Addon;

class TimThumbAddon extends Addon {

    static $plugin_block = "(/\*===========timthumb-plugin=================\*/[\s\S]+/\*===========timthumb-plugin-end=================\*/)";
    //插件信息
    public $info = array(
        'name' => 'TimThumb',
        'title' => 'TimThumb',
        'description' => 'Wordpress享誉盛名的缩略图工具-TimThumb缩略图插件，配合伪静态告别URL参数洁癖！<br/> <span style="color:red;font-weight:bolder;">！！！安装完毕后，必须清除站点缓存，然后在【扩展】-【插件后台列表】中配置本插件的详细信息！！！</span> <br/>需要在.htaccess中加入以下伪静态,然后既可以使用 <span style="color:red;">TT($src = "", $width = 0, $height = 0) 公共函数</span>：
                         <br/>
<pre>#URL自动图形化处理
RewriteRule ^thumb/remotes/(.*)/(\d+)/(\d+)(\.jpg|\.gif|\.png|/){0,1}$ /_tim.php?src=https://$1$4&w=$2&h=$3
RewriteRule ^thumb/remote/(.*)/(\d+)/(\d+)(\.jpg|\.gif|\.png|/){0,1}$ /_tim.php?src=http://$1$4&w=$2&h=$3
RewriteRule ^thumb/(.*)/(\d+)/(\d+)(\.jpg|\.gif|\.png|/){0,1}$ /_tim.php?src=$1$4&w=$2&h=$3</pre>',
        'status' => 1,
        'author' => 'FoxHunter',
        'version' => '1.0.0',
        'has_adminlist' => 1,
        'sign' => 'ad0374032b3419ebaef93165d2a7ecca',
    );
    //有开启插件后台情况下，添加对应的控制器方法
    //也就是插件目录下 Action/AdminAction.class.php中，public属性的方法！
    //每个方法都是一个数组形式，删除，修改类需要具体参数的，建议隐藏！
    public $adminlist = array(
        array(
            //方法名称
            "action" => "save",
            //附加参数 例如：a=12&id=777
            "data" => "",
            //类型，1：权限认证+菜单，0：只作为菜单
            "type" => 1,
            //状态，1是显示，0是不显示
            "status" => 0,
            //名称
            "name" => "保存插件配置",
            //备注
            "remark" => "保存插件配置",
            //排序
            "listorder" => 0,
        ),
    );

    //安装
    public function install() {
        // 取函数模版
        $contents = file_get_contents($this->addonPath . 'common.tpl');
        // 将函数模版写入公共函数文件底部
        file_put_contents(PROJECT_PATH . 'Common/Common/common.php', $contents, FILE_APPEND);
        return true;
    }

    //卸载
    public function uninstall() {
        // 读取公共函数文件
        $contents = file_get_contents(PROJECT_PATH . 'Common/Common/common.php');
        // 将本插件注入的函数块删除
        $contents = preg_replace(self::$plugin_block, "", $contents);
        // 清除空白行
        $contents = preg_replace('/($\s*$)|(^\s*^)/m', '', $contents);
        //将最终文件存入公共函数
        file_put_contents(PROJECT_PATH . 'Common/Common/common.php', $contents);
        unlink(SITE_PATH . '_tim.php');
        return true;
    }

}
