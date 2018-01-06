<?php
	$plop=0;
			if
			(
				isset($_REQUEST['send']) && (!empty($_REQUEST['login'])) &&
				(!empty($_REQUEST['last_name'])) &&
				(!empty($_REQUEST['first_name'])) &&
				(!empty($_REQUEST['mail']) && filter_var($_REQUEST['mail'], FILTER_VALIDATE_EMAIL) ) &&
				(!empty($_REQUEST['pwd'])) &&
				($_REQUEST['cfpwd'] == $_REQUEST['pwd'])
			)
			{
				$plop=0;
				echo 'ploup';
			}
			else
			{
				$plop=1;

				echo 'plop';
			}
	//echo $_POST['login'];
?>