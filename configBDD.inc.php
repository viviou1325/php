<?php

define('DB_HOST', 'mysql-flack.alwaysdata.net');
define('DB_PORT', 3306);
define('DB_DATABASE', 'flack_php');
define('DB_USERNAME', 'flack');
define('DB_PASSWORD', 'Cookies');

//$PDO_BDD = new PDO('mysql:host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_DATABASE, DB_USERNAME, DB_PASSWORD);

try
{
	$PDO_BDD = new PDO('mysql:host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_DATABASE, DB_USERNAME, DB_PASSWORD);
	$PDO_BDD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$PDO_BDD->exec("SET NAMES 'utf8'");
}

catch(Exception $e)
{
	echo 'Erreur : '.$e->getMessage().'<br/>';
	echo 'No : '.$e->getCode();
	exit();
}

?>
