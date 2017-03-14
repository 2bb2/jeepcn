<?php
return array(
	//'配置项'=>'配置值'

    //'配置项'=>'配置值'
   // 'TAGLIB_BUILD_IN'       =>  'Cx,Html,Common\Tag\My',   //加载自定义标签
    //日志文件
    //'LOG_RECORD' => true, // 开启日志记录
  //  'LOG_LEVEL'  =>'EMERG,ALERT,CRIT,ERR', // 只记录EMERG ALERT CRIT ERR 错误
  //  'LOG_TYPE'              =>  'File', // 日志记录类型 默认为文件方式

    'NEED_UPLOAD_OSS'        => array( // 需要上传的目录
        '/Upload/avatar',
        '/Upload/cover',
        '/Upload/image/webuploader',
        '/Upload/video',
    ),

    /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'api',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'sp_',    // 数据库表前缀


    'TMPL_PARSE_STRING' => array(
        //设置路径常量 我用的是 __PUBLIC__
        '__ADMIN__' => '/Public/Admin',
        '__HOME__' => '/Public/Home',
        '__COMMON__' => '/Public/Common',
    ),

    //设置重写模式
    'URL_MODEL'=>2,
);