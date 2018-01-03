<?php
$user = array("Roux" => "Alexandre", "Garcia" => "Xavier");

	echo $alea[0]." ".$alea[1]." ".$alea[2].'<br>';

	while( list($key, $value) = each($user) )
	{
		echo $key." : ".$value.'<br>';
	}
?>