{extends file='application/vue/layout.tpl'}

{block name="body"}

<form action="" method="post">
<!-- <form action="" method="post"> -->
	<p>
		login:
		<input type="text" name="login" size="35" />
		{if $data['err_log'] == 1}
			<div class="erreur">Erreur: login non saisi</div>
		{/if}
	</p>

	<p>
		nom:
		<input type="text" name="nom" size="35" />
		{if $data['err_nom'] == 1}
			<div class="erreur">Erreur: nom non saisi</div>
		{/if}
	</p>

	<p>
		prenom:
		<input type="text" name="prenom" size="35" />
		{if $data['err_prenom'] == 1}
			<div class="erreur">Erreur: prenom non saisi</div>
		{/if}
	</p>

	<p>
		e-mail :
		<input type="text" name="mail" size="35" />
		{if $data['err_mail'] == 1}
			<div class="erreur">Erreur: email non saisi ou errone</div>
		{/if}
	</p>

	<p>
		mot de passe:
		<input type="password" name="mdp" size="35" />
		{if $data['err_mdp'] == 1}
			<div class="erreur">Erreur: mot de passe non saisi</div>
		{/if}
	</p>

	<p>
		confirmation du mot de passe:
		<input type="password" name="cmdp" size="35" />
		{if $data['err_cmdp'] == 1}
			<div class="erreur">Erreur: confirmation de mot de passe non saisie ou confirmation erronee</div>
		{/if}
	</p>


	<input type="submit" name="send" value="Envoyer"/>
</form>

{/block}
