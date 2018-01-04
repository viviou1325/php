<?php
/* Smarty version 3.1.30, created on 2018-01-04 14:49:22
  from "/home/garcia/Bureau/github/php/application/vue/layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a4e30e26ca676_93963249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f1505a9679dd6eacd3eab3580b9dc149a7c59a7' => 
    array (
      0 => '/home/garcia/Bureau/github/php/application/vue/layout.tpl',
      1 => 1515062377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:application/vue/layout/layout_entete.inc.tpl' => 1,
    'file:application/vue/nav/nav.inc.tpl' => 1,
    'file:application/vue/layout/layout_pied.inc.tpl' => 1,
  ),
),false)) {
function content_5a4e30e26ca676_93963249 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>

<html lang=fr>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="./asset/CSS/style.css">
	</head>



	<body>
		<header>
			<?php $_smarty_tpl->_subTemplateRender("file:application/vue/layout/layout_entete.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		</header>

		<nav>
			<?php $_smarty_tpl->_subTemplateRender("file:application/vue/nav/nav.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		</nav>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5998060105a4e30e26c7107_37149825', 'body');
?>



		<footer>
			<?php $_smarty_tpl->_subTemplateRender("file:application/vue/layout/layout_pied.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		</footer>

	</body>

</html><?php }
/* {block 'body'} */
class Block_5998060105a4e30e26c7107_37149825 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
