<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductClass
 *
 * @author Rashel
 */
class ProductClass {
    
    private $product_id;
    private $product_quantity; 
    
    public function getProduct_id() {
        return $this->product_id;
    }

    public function getProduct_quantity() {
        return $this->product_quantity;
    }

    public function setProduct_id($product_id) {
        $this->product_id = $product_id;
    }

    public function setProduct_quantity($product_quantity) {
        $this->product_quantity = $product_quantity;
    }


}
