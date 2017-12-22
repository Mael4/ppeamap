<div class="col-sm-10 col-xs-12">
			<?php
                                if (!isset($_SESSION['id_Type_producteur'])) {
					
				echo "<div class='col-12 col-sm-10 well'>						
                                                        <form method='post' action='index.php?uc=voirProduitsProducteur'>
                                                                                <p>Le Produit à bien été supprimer, Cliquez sur retour pour revenir à la Liste des Produits<p>
										<input type='submit' class='form-control input-sm' value='Retour'></input>
									</form>
								</div>
							</div>
					</div>";
					
				}
                                
                                
			?>
			
		  </div>

