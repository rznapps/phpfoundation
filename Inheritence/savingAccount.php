<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of savingAccount
 *
 * @author Rashel
 */
class savingAccount extends account {
   private $interest_amount;
   public function get_interest_amount(){
       return $this->interest_amount;
       
   }
}
