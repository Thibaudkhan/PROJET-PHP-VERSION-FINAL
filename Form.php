<?php

class Form

{
private $type;

public function __construct($type)
  {
    $this->type = $type;
  }

  public function input ($name){
    echo '<p><label for="'.$name.'">'.$name.'</label></p>';
    echo '<p><input id="'.$name.'" type="text" name="'.$name.'"></p>';
  }

  public function inputdate ($name){
    echo '<p><label for="'.$name.'">'.$name.'</label></p>';
    echo '<p><input id="'.$name.'" type="date" name="'.$name.'"></p>';
  }

  public function submit(){
    echo '<button name="Envoyer" type="submit">Envoyer</button>';

  }


}