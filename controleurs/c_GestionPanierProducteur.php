<?php
if($_REQUEST['action'] == "Modifier")
{
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
}
elseif($_REQUEST['action'] == "Suprimer")
{
        if(!isset($_REQUEST['idProduit']))
        {
		$produits = get_produit($_REQUEST['idProduit']);
                $Verif =confirmer("Voulez Vous Supprimer ce Produit ?");
                if($Verif){
                    //supprimerArticle($_REQUEST['idProduit']);
                    include('vues/v_ValidationSupprimer.php');
                }else{
                        $produits = get_produit(0);
                        include('vues/v_gestionPanierProducteur.php');
                }   
	}
	
}elseif($_REQUEST['action'] == "Ajouter")
{
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
}
	
	
?>
