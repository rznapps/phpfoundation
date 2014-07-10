<?php
class User   
// declaring a class
{
var $name="FTFL";
var $email="";

function getName(){
return "FTFL";

}
}
 
// instantiation of a User
 $user= new User(); 
 var_dump($user); 
echo $user->name;

echo $user->getName(); 

?>

