<?php
/**
 * 开发环境 - 配置文件
 * @author Ziiber <ziiber@foxmail.com>
 * @copyright 2015
 * @version 1.0.0
 */
$develop = array(
    # 开发环境下数据库配置
    'DB_HOST'   => '127.0.0.1', // 服务器地址(Host)
    'DB_NAME'   => 'music',     // 数据库名(DB Name)
    'DB_USER'   => 'root',      // 用户名(Username)
    'DB_PWD'    => '',          // 密码(Password)
    'DB_PORT'   => '3306',      // 端口(Port)
    'DB_PREFIX' => 'music_',     // 数据库表前缀

    # 默认访问模型
    'DEFAULT_MODULE'    =>  'Api',

    # 路由配置
    'URL_ROUTER_ON'   => true,                           // 开路由
    'URL_ROUTE_RULES' => array(
        
    ),

    # 域名配置
    'APP_SUB_DOMAIN_DEPLOY'   =>    1, # 开启子域名配置
    'APP_SUB_DOMAIN_RULES'    =>    array(   
        'api.com'  => 'Api'
    )
);