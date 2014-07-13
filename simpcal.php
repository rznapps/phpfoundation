<html>

<body>

<form action="simpcal.php",method="GET">
Principal Amount: <input type="text" name='pamount'><br>
Annual interest rate: <input type="text" name='air'><br>
Time period (year) : <input type="text" name='tp'><br>
<input type="Submit" name='submit'><br>

</form> 
</body>

<?php
require 'simpcal1.php'; 
if (isset($_GET['submit']))
{
$an_calculation = new simple_calculator();
$an_calculation->principal_amount=$_GET['pamount'];
$an_calculation->interest_rate=$_GET['air'];
$an_calculation->time_period=$_GET['tp'];
$total_amount = $an_calculation->get_total_amount();  




echo $total_amount ; 

}




?>

</html>