<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ShopClass
 *
 * @author Rashel
 */
class ShopClass {
    private $shop_code; 
    private $shop_name;
    
    public function getShop_code() {
        return $this->shop_code;
    }

    public function getShop_name() {
        return $this->shop_name;
    }

    public function setShop_code($shop_code) {
        $this->shop_code = $shop_code;
    }

    public function setShop_name($shop_name) {
        $this->shop_name = $shop_name;
    }


}
