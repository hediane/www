<?php

class Livreur
{
	private $id_livreur;
	private $nom;
	private $prenom;
	private $num_tel_livreur;
	function __construct($nom,$prenom,$numt)
	{
		$this->id_livreur=0;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->num_tel_livreur=$numt;
	}

	function getId()
	{
		return $this->id_livreur;
	}
	function getNom()
	{
		return $this->nom;
	}
	function getPrenom()
	{
		return $this->prenom;
	}
	function getTel()
{
	return $this->num_tel_livreur;
}

	function setId($ident)
	{
       $this->id_livreur=$ident;
	}
	function setNom($nom)
	{
		$this->nom=$nom;
	}
	function setPrenom($prenom)
	{
		$this->prenom=$prenom;
	}
	function setTel($numero)
{
	$this->num_tel_livreur=$numero;
}
}





?>