<?php
if ($_REQUEST['action'] == "modif" && isset($_REQUEST['idUtilisateur']))
{
        
	$id = $_POST['id_util'];
	$nom_util = $_POST['nom_util'];
	$prenom_util = $_POST['prenom_util'];
	$adresse_util = $_POST['adresse_util'];
	$mail_util = $_POST['mail_util'];
	$tel_util = $_POST['tel_util'];
	$cp_util = $_POST['cp_util'];
	$ville_util = $_POST['ville_util'];
	$login_util = $_POST['login_util'];
	
        $change_param = set_param_utilisateur($id, $nom_util, $prenom_util, $adresse_util, $mail_util, $tel_util, $cp_util, $ville_util, $login_util);
		if ($change_param == true)
		{
			echo "Modification Compte Utilisateur ok";
		}
		header('Location: index.php?uc=ModifierUtilisateur&action=voir');
}

elseif ($_REQUEST['action'] == "voir")
{
        $utilisateurs = get_unUtilisateur($_REQUEST['idUtilisateur']);
	include("vues/v_ModifierUtilisateur.php");
}