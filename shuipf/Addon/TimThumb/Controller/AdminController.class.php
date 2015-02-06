<?php

/**
 * 插件后台管理
 * Some rights reserved：foxhunter
 * Contact email:6828983@qq.com
 */

namespace Addon\TimThumb\Controller;

use Addons\Util\Adminaddonbase;

class AdminController extends Adminaddonbase {

    public function index() {
        // 取最近一次的插件配置值
        require_once ($this->addonPath . 'TTConfig.php');
        // 赋值模板变量
        $this->assign($addonConfig);
        $this->display();
    }

    /**
     * 保存配置信息
     * @return [string]
     */
    public function save() {
        // 取配置数据
        $valarr = I('post.value');
        // 转换成数组形式的字符串
        $str = var_export($valarr, TRUE);
        // 存入更新配置信息
        file_put_contents($this->addonPath . 'TTConfig.php', '<?php' . "\r\n" . 'return $addonConfig=' . $str . ';');
        // 取得模板
        $tpl = file_get_contents($this->addonPath . 'timthumb.tpl');
        // 将授权域名进行数组形式处理
        $valarr['ALLOWED_SITES'] = var_export(split(";", $valarr['ALLOWED_SITES']), TRUE);
        // 根据现有配置信息组合替换规则
        foreach ($valarr as $key => $value) {
            $findarr[] = '_' . $key;
            $reparr[] = $value;
        };
        // 开始替换
        $tpl = str_replace($findarr, $reparr, $tpl);
        // 在网站根目录生成新版本
        file_put_contents(SITE_PATH . "_tim.php", $tpl);
        $this->success('设置完毕！');
    }

}
