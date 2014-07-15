<html>

<body>

<form action="compound_cal.php",method="GET">
Customer Name: <input type="text" name='customer_name'><br>
Account No: <input type="text" name='account_no'><br>
Amount: <input type="text" name='amount'><br>
<input type="Submit" name='create'value="Create"><br>
<input type="Submit" name='deposit'value="Deposit"><br>
<input type="Submit" name='withdraw'value="withdraw"><br>
<input type="Submit" name='show report'value="show report"><br>


</form> 
</body>

<?php
require 'Account.php'; 

       // $a_customer= new Account();  
        
        
        if (isset($_GET['create'])){
        $account= new Account($_GET['customer_name'],$_GET['account_no']);
        session_start();
        $_session['an_account']=$account; 
        echo "Account Created"; 
            }
            
       if (isset($_GET['deposit'])){
           $account=$_session['an_account'];
           $account->deposit($_GET['amount']);
           echo "Deposited";  
        }
        
	if (isset($_GET['withdraw']))
        {
         $account=$_session['an_account'];
         $account->withdraw($_GET['amount']);
         

        }

        if (isset($_GET['showreportButtion']))
         {
         
         }

?>


</html>