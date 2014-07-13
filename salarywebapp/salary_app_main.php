<html>

<body>

<form action="salary_app_main.php",method="GET">
Employee Name: <input type="text" name='employee_name'><br>
Basic Amount: <input type="text" name='basic_amount'><br>
House Rent (percent): <input type="text" name='house_rent'><br>
Medical Allowance(percent) : <input type="text" name='medical_allow'><br>
<input type="Submit" name='submit'><br>

</form> 
</body>

<?php
require 'salary_app_class.php'; 
if (isset($_GET['submit']))
{
$an_calculation = new salaryapp();
$an_calculation->employee_name=$_GET['employee_name'];
$an_calculation->basic_amount=$_GET['basic_amount'];
$an_calculation->house_rent_percent=$_GET['house_rent'];
$an_calculation->medical_allowance_percent=$_GET['medical_allow'];

$total_amount = $an_calculation->get_salary_amount();  




echo "$an_calculation->employee_name, your total salary is: $total_amount"  ; 

}




?>

</html>