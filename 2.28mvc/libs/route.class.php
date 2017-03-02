<?php
/*
 *	public		公开的
 * 	private		私有的	只有在本类的内部访问
 * 	protected	受保护的	只能在本类或是在子类中访问
 * 	static 		静态的	这个方法或属性，只能作用在类的内部，属于类的属性或方法  aa::$name;
 * */
class route{
	private static $module;//模块
	private static $file;//类
	private static $action;//方法
	function init(){
		$this->getInfo();
	}
	function getInfo(){//初始化
		self::$module=isset($_REQUEST["m"])&&!empty($_REQUEST["m"])?$_REQUEST["m"]:"index";
		self::$file=isset($_REQUEST["f"])&&!empty($_REQUEST["f"])?$_REQUEST["f"]:"index";
		self::$action=isset($_REQUEST["a"])&&!empty($_REQUEST["a"])?$_REQUEST["a"]:"init";
		$file="module/".self::$module."/".self::$file.".class.php";
		if(is_file($file)){
			include $file;
			if(class_exists(self::$file)){
				$obj=new self::$file;
				if(method_exists($obj,self::$action)){
					$method=self::$action;
					$obj->$method();
				}else{
					echo $file."方法不存在";
				}
			}else{
				echo $file."类不存在";
			}
		}else{
			echo $file."文件不存在";
		}
	}
}
?>