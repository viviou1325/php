<?php
/* Smarty version 3.1.30, created on 2018-01-03 17:21:03
  from "/home/garcia/Bureau/wat/application/vue/layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4d02efedccb0_90537639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16b1bdb1a774b04d971b7ef6f4fc04dca0a38e37' => 
    array (
      0 => '/home/garcia/Bureau/wat/application/vue/layout.tpl',
      1 => 1513151332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./layout/layout_entete.inc.tpl' => 1,
    'file:./nav/nav.inc.tpl' => 1,
    'file:./layout/layout_pied.inc.tpl' => 1,
  ),
),false)) {
function content_5a4d02efedccb0_90537639 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>

<html lang=fr>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="./asset/CSS/style.css">
	</head>



	<body>
		<header>
			<?php $_smarty_tpl->_subTemplateRender("file:./layout/layout_entete.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		</header>

		<nav>
			<?php $_smarty_tpl->_subTemplateRender("file:./nav/nav.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		</nav>

		<footer>
			<?php $_smarty_tpl->_subTemplateRender("file:./layout/layout_pied.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		</footer>

	</body>

</html><?php }
}
