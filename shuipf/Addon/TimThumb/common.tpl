
/*===========timthumb-plugin=================*/
/**
 * 缩略图插件 (Author:FoxHunter)
 * @param string  $src    [description]
 * @param integer $width  [description]
 * @param integer $height [description]
 */
function TT($src = '', $width = 0, $height = 0) {
    // 取无域名的文件地址
    $parse_url = parse_url($src);
    // 分析结构
    $pathinfo = pathinfo($parse_url['path']);
    $setting = '/' . $width . '/' . $height;
    if ($parse_url['host']) {
        $str = '/thumb/' . ($parse_url['scheme'] == 'http' ? 'remote' : 'remotes') .'/'.$parse_url['host'].'/'. $pathinfo['dirname'] .'/'. $pathinfo['filename'] . $setting . ($pathinfo[extension] ? '.' . $pathinfo[extension] : '');
    } else {
        $str = '/thumb/' .$pathinfo['dirname'] .'/'. $pathinfo['filename'] . $setting . ($pathinfo[extension] ? '.' . $pathinfo[extension] : '');
    }
    return str_replace("//", "/", $str);
}
/*===========timthumb-plugin-end=================*/