<?php
include "../config.php";

class LivraisonC
{
	function ajouterLivraison($livraison){
		$sql="insert into livraison (id_livraison,id_livreur,id_commande,adresse,num_tel,date) values (:id_livraison,:id_livreur,:id_commande,:adresse,:num_tel,:date)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id_livraison=$livraison->getId();
        $id_livreur=$livraison->getIdL();
        $id_commande=$livraison->getIdC();
        $adresse=$livraison->getAdresse();
        $num_tel=$livraison->getNumTel();
 	    $date=$livraison->getDate();

		$req->bindValue(':id_livraison',$id_livraison);
		$req->bindValue(':id_livreur',$id_livreur);
		$req->bindValue(':id_commande',$id_commande);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':num_tel',$num_tel);
		$req->bindValue(':date',$date);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

function afficherLivraison ($livraison){
		echo "id_livraison: ".$livraison->getId()."<br>";
		echo "id_commande: ".$livraison->getIdC()."<br>";
		echo "id_livreur: ".$livraison->getIdL()."<br>";
		echo "adresse: ".$livraison->getAdresse()."<br>";
		echo "num_tel: ".$livraison->getNumTel()."<br>";
		echo "date: ".$livraison->getDate()."<br>";

	}
//badalt fil fonction afficher radit feha parametre howa il requet w ba3ed ken kteb haja ya3mel il select ( recherche ) 3al haja heki w ken mafamachay fil parametre ta3mel select lil kol ( taffichi kolchy ( il kol ) )  :3 kifch nrodouha avancé nzido il javascript :p belehy wala la7dha
	function afficherLivraisons($sql){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		} //< aaa dacc  esma recherch chneya nzid fiha hethi kenet ne9sa 
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
function supprimerLivraison($idL){
		$sql="DELETE From livraison where id_livraison= :id_livraison";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_livraison',$idL);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

function recupererLivraison($id_livraison){
		$sql="SELECT * from livraison where id_livraison=$id_livraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

function modifierLivraison($livraison,$id_livraison){
		$sql="UPDATE livraison SET id_commande=:id_commande, id_livreur=:id_livreur, adresse=:adresse, num_tel=:num_tel, date=:date WHERE id_livraison=$id_livraison";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
	try{		
        $req=$db->prepare($sql);
		$id_commande=$livraison->getIdC();
        $id_livreur=$livraison->getIdL();
        $adresse=$livraison->getAdresse();
        $num_tel=$livraison->getNumTel();
        $date=$livraison->getDate();
		$datas = array(':id_commande'=>$id_commande, ':id_livreur'=>$id_livreur, ':adresse'=>$adresse,':num_tel'=>$num_tel,':date'=>$date);
		$req->bindValue(':id_commande',$id_commande);
		$req->bindValue(':id_livreur',$id_livreur);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':num_tel',$num_tel);
		$req->bindValue(':date',$date);		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   			echo " Les datas : " ;
  			print_r($datas);
        }

    }
/*function rechercherListeLivraisons()
{
			if(isset($_POST['search']))
	{
	    $valueToSearch = $_POST['valueToSearch'];
	    // search in all table columns
	    // using concat mysql function
	    $query = "SELECT * FROM `livraison` WHERE id_livraison LIKE '%".$valueToSearch."%'";
	    $search_result = filterTable($query);
	    
	}
	 else {
	    $query = "SELECT * FROM `livraison`";
	    $search_result = filterTable($query);
	}
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}*/

        
    

}
















?>