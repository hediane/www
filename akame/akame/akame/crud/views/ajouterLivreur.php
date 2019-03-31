<?php
			include "../entities/livreur.php";
			include "../core/livreurC.php";

			if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['Numero']))
			{
				$livreur1 = new Livreur($_POST['nom'],$_POST['prenom'],$_POST['Numero']);
				$livreur1C=new LivreurC();
				$livreur1C->ajouterLivreur($livreur1);
				header('Location: afficherLivreur.php');
				//echo '<a href="../../livraison.html"><input type="button" name="Button" value="page li wrana"<a>';
			}
			else
			{
				echo  "vérifier les champs";
			}

		?>