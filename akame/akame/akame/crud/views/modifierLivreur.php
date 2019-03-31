<HTML>
<head>
</head>
<body>
<?php
include "../entities/livreur.php";
include "../core/livreurC.php";
if (isset($_GET['id_livreur'])){
	$livreurC=new livreurC();
    $result=$livreurC->recupererLivreur($_GET['id_livreur']);
	foreach($result as $row){
		$id_livreur=$row['id_livreur'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$tel_livreur=$row['tel_livreur'];

?>
<form method="POST">
<table>
<caption>Modifier Livreur</caption>
<tr>
<td>nom</td>
<td><input type="text" name="nom"  value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>prenom</td>
<td><input type="text" name="prenom"  value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>telephone</td>
<td><input type="number" name="tel_livreur" value="<?PHP echo $tel_livreur ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_livreur" value="<?PHP echo $_GET['id_livreur'];?>"></td>
</tr>
</table>
</form>
<?PHP
}
}
if (isset($_POST['modifier'])){
	$livreur1 = new Livreur($_POST['nom'],$_POST['prenom'],$_POST['tel_livreur']);
	$livreurC->modifierLivreur($livreur1,$_POST['id_livreur']);
	echo $_POST['id_livreur'];
	header('Location: afficherLivreur.php');
}
?>
</body>
</HTMl>