<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of account
 *
 * @author Rashel
 */
class account {
    private $number;
    private $opening_date;
    private $balance; 
    
    function __construct($number, $opening_date) {
        $this->number = $number;
        $this->opening_date = $opening_date;
    }
    
    public function getNumber() {
        return $this->number;
    }

    public function getOpening_date() {
        return $this->opening_date;
    }

    public function setNumber($number) {
        $this->number = $number;
    }

    public function setOpening_date($opening_date) {
        $this->opening_date = $opening_date;
    }

    public function deposit($amount){
        
    }
    public function withdraw($amount){
        
    }
    //put your code here
}
