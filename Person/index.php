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
            require_once 'person.php';
            
            
            $a_person=new Person('James', 'lucus', 'schott');
            
         //   $a_person->set_first_name('james');
           // $a_person->set_middle_name('locus');
           // $a_person->set_last_name('scott');
            
            /*$a_person->first_name='james';
            $a_person->middle_name = 'Locus';
            $a_person->last_name= 'Scott';*/
            
           echo $a_person->get_full_name();
           echo $a_person->get_reverse_name();
        ?>
    </body>
</html>
