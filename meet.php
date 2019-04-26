<?php
header('Access-Control-Allow-Origin:*');

/**
 * 手机端预约接口
 */
define('IN_ECTOUCH', true);
define('IN_ECS', true);
error_reporting(E_ALL & ~E_NOTICE);

//加载初始化文件
require(dirname(__FILE__) . '/includes/init.php');
//设置时区
date_default_timezone_set('Asia/Shanghai');  
//加载自定义语言包
$GLOBALS['meet_lan']= require(dirname(__FILE__) . '/includes/api/meet/config/Config.php');

//加载预约接口类
require(dirname(__FILE__) . '/includes/api/meet/Base.php');
require(dirname(__FILE__) . '/includes/api/meet/Service.php');
require(dirname(__FILE__) . '/includes/api/meet/Meet.php');
require(dirname(__FILE__) . '/includes/api/meet/Check.php');

$obj = new Meet();
$action = $_REQUEST['act'];
$input = $_REQUEST;

//method_exists — 检查类的方法是否存在
if(method_exists($obj, $action)){
	echo $obj->$action($input);
}else{
	die('Hacking attempt');
}
