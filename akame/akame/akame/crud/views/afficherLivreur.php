<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $sql = "SELECT * FROM `livreur` WHERE id_livreur LIKE '".$valueToSearch."%'"; 
    
}
 else {
    $sql = "SELECT * FROM `livreur`"; 
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: #E6E6FA;">
	<div class="button" style="position: fixed; left:900px; top:30px;"> 
    </div> 
     <form action="afficherLivreur.php" method="post" id="form2">
     	<input type="text" name="valueToSearch" placeholder="Value To Search" javascript="<SELECT onchange='$valueToSearch'>"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            <div class="button" style="position: fixed; left:900px; top:30px;"> 
   <input type="button" name="button" id="button" value="Ajouter livreur" onclick='location.href ="/projetweb%20(validation1)/livreur.html"' style="background-color: white;">
    </div> 

    <div class="button" style="position: fixed; left:900px; top:400px;"> 
   <input type="button" name="button" id="button" value="allez au livraison .." onclick='location.href ="/projetweb%20(validation1)/crud/views/afficherLivraison.php"' style="background-color: white;">
    </div> 
<table border="1" style="margin: 0 auto ; top: 100px ; position: fixed; width: 90%;left: 50px ;background-color: white;">
	<tr>
	<td>id_livreur</td>
	<td>nom</td>
	<td>prenom</td>
	<td>telephone</td>
	</tr>
</body>
</html>
	<?PHP
		include "../core/livreurC.php";
		$livreur1C=new LivreurC();
		$listeLivreur=$livreur1C->afficherLivreurs($sql);		
	foreach($listeLivreur as $row)
	{
	 ?>
		<tr >
		<td><?PHP echo $row['id_livreur']; ?></td>
		<td><?PHP echo $row['nom']; ?></td>
		<td><?PHP echo $row['prenom']; ?></td>
		<td><?PHP echo $row['tel_livreur']; ?></td>
		<td><form method="POST" action="supprimerLivreur.php">
	<input type="submit" name="supprimer" value="supprimer">
			<input type="hidden" value="<?PHP echo $row['id_livreur']; ?>" name="id_livreur">

	</form>
		<td><a target="_blank" href="modifierLivreur.php?id_livreur=<?PHP  echo $row['id_livreur']; ?>">
	Modifier</a></td>
		</tr>
	<?PHP
	}
	?> 
	</table>
