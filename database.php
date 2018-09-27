<?php 

	class data{

  private $type;
  private $dbname;
  private $host;
  private $username;
  private $password;
  private $bdd;


	public function __construct($type,$host,$dbname,$username,$password){

    $this->type = $type;
    $this->dbname = $dbname;
    $this->host = $host;
    $this->username = $username;
    $this->password = $password;

  }

	public function getmybdd(){
    try {
      if ($this->bdd ===null){
          $this->bdd = new PDO($this->type.':host='.$this->host.';dbname='.$this->dbname.'',$this->username, $this->password);
      }
    } catch (PDOException $e) {
      print "Erreur ! Connection à la base de donné impossible".$e->getMessage()." <br/>";
      die();
    }
    return $this->bdd;
  }


  public function getAllRow($myTable){
    foreach($this->bdd->query('SELECT * FROM '. $myTable) as $row) {      
    }
  }


 public function setInsert($nom, $description, $adate){
      $query="INSERT INTO cours (" . "nom, description, adate ".") VALUES (" . "'".$nom . "',". "'".$description . "'," ."'".$adate . "')";
      
      $req = $this->bdd->prepare($query);
      $req->execute();
      return true;
  }

  public function setInsertPersonnes($nom, $prenom, $mail, $tel, $sPontoise, $sChamperet, $nCours){
      $query="INSERT INTO personnes (" . "nom, prenom, mail, tel, sPontoise, sChamperet, nCours ".") VALUES (" . "'".$nom . "',". "'".$prenom . "'," ."'".$mail. "',". "'".$tel. "',". "'".$sPontoise. "',". "'".$sChamperet. "',". "'".$nCours . "')";
      
      $req = $this->bdd->prepare($query);
      $req->execute();
      return true;
  }

  public function setSelect($nom, $description, $adate){
      $query="SELECT * nom, description, adate   FROM cours ";
      
      $req = $this->bdd->prepare($query);
      $req->execute();
      return true;
  }

}

?>