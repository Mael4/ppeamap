

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
	include('vues/v_ajoutProduit.php');

	include('vues/v_ajoutProduit.php');


        $categories=$_POST['categorie'];
	$libelle=$_POST['libelle'];
        $prix=$_POST['prix'];
        $qtt=$_POST['qtt'];
        $description=$_POST['description'];
        $id=$_SESSION['id'];
        global $bdd;
        $req = $bdd->prepare("INSERT INTO produit ( libelle, description, prixunitaire, quantite, id_utilisateur, id_categorie) VALUES ("."'"."$libelle"."'".","."'"."$description"."'".", $prix, $qtt, $id, $categories);");
      
              
           
         try{
        $req->execute();
       
         }
      
         catch(ErrorException $e){};

?>
