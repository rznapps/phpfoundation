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
        <?php
        require 'account12.php';
        
        $account1 = new Account('2014-11', '14-14-14');
        $account2 = new Account('20-14-362', '16-3-9');
        $account3 = new Account('66-24-362', '26-3-10');
        
        $Accounts = array();
        
        $Accounts[] = $account1;
        $Accounts[] = $account2;
        $Accounts[] = $account3;
        
        foreach ($Accounts as $values) {
            echo $values->getAccount_number().''.$values->getOpening_date();
        }
        
        ?>
    </body>
</html>
