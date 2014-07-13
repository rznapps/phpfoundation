<html>

<body>

<form action="out.php",method="GET">
Name: <input type="text" name='Name'><br>
ID: <input type="text" name='Id'><br>
Salary: <input type="text" name='salary'><br>
<input type="Submit" name='Submit'><br>


</form> 




</body>




<?php
require 'classtest.php'; 
if (isset($_GET['Submit']))
{
$employeeobject = new Employee();
$employeeobject->id=$_GET['Id'];
$employeeobject->Name=$_GET['Name'];

$employeeobject->Salary=$_GET['salary'];

/*$id= $_GET[I'd'];
$Name= $_GET['Name'];
$Salary= $_GET['salary'];*/


echo $employeeobject->id."<br/>"; 
echo $employeeobject->Name."<br/>";
echo $employeeobject->Salary."<br/>" ; 
}




?>

</html>