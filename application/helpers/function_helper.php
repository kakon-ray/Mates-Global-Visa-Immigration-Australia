<?php
if((!function_exists('site_file_path'))){

    function site_file_path() {
        $CI = & get_instance();
        return $CI->config->slash_item('site_file_path');
    }
}


if((!function_exists('physical_path'))){

    function physical_path() {
        $CI = & get_instance();
        return $CI->config->slash_item('physical_path');
    }
}
function videofileupurl()
{
    $videofileupurl	= '/var/videos_wwebd/';
    return $videofileupurl;
}