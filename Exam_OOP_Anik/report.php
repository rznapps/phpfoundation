<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    
    <h1> this is a testing </h1>
    <body>
        <?php
        require 'ShopClass.php'; 
        require 'ProductClass.php';
        //require 'department.php';
        //require 'product.php'; 
        session_start();
        echo "testing"."<br/>";
        //$product=new ProductClass(); 
        $product = $_SESSION['product'];
        
        $shop = $_SESSION['shop'];
        //$product = $_SESSION['product'];


        
        echo "testing one"."<br/>";
        
        echo $shop->getShop_code()."<br/>";
        echo $shop->getShop_name()."<br/>";
        
        echo "testing two"."<br/>"; 
        
        echo $product->getProduct_id()."<br/>";
        echo $product->getProduct_quantity()."</br>"; 
        
        echo "testing 3"."<br/>"; 
        
        ?>
    </body>
</html>
