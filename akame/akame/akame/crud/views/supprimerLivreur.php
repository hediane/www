<?PHP
include "../core/livreurC.php";
$livreurC=new livreurC();
if (isset($_POST["id_livreur"])){
	$livreurC->supprimerLivreur($_POST["id_livreur"]);
	header('Location: afficherLivreur.php');
}

?>
