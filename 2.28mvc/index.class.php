<?php
	/*
	 * 路由
	 * */
	$m=isset($_GET["m"])?$_GET["m"]:"index";
	$f=isset($_GET["f"])?$_GET["f"]:"index";
	$a=isset($_GET["a"])?$_GET["a"]:"index";
	$file="admin/".$m."/".$f.".class.php";
	if(is_file($file)){
		include $file;
	}else{
		echo "页面未找到";
	}
?>