<?php
	
	if (!isset($_REQUEST['idUtilisateur']) || !isset($_REQUEST['action']))
	{
		include('vues/v_accueil.php');
	}
	
	elseif($_REQUEST['action']=='Modifier')
	{
		$utilisateurs = get_unUtilisateur($_REQUEST['idUtilisateur']);
                include('vues/v_ModifierUtilisateur.php');
        }elseif($_REQUEST['action']=='Supprimer'){
            $utilisateurs = get_unUtilisateur($_REQUEST['idUtilisateur']);
            include('vues/v_SupprimerUtilisateur.php');
        }
	
	
?>
