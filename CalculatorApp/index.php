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
     <form action="index.php" method="GET">
First Number: <input type="text" name='first_num'><br>
Second Number: <input type="text" name='second_num'><br>
<input type="Submit" name='add_submit'value="add"><br>
<input type="Submit" name='subtract_submit'value="subract"><br>
<input type="Submit" name='multiply_submit'value="multiply"><br>
<input type="Submit" name='divide_submit'value="divide"><br>

        
       
        
        <?php
        require 'Calculator.php';
        $a_calculation= new Calculator();  
        
        
        if (isset($_GET['add_submit'])){
            $a_calculation->first_number=$_GET['first_num'];
            $a_calculation->second_number=$_GET['second_num']; 
            $addition= $a_calculation->add_numbers(); 
            echo $addition."<br/>";
        }
            
        if (isset($_GET['subtract_submit'])){
            $a_calculation->first_number=$_GET['first_num'];
            $a_calculation->second_number=$_GET['second_num']; 
            $subtraction= $a_calculation->subtract_numbers(); 
            echo $subtraction."<br/>";
        }
        
        
        if (isset($_GET['multiply_submit'])){
            $a_calculation->first_number=$_GET['first_num'];
            $a_calculation->second_number=$_GET['second_num']; 
            $multiply= $a_calculation->multiply_numbers(); 
            echo $multiply."<br/>";
        }
        
        
        if (isset($_GET['divide_submit'])){
            $a_calculation->first_number=$_GET['first_num'];
            $a_calculation->second_number=$_GET['second_num']; 
            $division= $a_calculation->divide_numbers(); 
            echo $division."<br/>";
        }
        
        /*
        $subtraction=$a_calculation->subtract_numbers();
            $multiplication=$a_calculation->multiply_numbers();
            $division= $a_calculation->divide_numbers(); 
            "<br/>";
            echo $addition."<br/>";
            echo $multiplication."<br/>";
            echo $division."<br/>";
            echo $subtraction."<br/>";
                    }*/
                    
             
        
        
        
        
        
        ?>
    </body>
</html>
