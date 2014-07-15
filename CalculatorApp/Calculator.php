<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Calculator
 *
 * @author Rashel
 */
class Calculator {
    //put your code here
    public $first_number;
    public $second_number; 
    
    public function add_numbers(){
      return $this->first_number+$this->second_number;
}
    public function subtract_numbers(){
            
       return $this->first_number-$this->second_number;
            }

     public function multiply_numbers(){
         
         return $this->first_number*$this->second_number;
         
     }
     
     public function divide_numbers(){
         return $this->first_number/$this->second_number; 
         
     }
     }