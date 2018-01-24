<?php
$categories = get_categ();
$test=0;
	if (!isset($_REQUEST['categ']))
	{
		$produits = get_produit(0);
	}
	
	else
	{
		$produits = get_produit($_REQUEST['categ']);
	}
	
  if ($_FILES['input-file-preview']['error'] > 0) $erreur = "Erreur lors du transfert";
//récupération des variables
        $nomImg=$_FILES['input-file-preview']['name'] ;
         var_dump($nomImg);
        $tailleImg= $_FILES['input-file-preview']['size'] ;
	$libelle=$_POST['libelle'];
        $prix=$_POST['prix'];
        $qtt=$_POST['qtt'];
        $description=$_POST['description'];
        $id=$_POST['id'];
        $extension_upload =   substr(  strrchr($_FILES['input-file-preview']['name'], '.')  ,1)  ;
        
        if($nomImg!=''){
        
        try{
        $nomImgModifie = md5(uniqid(rand(), true));
        $cheminImg = "img/produits/{$nomImgModifie}.{$extension_upload}";
   
        $resultat = move_uploaded_file($_FILES['input-file-preview']['tmp_name'],$cheminImg);
        }catch(ErrorException $e){
        }
    
   
         global $bdd;
        $req = $bdd->prepare("UPDATE produit SET libelle='".$libelle."',
                                             prixunitaire=".$prix.",
                                             quantite=".$qtt.",
                                             nom_image='".$nomImgModifie."',
                                             description='".$description."'
                                             WHERE id=".$id."");
   
              
           
         try{
        $req->execute();
       
         }
      
         catch(ErrorException $e){}
          }
          else{
                       global $bdd;
        $req = $bdd->prepare("UPDATE produit SET libelle='".$libelle."',
                                             prixunitaire=".$prix.",
                                             quantite=".$qtt.",
                                             description='".$description."'
                                             WHERE id=".$id."");
   
              
           
         try{
        $req->execute();
       
         }
      
         catch(ErrorException $e){}
          }
      
	include('vues/v_modificationDeProduit.php');
     
?>
