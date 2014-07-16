<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<body>

    <form action="product.php",method="GET">
Product ID: <input type="text" name='id'><br>
Product Quantity: <input type="text" name='quantity'><br>
<input type="Submit" name='add'value="Add/Update"><br>



</form> 
</body>
<?php
require 'ProductClass.php'; 
           
        $product=new ProductClass(); 
        session_start();
        if (isset($_GET['add'])){
            //$product=$_SESSION['product'];
            echo "Testing"."<br/>";
            $product->setProduct_id($_GET['id']);
            $product->setProduct_quantity($_GET['quantity']);
           // session_start();
            $_session['product']=$product;
            echo "product added/updated"."<br/>";
            echo $product->getProduct_id()."<br/>";
            echo $product->getProduct_quantity()."<br/>"; 
             
            }
            
       
?>



