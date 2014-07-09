
<?php



$marks=76;

if ($marks<="100"&& $marks>=80) {
  echo "you have got A+";

} elseif ($marks<="80" && $marks>=70) {
  echo " you have got A";
} elseif ($marks<"70"&& $marks>=60) {
  echo "you have got B+";
}
elseif ($marks<"60"&& $marks>=50) {
  echo "you have got B";
}
elseif ($marks<"50"&& $marks>=40) {
  echo "you have got C";
}
elseif ($marks<"40"&& $marks>=30) {
  echo "you have got D";
}
else {
	echo "you have failed";
}
?>