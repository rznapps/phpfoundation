<?php 

$x = 100/(2*5);
$y =  100% (2*5);
$z = 100/(2*5);
$a =0/5;
$b =0%5;



echo $x."<br />";
echo $y."<br />";
echo $z."<br />";
echo $a."<br />";
echo $b."<br />";

$a=2;
echo $a++."<br />";
echo ++$a."<br />";
echo $a."<br />";

echo $a.PHP_EOL;
echo ++$a."<br/>"; 

$a=4;
$b=2;

echo   ++$a*($a++ + --$b);

echo "<br/>...................................";

$a= '0';

echo (bool)$a; 

echo "<br/>........................";
echo (int)'1234';

echo "<br/>.....................";

echo (int)'df12addre';

// comparison 

$a=4;
$b=0; 

if ($a=$b){

    echo "<br/>.........................";
	echo "Hello"; 
}

?>