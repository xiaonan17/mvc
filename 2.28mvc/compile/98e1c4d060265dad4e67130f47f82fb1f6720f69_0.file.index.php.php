<?php
/* Smarty version 3.1.30, created on 2017-03-01 12:43:40
  from "C:\wamp\www\php\2.28mvc\index.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b6b3ec7707b7_91518962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98e1c4d060265dad4e67130f47f82fb1f6720f69' => 
    array (
      0 => 'C:\\wamp\\www\\php\\2.28mvc\\index.php',
      1 => 1488366368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b6b3ec7707b7_91518962 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>/*
 * 	单入口		安全
 	所有的页面都要从index.php进入
 	参数		可调配
 * 
 * 	$_GET["m"]->"模块";
 * 	$_GET["f"]->"方法";

 * */
	include "libs/db.class.php";
	include "libs/route.class.php";
//	$db=new db("stu");
//	var_dump($db->where("id=148")->filed("name=13")->update());
	$route=new route();
	$route->init();
<?php echo '?>';
}
}
