<html>
    <body>
        
    </body>
</html>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$a_number=100;
session_start();
$a_number=$_SESSION['number1']+10;
echo $_SESSION['number1']; 
$total=$_SESSION['number1']+10;

?>