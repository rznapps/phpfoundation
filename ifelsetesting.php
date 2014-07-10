
<?php




function findgrade($marks) {

//$marks=85;

if ($marks<="100"&& $marks>=80) {
  return "you have got A+";

} elseif ($marks<="80" && $marks>=70) {
  return " you have got A";
} elseif ($marks<"70"&& $marks>=60) {
  return "you have got B+";
}
elseif ($marks<"60"&& $marks>=50) {
  return "you have got B";
}
elseif ($marks<"50"&& $marks>=40) {
  return "you have got C";
}
elseif ($marks<"40"&& $marks>=30) {
  return "you have got D";
}
else {
	return "you have failed";
}

  
}

echo findgrade(67); 

/*
echo "<br/>.........";

$x=52; 


if ($x>=79) {
  echo "you have got A+";

}
elseif ($x>=59){
 echo "you have got A";
}

elseif ($x>=49){
 echo "you have got B+";
}


$sum=0;
for ($start=10; $start<=100; $start++){
  $sum = $start + $sum; 
  }
echo "<br/>.........";

echo ($sum);

*/



?>