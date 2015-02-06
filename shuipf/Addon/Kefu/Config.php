<?php

/**
 * 插件配置，下面是示例
 * Some rights reserved：abc3210.com
 * Contact email:admin@abc3210.com
 */
return array(
    'type' => array(
        'title' => '输出方式:',
        'type' => 'select',
        'options' => array(
            1 => 'js调用输出',
            2 => 'HTML生成输出',
        ),
        'value' => 1,
        'tips' => '“HTML生成输出”是直接把代码生成到输出到页面，如果你是生成静态的，建议不使用此方式，“js调用输出”是在页面显示一个JS调用。',
    ),
    'theme' => array(
        'title' => '主题:',
        'type' => 'select',
        'options' => array(
            'gray' => 'gray',
            'yellow' => 'yellow',
            'blue' => 'blue',
            'green' => 'green',
            'orange' => 'orange',
            'gray' => 'gray',
            'white' => 'white',
        ),
        'value' => 'gray'
    ),
    'location' => array(
        'title' => '位置:',
        'type' => 'select',
        'options' => array(
            'right' => 'right',
            'left' => 'left',
        ),
        'value' => 'right'
    ),
    'qq' => array(
        'title' => '客服QQ:',
        'type' => 'textarea',
        'value' => '',
        'style' => "width:200px;",
        'tips' => '格式：12346|小名，一行一个QQ号',
    ),
    'book' => array(
        'title' => '给我留言地址:',
        'type' => 'text',
        'value' => '',
        'style' => "width:200px;",
        'tips' => '为空不显示',
    ),
);
