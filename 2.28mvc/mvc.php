<?php
/**
 * 
 * 		m  	v 	c(编程架构 	编程模式观察者模式)
 * 
 * 		视图(html+css+js)	模板
 * 		数据(mysql)			存储数据的容器或者逻辑
 * 		后台语言(php)		根据需求获取数据		b/s	架构的应用
 * 
 * 
 * 
 * 		model(模型)（有规则的）
 * 		view(系统)	（前台）
 * 		controller(控制器)
 * 
 * 
 * 		order by id desc asc;
 * 		order by id desc asc limit 0,2;
 * 
 * 		empty()判断值是否有意义
 * 
 * 
 * 		foreach($arr as $k=>$v)
 * 
 * 
 * 		js，php		晚绑定		弱类型		严谨
 * 		c 	强制类型
 * 
 * 
 * 		模板引擎		php是完美的模板引擎
 */

class db{
	/*
	 * 封装		继承		多态
	 */
	public	$hostname="localhost";
	public	$dbname="newbase";
	public 	$tablename;
	private	$username="root";
	private $password="";
	
	public	$fileds;//数组
	public	$connect;
	
	function __construct($tablename){
		$this->tablename=$tablename;
		$this->connect=new mysqli($this->hostname,$this->username,$this->password,$this->dbname);
		$this->connect->query("set names utf8");
		$this->fileds["filed"]=$this->fileds["filed"]?$this->fileds["filed"]:"*";
		$this->fileds["where"]=$this->fileds["order"]=$this->fields["limit"]="";
	}
	public function select($opt=""){
		$sql=$opt?"select ".$this->fileds["filed"]." from ".$this->tablename." where ".$opt:"select ".$this->fileds["filed"]." from ".$this->tablename;
		$result=$this->connect->query($sql);
		$array=array();
		while($row=$result->fetch_assoc()){
			$array[]=$row;
		}
		return $array;
	}
	public function filed($opt=""){
		$sql=$opt?$opt:"*";
		$this->fileds["filed"]=$sql;
		return $this;
	}
}
$db=new db("stu");
var_dump($db->filed("name")->select("id=90"));
?>