{extends file='application/vue/layout.tpl'}

{block name="body"}

<form action="application/modele/inscription.inc.php" method="post">
	<p>
		login:
		<input type="text" name="login" size="35" />
	</p>

	<p>
		nom:
		<input type="text" name="last_name" size="35" /> 
	</p>

	<p>
		prenom:
		<input type="text" name="first_name" size="35" /> 
	</p>

	<p>
		e-mail :
		<input type="text" name="mail" size="35" />
	</p>

	<p>
		mot de passe:
		<input type="password" name="pwd" size="35" />
	</p>

	<p>
		confirmation du mot de passe:
		<input type="password" name="cfpwd" size="35" />
	</p>


	<input type="submit" name="send" value="Envoyer"/>
</form>

{/block}
