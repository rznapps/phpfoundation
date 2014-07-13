<?php

class simple_calculator {
public $principal_amount;
public $interest_rate;
public $time_period; 


public function get_total_amount(){
   // setting condition for bonus amount accoring to salary 

  
return $this->principal_amount+((($this->interest_rate/100)*$this->principal_amount)*$this->time_period);



}

    

	


}










?>