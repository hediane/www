<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/livraison.php";
include "../core/livraisonC.php";
if (isset($_GET['id_livraison'])){
	$livraisonC=new livraisonC();
    $result=$livraisonC->recupererLivraison($_GET['id_livraison']);
	foreach($result as $row){
		$id_livraison=$row['id_livraison'];
		$id_commande=$row['id_commande'];
		$id_livreur=$row['id_livreur'];
		$adresse=$row['adresse'];
		$num_tel=$row['num_tel'];
		$date=$row['date'];


?>
<form method="POST">
<table>
<caption>Modifier Livraison</caption>
<tr>
<td>id_commande</td>
<td><input type="number" name="id_commande"  value="<?PHP echo $id_commande ?>"></td>
</tr>
<tr>
<td>id_livreur</td>
<td><input type="number" name="id_livreur"  value="<?PHP echo $id_livreur ?>"></td>
</tr>
<tr>
<td>Adresse</td>
<td><input type="text" name="adresse" value="<?PHP echo $adresse ?>"></td>
</tr>
<tr>
<td>Telephone</td>
<td><input type="text" name="num_tel"  value="<?PHP echo $num_tel ?>"></td>
</tr>
<tr>
<td>Date</td>
<td><input type="date" name="date" value="<?PHP echo $date ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_livraison" value="<?PHP echo $_GET['id_livraison'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$livraison1 = new Livraison($_POST['adresse'],$_POST['date'],$_POST['num_tel'],$_POST['id_commande'],$_POST['id_livreur']);
	$livraisonC->modifierLivraison($livraison1,$_POST['id_livraison']);
	echo $_POST['id_livraison'];
	header('Location: afficherLivraison.php');
}
?>
</body>
</HTMl>