<html>

<body>

<form action="compound_cal.php",method="GET">
Principal Amount: <input type="text" name='pamount'><br>
Annual interest rate: <input type="text" name='air'><br>
Compound interest rate: <input type="text" name='cir'><br>
Time period (year) : <input type="text" name='tp'><br>
<input type="Submit" name='submit'><br>

</form> 
</body>

<?php
require 'class_compound_calculator.php'; 
if (isset($_GET['submit']))
{
$an_calculation = new class_compound_calculator();
$an_calculation->principal_amount=$_GET['pamount'];
$an_calculation->annual_interest_rate=$_GET['air'];
$an_calculation->compound_interest=$_GET['cir'];
$an_calculation->time_period=$_GET['tp'];
$total_amount = $an_calculation->get_total_amount();  


echo $total_amount ; 

}




?>

</html>