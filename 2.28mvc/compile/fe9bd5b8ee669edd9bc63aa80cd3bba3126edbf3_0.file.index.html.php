<?php
/* Smarty version 3.1.30, created on 2017-03-02 05:14:59
  from "C:\wamp\www\php\2.28mvc\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b79c4362a6d3_90053233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe9bd5b8ee669edd9bc63aa80cd3bba3126edbf3' => 
    array (
      0 => 'C:\\wamp\\www\\php\\2.28mvc\\template\\index\\index.html',
      1 => 1488427984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b79c4362a6d3_90053233 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index.css"/>
	<body>
		<h1>这是前台</h1>
		<ul>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
			<li><?php echo $_smarty_tpl->tpl_vars['v']->value["id"];?>
</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</ul>
	</body>
</html>
<?php }
}
