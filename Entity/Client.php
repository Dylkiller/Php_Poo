<?php
class Client
{
	private $id;
	private $titre;
	private $nom;
	private $prenom;
	private $adresserue1;
	private $adresserue2;
	private $cp;
	private $ville;
	private $tel;
	private $lesCommandes;

	public function __toString(){
		return "nom : " . $this->nom . " prenom : " . $this->prenom; 
	}

}

?>