<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Account
 *
 * @author Rashel
 */
class Account {
    //put your code here
    private $name ;
    private $number;
    private $balance; 
    
    function __construct($name, $number) {
        $this->name = $name;
        $this->number = $number;
    }
    public function getName() {
        return $this->name;
    }

    public function getNumber() {
        return $this->number;
    }

   public function deposit($amount){
    
       $this->balance=  $this->balance+$amount; 
    
}

  public function withdraw($amount){
    
      $this->balance=  $this->balance-$amount; 
}
}

?>