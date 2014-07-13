<?php
class User   
// declaring a class
{ 
var $name="FTFL";
var $email="";

function __construct ($name="FTFL", $email="rznanik@gmail.com"){

	$this->$name =$name;
	$this->$email=$email;
}
function getName(){
//return $this->$name;

  }

 }
 
// instantiation of a User
 $user= new User(); 
 $user1= new User();
 $user2= new User();


 var_dump($user); 
 var_dump($user); 


echo $user->name;
echo $user->getName(); 


echo $user1->getName();
echo $user2->getName(); 





?>

