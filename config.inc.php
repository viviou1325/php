<?php
	//$_PAGES=array("HOME_PAGE" => "./index.php");
	//Go cours php chap5 pages 47~50


  define('DB_HOST', 'mysql-flack.alwaysdata.net');
  define('DB_PORT', '3307');
  define('DB_NAME', 'flack_php');
  define('DB_USER', 'flack');
  define('DB_PWD', 'Cookies');

  try
  {
    $PDO_BDD = new PDO('mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PWD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  }
  catch(Exception $e)
  {
        echo 'Error : ' . $e->getMessage() . '<br />';
        echo 'N° : ' . $e->getCode();
        exit();
  }



//$BDD = mysql_connect("mysql-flack.alwaysdata.net", "flack", "Cookies") or die("Erreur: ".mysql_error());

$PAGES = array( 'accueil' => 'accueil', 'connexion'=> 'connexion', 'inscription'=>'inscription', 'profil'=>'profil' , 'recette_detail'=>'recette_detail', 'recette_liste'=>'recette_liste');

$HOME_PAGE = 'accueil';
$ERROR_404 = 'accueil';
?>
	
