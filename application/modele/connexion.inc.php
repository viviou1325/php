<?php

$erreur_login=0;
$erreur_mdp=0;

$data['err_log'] = $erreur_login;
$data['err_mdp'] = $erreur_mdp;


if(isset($_REQUEST['send']))
	{
		print_r( $_REQUEST);
	

		if ($_REQUEST['login'] != /********/))
			{
				$data['err_log']=1;
			}
		if ($_REQUEST['mdp'] !=/********/))
			{
				$data['err_log']=1;
			}
	}
?>
