<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['id_commande'];
    // search in all table columns
    // using concat mysql function
    $sql = "SELECT * FROM `livraison` WHERE id_commande='".$valueToSearch."%'"; 
}
 else {
    $sql = "SELECT * FROM `livraison` WHERE id_commande=''";   
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Suivre les livraisons pas a pas</title>
</head>
<body>
	<form method="post" id="form">
	<div >
        <label for="id_commande">id_commande :</label>
        <input type="text" id ="id_commande" name="id_commande" maxlength="9" placeholder="Code id_commande" onblur="Controle(this.id)"> 
                    <input type="submit" name="search" value="Filter"><br><br>

    </div> 
	</form>
    <table border="1" style ="margin: 0 auto ; top: 90px ; position: fixed; left: px;width: 
100%; background-color: white;">
<tr>
<td>id_livraison</td>
<td>id_commande</td>
<td>adresse</td>
<td>date</td>
<td>suivre</td>
</tr>
</body>
</html>

<?php
	include "../core/livraisonC.php";
	$livraison1C=new livraisonC();
	$listeLivraison=$livraison1C->afficherLivraisons($sql);

		
foreach($listeLivraison as $row)
{
 ?>
	<tr>
	<td><?PHP echo $row['id_livraison']; ?></td>
	<td><?PHP echo $row['id_commande']; ?></td>
	<td><?PHP echo $row['adresse']; ?></td>
	<td><?PHP echo $row['date']; ?></td>
	</td>
	</tr>
<?PHP
}
?> 
</table>






