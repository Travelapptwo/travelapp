<?php
header("content-type:text/html;charset=utf-8");
define("COMING","yes");
//"文件路径" “服务器路径”
//include "libs/functions.php";
// 1.单入口文件
// 2.，模板引擎
// 3.控制器  路由  -》地址栏
// 4.相应的数据-》视图
// 5.操作数据库-》面向对象
$server=$_SERVER;    //当前路径信息
define("ROOT_PATH",$server["DOCUMENT_ROOT"]);
define("APP_PATH",ROOT_PATH."5.26/mvc");
define("LIBS_PATH",APP_PATH."/libs");
define("MODULE_PATH",APP_PATH."/module");
define("TPL_PATH",APP_PATH."/template");
//define(CONFIG,include_once APP_PATH."/config.php");
//$config=include_once APP_PATH."/config.php";

//服务器路径
$prot=substr($server["SERVER_PROTOCOL"],0,strrpos($server["SERVER_PROTOCOL"],"/"));
$path=substr($server["SCRIPT_NAME"],0,strrpos($server["SCRIPT_NAME"],"/"));//sttrpos判断位置
//explode() 把字符串截取前后两个数组
define("URL_PATH",$prot."://".$server["HTTP_HOST"].$path);
define("CSS_PATH",$prot."://".$server["HTTP_HOST"].$path."/static/css");
define("JS_PATH",$prot."://".$server["HTTP_HOST"].$path."/static/js");
define("EDIT_PATH",$prot."://".$server["HTTP_HOST"].$path."/static/editor");
define("IMG_PATH",$prot."://".$server["HTTP_HOST"].$path."/static/img");
define("SELF_PATH",$prot."://".$server["HTTP_HOST"].$server["SCRIPT_NAME"]);
require_once LIBS_PATH."/db.class.php";
include_once LIBS_PATH."/functions.php";
include_once LIBS_PATH."/route.class.php";
include_once LIBS_PATH."/smarty/Smarty.class.php";
include_once LIBS_PATH."/main.class.php";
include_once LIBS_PATH."/session.class.php";
include_once LIBS_PATH."/code.class.php";
include_once LIBS_PATH."/tree.class.php";
include_once LIBS_PATH."/indexMain.class.php";
include_once LIBS_PATH."/upload.class.php";
include_once LIBS_PATH."/page.class.php";
$obj=new route();
$obj->getInfo();