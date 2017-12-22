<?php
	$categories = get_categ();
	
	if (!isset($_REQUEST['idProduit']))
	{
		$produits = get_produit(0);
	}
	
	else
	{
		$produits = get_unProduit($_REQUEST['idProduit']);
	}
	include('vues/v_gestionPanierProducteur.php');
	
?>
