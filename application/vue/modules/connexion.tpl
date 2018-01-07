{extends file='application/vue/layout.tpl'}

{block name="body"}

	<form action="" method="post">
		<p>
			login:
			<input type="text" name="login_co" size="35" />
			{if $data['err_log_co'] == 1}
				<div class="erreur">Erreur: login non saisi</div>
			{elseif $data['err_log_co'] == 2}
				<div class="erreur">Erreur: login incorrect</div>
			{/if}
		</p>
	
		<p>
			mot de passe:
			<input type="password" name="mdp_co" size="35" />
			{if $data['err_mdp_co'] == 1}
				<div class="erreur">Erreur: mot de passe non saisi</div>
			{elseif $data['err_mdp_co'] == 2}
				<div class="erreur">Erreur: mot de passe incorrect</div>
			{/if}
		</p>
	
		<input type="submit" name="send_co" value="Envoyer"/>
	</form>
		
{/block}
