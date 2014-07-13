<?php

class class_compound_calculator {
public $principal_amount;
public $annual_interest_rate;
public $compound_interest; 
public $time_period; 


public function get_total_amount(){
// calculation the total amount from the inputs given

  
return $this->principal_amount+((($this->annual_interest_rate/100)*$this->principal_amount)*$this->time_period);



}

    

	


}










?>