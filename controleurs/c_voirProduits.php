<?php
	$categories = get_categ();
	
	if (!isset($_REQUEST['categ']))
	{
		$produits = get_Utilisateur(0);
	}
	
	else
	{
		$produits = get_produit($_REQUEST['categ']);
	}
	include('vues/v_voirUtilisateur.php');
	
?>