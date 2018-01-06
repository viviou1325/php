<?php

include '../../configBDD.inc.php';
	$erreur_login=0;
	$erreur_nom=0;
	$erreur_prenom=0;
	$erreur_mail=0;
	$erreur_mdp=0;
	$erreur_cmdp=0;

	$data['err_log'] = $erreur_login;
	$data['err_nom'] = $erreur_nom;
	$data['err_prenom'] = $erreur_prenom;
	$data['err_mail'] = $erreur_mail;
	$data['err_mdp'] = $erreur_mdp;
	$data['err_cmdp'] = $erreur_cmdp;
			/*if
			(
				isset($_REQUEST['send']) && (!empty($_REQUEST['login'])) &&
				(!empty($_REQUEST['last_name'])) &&
				(!empty($_REQUEST['first_name'])) &&
				(!empty($_REQUEST['mail']) && filter_var($_REQUEST['mail'], FILTER_VALIDATE_EMAIL) ) &&
				(!empty($_REQUEST['pwd'])) &&
				($_REQUEST['cfpwd'] == $_REQUEST['pwd'])
			)*/
			if(isset($_REQUEST['send']) && (empty($_REQUEST['login'])))
			{
				$data['err_log']=1;
			}
			if(isset($_REQUEST['send']) && (empty($_REQUEST['nom'])))
			{
				$data['err_nom']=1;
			}
			if(isset($_REQUEST['send']) && (empty($_REQUEST['prenom'])))
			{
				$data['err_prenom']=1;
			}
			if(isset($_REQUEST['send']) && ((empty($_REQUEST['mail'])) || !filter_var($_REQUEST['mail'])))
			{
				$data['err_mail']=1;
			}
			if(isset($_REQUEST['send']) && (empty($_REQUEST['mdp'])))
			{
				$data['err_mdp']=1;
			}
			if($_REQUEST['cmdp'] != $_REQUEST['mdp'] || isset($_REQUEST['send']) && (empty($_REQUEST['mdp'])) )
			{
				$data['err_cmdp']=1;
			}
			
			if(isset($_REQUEST['login']) && isset($_REQUEST['nom']) && isset($_REQUEST['prenom']) && isset($_REQUEST['mail']) && isset($_REQUEST['mdp']) && isset($_REQUEST['cmdp']))
			{
				echo 'Debut';		
				try
				{
					echo 'plop';

					$plop = $PDO_BDD->prepare('INSERT INTO T_UTILISATEUR_UTI(UTI_LOGIN, UTI_MAIL, UTI_NOM, UTI_PRENOM, UTI_PASS, UTI_ADMIN, UTI_AVATAR)
							VALUES(:uti_login, :uti_mail, :uti_nom, :uti_prenom, :uti_mdp, :uti_admin, :uti_avatar)');

					echo 'plop2';

					$plop->execute(array(
						'uti_login' => $_REQUEST['login'],
						'uti_mail' => $_REQUEST['mail'],
						'uti_nom' => $_REQUEST['nom'],
						'uti_prenom' => $_REQUEST['prenom'],
						'uti_mdp' => $_REQUEST['mdp'],
						'uti_admin' => 'DEFAULT',
						'uti_avatar' => 'DEFAULT'));

					echo 'plop3';
				}

				//echo 'Milieu';

				catch(Exception $e)
				{
					die('Erreur: '.$e->getMessage().'<br/>');
				}

				//echo 'Fin';
			}
	//echo $_POST['login'];
?>