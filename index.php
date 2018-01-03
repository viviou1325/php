<?php
	require_once('./application/libraries/smarty-3.1.30/libs/Smarty.class.php');

	$smarty = new smarty;

	//$smarty->display("./application/vue/layout.tpl");
	$smarty->display("./application/vue/modules/accueil.tpl");

?>