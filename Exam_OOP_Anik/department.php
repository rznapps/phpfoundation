<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<body>

    <form action="department.php",method="GET">
Shop Code: <input type="text" name='code'><br>
Shop Name: <input type="text" name='Name'><br>
<input type="Submit" name='create'value="Create"><br>



</form> 
</body>
<?php
require 'ShopClass.php'; 
           
        $shop=new ShopClass(); 
        session_start();
        if (isset($_GET['create'])){
            echo "testing"."<br/>";
            //$shop=$_SESSION['shop'];
            $shop->setShop_code($_GET['code']);
            $shop->setShop_name($_GET['Name']);
            //session_start();
            $_SESSION['shop']=$shop; 
            echo "Shop Created"."<br/>"; 
            echo $shop->getShop_code()."<br/>";
            echo $shop->getShop_name()."<br/>"; 
            }
            
       
?>


</html>