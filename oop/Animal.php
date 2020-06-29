<?php
class Animal {
  protected $name;
  public $legs = 2;
  public $cold_blooded = false;

  public function __construct($name){
    $this->name = $name;

  }

  
  public function __get($name){
    if(property_exists($this, $name)){
      return $this->$name;
    }
  }

}

?>