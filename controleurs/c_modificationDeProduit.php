<?php
$categories = get_categ();
	
	if (!isset($_REQUEST['categ']))
	{
		$produits = get_produit(0);
	}
	
	else
	{
		$produits = get_produit($_REQUEST['categ']);
	}
	include('vues/v_modificationDeProduit.php');


	$libelle=$_POST['libelle'];
        $prix=$_POST['prix'];
        $qtt=$_POST['qtt'];
        $description=$_POST['description'];
        $id=$_POST['id'];
         global $bdd;
        $req = $bdd->prepare("UPDATE produit SET libelle='".$libelle."',
                                             prixunitaire=".$prix.",
                                             quantite=".$qtt.",
                                             description='".$description."'
                                             WHERE id=".$id."");
      
              
           
         try{
        $req->execute();
       
         }
      
         catch(ErrorException $e){};

?>

