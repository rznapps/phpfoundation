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
class Account {
    
    private $account_number;
    private $openting_date;
    private $balance;
    
    function __construct($account_number, $openting_date) {
        $this->account_number = $account_number;
        $this->openting_date = $openting_date;
    }
    
    public function getAccount_number() {
        return $this->account_number;
    }

    public function getOpenting_date() {
        return $this->openting_date;
    }
    
    /**
     * 
     * @return account type
     */

    public function getBalance() {
        return $this->balance;
    }

    public function setAccount_number($account_number) {
        $this->account_number = $account_number;
    }

    public function setOpenting_date($openting_date) {
        $this->openting_date = $openting_date;
    }

    public function setBalance($balance) {
        $this->balance = $balance;
    }

        
    
    public function deposit($amount){
    
     return  $this->balance+=$amount;
    
    }
    
    public function withdraw($amount){
        return $this->balance-=$amount; 
        
        }
    
}