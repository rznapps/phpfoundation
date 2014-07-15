<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of customer
 *
 * @author Rashel
 */
class customer {
    private $customer_name; 
    private $email; 
    private $customer_account; 
    
    public function getCustomer_name() {
        return $this->customer_name;
    }

    public function getEmail() {
        return $this->email;
    }
    /**
     * 
     * @return account type
     */
    public function getCustomer_account() {
        return $this->customer_account;
    }

    public function setCustomer_name($customer_name) {
        $this->customer_name = $customer_name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setCustomer_account($customer_account) {
        $this->customer_account = $customer_account;
    }


    
}
