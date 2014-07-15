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
    <body>
        <form action="index.php",method="GET">
Radius of the circle: <input type="text" name='circle_radius'><br>
 <input type="Submit" name='submit'><br>      
        
        <?php
        require 'Circle.php';
        
        if (isset($_GET['submit'])){
            $a_circle= new Circle();   
            $a_circle->circle_radius=$_GET['circle_radius'];
        
            $circle_area=$a_circle->get_radius(); 
            echo $circle_area; 
        
        
        }
        
        
        ?>
    </body>
</html>
