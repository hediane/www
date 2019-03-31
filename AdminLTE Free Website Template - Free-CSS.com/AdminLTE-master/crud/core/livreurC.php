
<?php
include "../config.php";
class LivreurC
{
	function afficherLivreur ($livreur)
	{
			echo "id_livreur: ".$livreur->getId()."<br>";
			echo "nom: ".$livraison->getNom()."<br>";
			echo "prenom: ".$livraison->getPrenom()."<br>";
			echo "Telephone: ".$livraison->getTel()."<br>";
			

		}
function afficherLivreurs($sql)
{
		
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		} //< aaa dacc  esma recherch chneya nzid fiha hethi kenet ne9sa 
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        
        }
   }

       function ajouterLivreur($livreur)
       {
		$sql="insert into livreur (id_livreur,nom,prenom,tel_livreur) values (:id_livreur,:nom,:prenom,:tel_livreur)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_livreur=$livreur->getId();
        $nom=$livreur->getNom();
        $prenom=$livreur->getPrenom();
        $tel_livreur=$livreur->getTel();
		$req->bindValue(':id_livreur',$id_livreur);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':tel_livreur',$tel_livreur);
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function modifierLivreur($livreur,$id_livreur){
		$sql="UPDATE livreur SET nom=:nom, prenom=:prenom, tel_livreur=:tel_livreur WHERE id_livreur=$id_livreur";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
	try{		
        $req=$db->prepare($sql);
        $nom=$livreur->getNom();
        $prenom=$livreur->getPrenom(); 
        $tel_livreur=$livreur->getTel();
		$datas = array(':nom'=>$nom, ':prenom'=>$prenom, ':tel_livreur'=>$tel_livreur );
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':tel_livreur',$tel_livreur);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   			echo " Les datas : " ;
  			print_r($datas);
        }

    }
    function recupererLivreur($id_livreur)
    {
		$sql="SELECT * from livreur where id_livreur=$id_livreur";
		$db = config::getConnexion();
		try
		{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }

function supprimerLivreur($idL)
{
		$sql="DELETE From livreur where id_livreur= :id_livreur";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_livreur',$idL);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
}

?>