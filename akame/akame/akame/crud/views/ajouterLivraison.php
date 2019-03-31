<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style ="background-color: #E6E6FA">
	<div style="background-color: 	#708090; ">
  
       <p style="text-align: center; left: 700px; font-size: 50px;" >l'ajout de la livraison ce fait avec succé <br>
       	si vous pouvez afficher le table des livraison clique sur ce lien  <a href="/projetweb%20(validation1)/crud/views/afficherLivraison.php"> ici</a><br> 
       si vous pouvez ajouter une autre livraison clique sur ce lien <a href="/projetweb%20(validation1)/livraison.html">ici</a></p>






		<?php
			include "../entities/livraison.php";
			include "../core/livraisonC.php";

			if (isset($_POST['Livreur']) and isset($_POST['Commande']) and isset($_POST['Adresse']) and isset($_POST['Numero']) and isset($_POST['Date']))
			{
				$livraison1 = new Livraison($_POST['Adresse'],$_POST['Date'],$_POST['Numero'],$_POST['Commande'],$_POST['Livreur']);
				$livraison1C=new LivraisonC();
				$livraison1C->ajouterLivraison($livraison1);
				//echo '<a href="../../livraison.html"><input type="button" name="Button" value="page li wrana"<a>';
			}
			else
			{
				echo  "vérifier les champs";
			}

		?>
	</div>
</body>
</html>
