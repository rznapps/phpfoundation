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
$an_employee = new office_Employee();
$an_employee->id=$_GET['Id'];
$an_employee->name=$_GET['Name'];
$an_employee->salary=$_GET['salary'];
$salary_with_bonus = $an_employee->get_salary_with_bonus();  

/*$id= $_GET[I'd'];
$Name= $_GET['Name'];
$Salary= $_GET['salary'];*/


echo $an_employee->id."<br/>"; 
echo $an_employee->name."<br/>";
echo $an_employee->salary."<br/>" ; 
echo $salary_with_bonus."<br/>" ; 

}




?>

</html>