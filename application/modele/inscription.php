{block name=body}
		<?php
			if
			(
				isset($_REQUEST['send']) && (!empty($_REQUEST['login'])) &&
				(!empty($_REQUEST['last_name'])) &&
				(!empty($_REQUEST['first_name'])) &&
				(!empty($_REQUEST['mail']) && filter_var($_REQUEST['mail'], FILTER_VALIDATE_EMAIL) ) &&
				(!empty($_REQUEST['pwd'])) &&
				($_REQUEST['cfpwd'] == $_REQUEST['pwd'])

			)
			{
				echo"
					<p>Votre login est ".$_REQUEST['login']."</p>
					<p>Votre nom est ".$_REQUEST['last_name']."</p>
					<p>Votre prenom est ".$_REQUEST['first_name']."</p>
					<p>Votre mail est ".$_REQUEST['mail']."</p>
					<p>Votre mot de passe est ".$_REQUEST['pwd']."</p>
				";
			}
			else
			{
				echo'<form action="inscription.php" method="post">
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
							
							<input type="password" name="cfpwd" size="35" />';

							//if(!empty($_REQUEST ['cfpassword']))
							//	echo 'Mot de passe non confirmé';
					echo'</p>


						<input type="submit" name="send" value="Envoyer"/>
					</form>';
			}
		?>
{/block}