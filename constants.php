<?php
define('PIE', 3.14);
echo PIE ; 
// Array 

$cars  = array('toyota','mercedes','lambargini');
echo "<br/>.........ec...............";
echo gettype($cars);
echo "<br/>.........";
//echo $; 
print_r($cars);  
echo "<br/>.........";
echo $cars[1];
echo "<br/>.........";


$fruits = array ('a'=>'apple','b'=> 'banana'); 

print_r($fruits);  
echo "<br/>.........";
echo $fruits['b'];

$arr2d=array($cars,$fruits);
echo "<pre>";
print_r($arr2d);
echo"</pre>"; 

echo "<br/>.........";

print_r($arr2d[0][1]);

?>