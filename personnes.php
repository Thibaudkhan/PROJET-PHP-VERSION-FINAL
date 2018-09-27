<?php

	class personnes {
	private $nom;
	private $prenom;
	private $mail;
	private $tel;
	private $sPontoise;
	private $sChamperet;
	private $nCours;
	


	public function __construct($nom,$prenom,$mail,$tel,$sPontoise,$sChamperet,$nCours) {

	  $this->nom = $nom;
	  $this->prenom = $prenom;
	  $this->mail = $mail;
	  $this->tel = $tel;
	  $this->sPontoise = $sPontoise;
	  $this->sChamperet = $sChamperet;
	  $this->nCours = $nCours;
	
	}


	public function getNom(){
	  return $this->nom;
	}

	public function getPrenom(){
	  return $this->prenom;
	}
	public function getMail(){
	  return $this->mail;
	}
	public function getTel(){
	  return $this->tel;
	}
	public function getSPontoise(){
	  return $this->sPontoise;
	}
	public function getSChamperet(){
	  return $this->sChamperet;
	}
	public function getNCours(){
	  return $this->nCours;
	}
	
}

?>
