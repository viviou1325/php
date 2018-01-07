<?php

$erreur_login_co=0;
$erreur_mdp_co=0;

$data['err_log_co'] = $erreur_login_co;
$data['err_mdp_co'] = $erreur_mdp_co;


try
{

	$req_connect = $PDO_BDD->query('SELECT UTI_LOGIN, UTI_PASS
														FROM T_UTILISATEUR_UTI
														WHERE UTI_LOGIN = "'.$_POST['login_co'].'" and UTI_PASS = "'.$_POST['mdp_co']'"');
}

catch(Exception $e)
{
	die('Erreur: '.$e->getMessage().'<br/>');
}

if(empty($req_connect))
{

	$req_log = $PDO_BDD->query('SELECT UTI_LOGIN FROM T_UTILISATEUR_UTI WHERE UTI_LOGIN ='.$_POST['login_co']);

		if (empty($_POST['login_co']))
		{
			$data['err_log_co']=1;
		}
		else if(empty($req_log))
		{
			$data['err_log_co']=2;
		}



		if(empty($_POST['mdp_co']))
		{
			$data['err_mdp_co']=1;
		}
		else if(empty($req_connect) && !empty($req_log))
		{
			$data['err_mdp_co']=2;
		}
}

?>
