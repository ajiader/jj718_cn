<?php

/**
 * 悬浮QQ客服 插件
 * Some rights reserved：abc3210.com
 * Contact email:admin@abc3210.com
 */

namespace Addon\Kefu;

use \Addons\Util\Addon;

class KefuAddon extends Addon {

    //插件信息
    public $info = array(
        'name' => 'Kefu',
        'title' => '悬浮QQ客服',
        'description' => '这是一个简单的悬浮QQ客服插件~',
        'status' => 1,
        'author' => '水平凡',
        'version' => '1.0.0',
        'has_adminlist' => 0,
        'sign' => 'e7be3823b1bb37228005a29e4607eb57',
    );

    //安装
    public function install() {
        if (file_exists(SITE_PATH . '/statics/addons/kefu/')) {
            //创建目录
            if (mkdir(SITE_PATH . '/statics/addons/kefu/', 0777, true) == false) {
                return false;
            }
        }
        //移动文件
        ShuipFCMS()->Dir->copyDir($this->addonPath . "statics/", SITE_PATH . '/statics/addons/');
        $Behavior = D('Common/Behavior');
        if ($Behavior->where(array('name' => 'view_kefu_addon'))->count() == 0) {
            $Behavior->addBehavior(array(
                'name' => 'view_kefu_addon',
                'title' => '客服插件视图行为',
                'type' => 1,
            ));
        }
        return true;
    }

    //卸载
    public function uninstall() {
        ShuipFCMS()->Dir->delDir(SITE_PATH . '/statics/addons/kefu/');
        $Behavior = D('Common/Behavior');
        $Behavior->where(array('name' => 'view_kefu_addon'))->delete();
        return true;
    }

    //实现行为 view_kefu_addon
    public function view_kefu_addon() {
        $config = $this->getAddonConfig();
        //输出方式
        $type = $config['type']? : 1;
        if ($type == 1) {
            echo '<script type="text/javascript" src="' . U('Addons/Kefu/index') . '"></script>';
        } else {
            $qq = explode("\n", $config['qq']);
            $qqList = array();
            foreach ($qq as $r) {
                $r = explode('|', $r);
                $qqList[] = array(
                    'qq' => $r[0],
                    'nick' => $r[1],
                );
            }
            $this->assign('qqList', $qqList);
            $this->assign('location', $config['location']? : 'right');
            $this->assign('theme', $config['theme']? : 'gray');
            $this->assign('book', $config['book']);
            $this->display();
        }
    }

}
