<?php
	if (isset($_SESSION['id']))//si co
	{
		//si panier vide
		if (count($_SESSION['panier']['libelleProduit']) <= 0)
		{
			echo "panier vide";
		}
		else
		{
			$client = $_SESSION['nom']." ".$_SESSION['prenom'];
			$adresse = $_SESSION['adresse']." ".$_SESSION['codepostal']." ".$_SESSION['ville'];
		
			$testProduits = true;
			//pour chaque produit, verifier si sa qte est <= a celle en bdd
			for ($i=0 ;$i < count($_SESSION['panier']['libelleProduit']) && $testProduits==true; $i++)
			{
				$libelle = $_SESSION['panier']['libelleProduit'][$i];
				$qte = $_SESSION['panier']['qteProduit'][$i];
				
				$testProduits = verifQteProduit($libelle, $qte);
			}
			
			if ($testProduits == true)//si tous les produits OK
			{
				$idLivraison = nouvLivraison($_SESSION['id']);//creer la nouvelle livraison et recupere son id
				
				
				$nbArticles = compterArticles();
				for ($i=0 ;$i < $nbArticles ; $i++)//pour chaque article du panier
				{
					$montantTotal = $_SESSION['panier']['qteProduit'][$i] * $_SESSION['panier']['prixProduit'][$i];
					$quantiteProd = $_SESSION['panier']['qteProduit'][$i];
					$idProduit = $_SESSION['panier']['idProduit'][$i];
					
					nouvColis($montantTotal, $idLivraison, $quantiteProd, $idProduit);
				}
				
				echo "livraison OK";
			}
			else
			{
				echo "erreur de tes morts!";
				//erreur qte produit
				
			}
		}
		
	}
	else
	{
		//echo "pas co :(";
	}