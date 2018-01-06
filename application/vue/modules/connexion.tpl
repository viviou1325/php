{extends file='application/vue/layout.tpl'}

{block name="body"}


	<form action="" method="post">
		<p>
			login:
			<input type="text" name="login" size="35" />
			{if $data['err_log'] == 1}
				<div class="erreur">Erreur: login pas bien</div>
			{/if}
			
		</p>
	
		<p>
			mot de passe:
			<input type="password" name="mdp" size="35" />
			{if $data['err_mdp'] == 1}
				<div class="erreur">Erreur: mot de passe pas bien</div>
			{/if}
		</p>
	
		<input type="submit" name="send" value="Envoyer"/>
	</form>
		
{/block}
