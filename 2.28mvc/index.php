<?php
/*
 * 	单入口		安全
 	所有的页面都要从index.php进入
 	参数		可调配
 * 
 * 	$_GET["m"]->"模块";
 * 	$_GET["f"]->"方法";
 * 
 * */
//	var_dump($_SERVER);
	define("ROOT_URL",__DIR__);
	define("LIBS_URL",ROOT_URL."/libs");
	define("TEMP_INDEX_URL",ROOT_URL."/template/index");
	define("TEMP_ADMIN_URL",ROOT_URL."/template/admin");
	echo LIBS_URL;
//	echo substr($_SERVER["SCRIPT_NAME"],0,strrpos($_SERVER["SCRIPT_NAME"],"/"));
	define("HTTP_URL","http://".$_SERVER["SERVER_NAME"].substr($_SERVER["SCRIPT_NAME"],0,strrpos($_SERVER["SCRIPT_NAME"],"/")));
	define("FILE_URL","http://".$_SERVER["SERVER_NAME"].$_SERVER["SCRIPT_NAME"]);
	define("CSS_PATH",HTTP_URL."/static/css");
	define("JS_PATH",HTTP_URL."/static/js");
	define("IMG_PATH",HTTP_URL."/static/images");
	
	include LIBS_URL."/db.class.php";
	include LIBS_URL."/main.class.php";
	include LIBS_URL."/route.class.php";
	require_once LIBS_URL.'/smarty/Smarty.class.php';

	$route=new route();
	$route->init();
?>