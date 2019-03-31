<?PHP
include "../core/livraisonC.php";
$livraisonC=new livraisonC();
if (isset($_POST["id_livraison"])){
	$livraisonC->supprimerLivraison($_POST["id_livraison"]);
	header('Location: afficherLivraison.php');
}

?>
