<?php
return array(
    //'配置项'=>'配置值'
    'URL_MODEL' => '2', //URL模式
    'URL_CASE_INSENSITIVE' =>true,//不区分URL大小写
    'SESSION_AUTO_START' => true, //是否开启session
    'ACTION_SUFFIX'=>'Act',//方法后缀
    'URL_HTML_SUFFIX'=>'',//虚拟后缀

    "DEFAULT_LANG" =>'zh-cn', //默认语言
    "DEFAULT_TIMEZONE" =>'PRC', //默认时区
    "DEFAULT_AJAX_RETURN" =>'JSON', //AJAX 数据返回格式 JSON XML ...
    "DEFAULT_CHARSET" =>'utf-8', //默认页面输出编码

    'TMPL_PARSE_STRING' =>  array( // 添加输出替换
        '__UPLOAD__'    =>  __ROOT__.'/Uploads',
    ),

    //数据库配置信息
    'DB_TYPE'=> 'mysql',// 指定数据库是mysql
    'DB_HOST'=> '27.54.242.248',
    'DB_NAME'=>'jl_socket', // 数据库名
    'DB_USER'=>'jl',
    'DB_PWD'=>'jl121', //您的数据库连接密码
    'DB_PORT'=>'3306',
    'DB_PREFIX'=>'jl_',//数据表前缀（与数据库myapp中的表think_message对应）

);
?>
