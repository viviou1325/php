<?php  

$req_accueil = $PDO_BDD->query('SELECT * FROM T_CATEGORIE_CAT');

$aff_req = $req_accueil->fetchAll(PDO::FETCH_ASSOC);

foreach($aff_req as $line)
{
  echo '<h2>'.$line['CAT_LABEL'].'</h2> <br/> <img src="media/categorie/'.$line['CAT_ILLUSTRATION'].'">';
}
?>
