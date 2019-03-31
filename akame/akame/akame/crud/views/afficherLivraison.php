<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $sql = "SELECT * FROM `livraison` WHERE id_livraison LIKE '%".$valueToSearch."%'"; 
    
}
 else {
    $sql = "SELECT * FROM `livraison`";
}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript"></script>
</head>
<body style="background-color: #E6E6FA;">
<div style="position: fixed;left: 500px;top:10px;left: 300px">

</div>  
<div class="button" style="position: fixed; left:900px; top:30px;"> 
   <input type="button" name="button" id="button" value="Ajouter livraison" onclick='location.href ="/projetweb%20(validation1)/livraison.html"' style="background-color: white;">
    </div> 
    <div class="button" style="position: fixed; left:1200px; top:20px;"> 
   <input type="button" name="button" id="button" value="Afficher livreur" onclick='location.href ="/projetweb%20(validation1)/crud/views/afficherLivreur.php"' style="background-color: white;">
    </div> 
  <a href="../../pdf.php" style="position: fixed;top:550px;left: 1000px"> conversion les livraisons a une page PDF ..</a>

 	  <form action="afficherLivraison.php" method="post" id="form">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
<table border="1" style ="margin: 0 auto ; top: 90px ; position: fixed; left: px;width: 
100%; background-color: white;">
<tr>
<td>id_livraison</td>
<td>id_commande</td>
<td>id_livreur</td>
<td>adresse</td>
<td>num_tel</td>
<td>date</td>
<td>supprimer</td>
<td>modifier</td>
</tr>
</body>
</html>



<?PHP
	include "../core/livraisonC.php";
	$livraison1C=new livraisonC();
	$listeLivraison=$livraison1C->afficherLivraisons($sql);
	
		
foreach($listeLivraison as $row)
{
 ?>
	<tr >
	<td><?PHP echo $row['id_livraison']; ?></td>
	<td><?PHP echo $row['id_commande']; ?></td>
	<td><?PHP echo $row['id_livreur']; ?></td>
	<td><?PHP echo $row['adresse']; ?></td>
	<td><?PHP echo $row['num_tel']; ?></td>
	<td><?PHP echo $row['date']; ?></td>
	<td><form method="POST" action="supprimerLivraison.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id_livraison']; ?>" name="id_livraison">
	</form>
	</td>
	<td><a target="_blank" href="modifierLivraison.php?id_livraison=<?PHP  echo $row['id_livraison']; ?>">
	Modifier</a></td>
	</tr>
<?PHP
}
?> 
</table>
