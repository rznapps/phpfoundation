<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="index.php" method="GET">
Customer Name: <input type="text" name='customer_name'><br>
Email Address: <input type="text" name='email_add'><br>
Account Number: <input type="text" name='account_no'><br>
Opening Date: <input type="text" name='opening_date'><br>
Amount: <input type="text" name='amount'><br>


<input type="Submit" name='create'value="Create Account"><br>
<input type="Submit" name='deposit'value="Deposit"><br>
<input type="Submit" name='withdraw'value="withdraw"><br>
<input type="Submit" name='showreport'value="show_report"><br>


</form> 
        <?php
        require 'account.php';
        require 'customer.php';
        $customer=new customer();
        session_start(); 
        if (isset($_GET['create'])){
        
        
        $customer->setCustomer_name($_GET['customer_name']);
        $customer->setEmail($_GET['email_add']);
        $account=new Account($_GET['account_no'],$_GET['opening_date']); 
        
        $_SESSION['a_customer']=$customer; 
        $_SESSION['an_account']=$account; 
        
        echo "Account Created"."<br/>"; 
        }
        
        if(isset($_GET['deposit'])){
            $account=$_SESSION['an_account'];
            $account->deposit($_GET['amount']);
            $_SESSION['an_account']=$account; 
           // echo $current_deposit; 
            
        }
        if(isset($_GET['withdraw'])){
            $account=$_SESSION['an_account'];
            $account->withdraw($_GET['amount']);
            $_SESSION['an_account']=$account; 
           // echo $current_deposit; 
            
        }
        
        if(isset($_GET['showreport'])){
          $account=$_SESSION['an_account'];
           echo $customer->getCustomer_name()."<br/>"; 
           echo $customer->getEmail()."<br/>"; 
           echo $account->getAccount_number()."<br/>";
           echo $account->getOpenting_date()."<br/>";
           echo $account->getBalance()."<br/>"; 
            
            
        }
        
        
        /*$account= new Account('S4536','12th july');
        $account->deposit(10000); 
        $account->withdraw(2000);
        
        
        
        $customer=new customer();
        $customer->setCustomer_name('Hasan');
        $customer->setCustomer_account($account);
        
        
        echo $customer->getCustomer_account()->getBalance(); 
        */
        ?>
    </body>
</html>
