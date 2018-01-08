<?php

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
			
			if(!empty($_REQUEST['login']) && !empty($_REQUEST['nom']) && !empty($_REQUEST['prenom']) && !empty($_REQUEST['mail']) && !empty($_REQUEST['mdp']) && !empty($_REQUEST['cmdp']))
			{
				
				echo 'Debut';

				
				try
				{

					$plop = $PDO_BDD->prepare('INSERT INTO T_UTILISATEUR_UTI(UTI_LOGIN, UTI_MAIL, UTI_NOM, UTI_PRENOM, UTI_PASS, UTI_ADMIN, UTI_AVATAR)
							VALUES(:uti_login, :uti_mail, :uti_nom, :uti_prenom, :uti_mdp, :uti_admin, :uti_avatar)');


					$plop->execute(array(
						'uti_login' => $_POST['login'],
						'uti_mail' => $_POST['mail'],
						'uti_nom' => $_POST['nom'],
						'uti_prenom' => $_POST['prenom'],
						'uti_mdp' => $_POST['mdp'],
						'uti_admin' => "DEFAULT",
						'uti_avatar' => "DEFAULT"));
				}
				

				//$pouet = $PDO_BDD->exec("INSERT INTO T_CATEGORIE_CAT VALUES('1', 'test', 'jesuisuntest', 'test.jpg'");

				//echo $pouet;


				
				catch(Exception $e)
				{
					die('Erreur: '.$e->getMessage().'<br/>');
				}

				//echo isset($PDO_BDD);

				//un commentaire en plus pour test
				
				//$defo = "DEFAULT";

				/*$req = 'INSET INTO T_UTILISATEUR_UTI
						(UTI_LOGIN, UTI_MAIL, UTI_NOM, UTI_PRENOM, UTI_PASS, UTI_ADMIN, UTI_AVATAR)
						VALUES
						("'.$_POST['login'].'","'.$_POST['mail'].'","'.$_POST['nom'].'","'.$_POST['prenom'].'","'.$_POST['mdp'].'","'.$defo.'","'.$defo.'");';

				$resultat=mysql_query($req) or die('Erreur'.__LINE__.':'.mysql_error());
				*/


				echo 'Fin';


				header('Location: ?page=connexion');
			}
?>
