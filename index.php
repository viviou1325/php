<?php
	require_once('application/libraries/smarty-3.1.30/libs/Smarty.class.php');

	///$smarty = new smarty;

	//$smarty->display("./application/vue/layout.tpl");
	///$smarty->display("./application/vue/modules/accueil.tpl");
	
	require_once('config.inc.php');

    //include("configBDD.inc.php");
    //include 'configBDD.inc.php';
    //require_once('./application/librairies/smarty-3.1.30/libs/Smarty.class.php');

    $data = array();

    $current_page = $PAGES[$_GET['page']];

    /*
    if (!in_array($current_page, $PAGES)) 
	{
       	if ($current_page=='') 
		{
           	 $current_page=$HOME_PAGE;
        }
    }
    /*
	else 
		{
            echo 'Erreur 404';
            //$current_page=$ERROR_404;
        }
	*/

    if(empty($_GET['page']))
    	header('Location: ?page=accueil');



    require_once("application/modele/".$current_page.".inc.php");

    $smarty = new Smarty();
    $smarty->caching = 0;
    $smarty->setTemplateDir('application/views/');
    foreach ($data as $key => $value) {
        $smarty->assign($key, $value);
    }
    $smarty->assign('data', $data);
    $smarty->assign('PDO_BDD', $PDO_BDD);
    //$smarty->display("application/vue/".$current_page.".tpl");
    $smarty->display("application/vue/modules/".$current_page.".tpl");
    print_r($req_connect);

?>
