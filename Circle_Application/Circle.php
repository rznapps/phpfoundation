<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Circle
 *
 * @author Rashel
 */
class Circle {
    //put your code here
    
    public $circle_radius; 
    
    
    public function get_radius(){
    
    $area= $this->circle_radius*$this->circle_radius*3.14;
    
    return $area; 
    
}


}