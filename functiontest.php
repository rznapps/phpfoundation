

<?php

function showinfo($gen){


$fields = array
  (
  "genres" => array("comedy","tragedy","action","romance"),
  "film_titles" => array("Big","star wars","titanic","french kiss"),
  "stars"=> array("Bill murrary","mark hammit","Leo nard de carprio","kate blacnchet"),
  );

$result = $gen;
foreach ($fields as key=>$value) {
    if ($value[0] == $number) { 
        $result = $value; 
        break;
    }

    }
    
showinfo("comedy");

?>

