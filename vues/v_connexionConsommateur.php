<div class='form-group'>
	
		<form method='get' action='controleurs/c_verifConnexion.php'>
			<label for='login_consommateur'>Login</label>
			<input name='login_consommateur' id='login_consommateur' type='text' class='form-control' size='30' maxlength='45' />
			
			<label for='mdp_consommateur'>Mot de passe</label>
			<input name='mdp_consommateur' id='mdp_consommateur' class='form-control' type='password' value='' size='30' maxlength='45' />
			
			<input type='submit' value='Valider' class='btn btn-primary'>
			<input type='reset' value='Annuler' class='btn btn-primary'>
		</form>
		</br>
		<p>Pas de compte consommateur ?</p>
		<a id='inscription_consommateur' href='index.php?uc=connexionConsommateur&action=formInscription'>Cliquez ici!</a>
		</br>
		<!-- A FAIRE
		<a href="index.php?uc=connexionConsommateur&action=formInscription">Mot de passe oublié ?</a>
		-->

		</div>