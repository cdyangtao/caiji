<?php
$application='/ads';
return array(
	//'配置项'=>'配置值'
    // 数据库
    'DB_TYPE'   => 'mysql', // 数据库类型
    /*'DB_HOST'   => '10.66.192.92',
    'DB_NAME'   => 'caiji',
    'DB_USER'   => 'cdb_outerroot',
    'DB_PWD'    => 'mysql@_pxtar123',*/
    'DB_HOST'   => 'localhost',
    'DB_NAME'   => 'caiji',
    'DB_USER'   => 'root',
    'DB_PWD'    => 'qsyhcd',
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => '', // 数据库表前缀

    //调试相关
    'SHOW_PAGE_TRACE' =>true, // 显示页面Trace信息

);
?>