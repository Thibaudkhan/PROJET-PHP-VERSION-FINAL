<?php
	class matiere {
	private $nom;
	private $description;
	private $adate;
	


	public function __construct($nom,$description,$adate) {

	  $this->nom = $nom;
	  $this->description = $description;
	  $this->adate = $adate;
	
	}


	public function getNom(){
	  return $this->nom;
	}

	public function getDescription(){
	  return $this->description;
	}
	public function getaDate(){
	  return $this->adate;
	}
	
}

?>