<html>

<body>

<form action="out.php",method="POST">
Name: <input type="text" name='Name'><br>
ID: <input type="text" name='Id'><br>
Salary: <input type="text" name='salary'><br>
<input type="Submit" name='Submit'><br>


</form> 




</body>




<?php
if (isset($_GET['Submit']))
{
$id= $_GET['Id'];
$Name= $_GET['Name'];
$Salary= $_GET['salary'];


echo $id."<br/>"; 
echo $Name."<br/>";
echo $Salary."<br/>" ; 
}




?>

</html>