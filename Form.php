<?php

class Form

{
private $type;

public function __construct($type)
  {
    $this->type = $type;
  }

  public function input($name){
    echo '<p><label for="'.$name.'">'.$name.'</label></p>';
    echo '<p><input id="'.$name.'" text="text" name="'.$name.'"></p>';
  }

  public function submit(){
    echo '<button name="Envoyer" type="submit">Envoyer</button>';

  }

}