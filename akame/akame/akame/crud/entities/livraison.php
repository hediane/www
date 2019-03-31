<?php
class Livraison
{
	private $id_livraison;
	private $adresse_livraison ;
	private $date_livraison;
	private $num_tel_client;
	private $id_commande;
	private $id_livreur;
	function __construct($adr,$dat,$numt,$id_cmd,$id_l)
	{
	$this->id_livraison= 0;
	$this->adresse_livraison=$adr;
	$this->date_livraison=$dat;
	$this->num_tel_client=$numt;
	$this->id_commande=$id_cmd;
	$this->id_livreur=$id_l;

	}

function getId()
{
	return $this->id_livraison;
}
function getAdresse()
{
	return $this->adresse_livraison;
}
function getDate()
{
	return $this->date_livraison;
}
function getNumTel()
{
	return $this->num_tel_client;
}
function getIdC()
{
	return $this->id_commande;
}
function getIdL()
{
	return $this->id_livreur;
}
function setId($id)
{
	$this->id_livraison=$id;
}
function setAdresse($adresse)
{
	$this->adresse_livraison=$adresse;
}
function setDate($date)
{
	$this->date_livraison=$date;
}
function setNumTel($numero)
{
	$this->num_tel_client=$numero;
}

function setIdC($idC)
{
	$this->id_commande=$idC;
}
function setIdL($idL)
{
	$this->id_livreur=$idL;
}

}







?>
