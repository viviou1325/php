<!DOCTYPE HTML>

<html lang=fr>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="./asset/CSS/style.css">
	</head>



	<body>
		<header>
			{include 'application/vue/layout/layout_entete.inc.tpl'}
		</header>

		<nav>
			{include 'application/vue/nav/nav.inc.tpl'}
		</nav>


		{block name=body}{/block}


		<footer>
			{include 'application/vue/layout/layout_pied.inc.tpl'}
		</footer>

	</body>

</html>