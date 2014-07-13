<?php

class salaryapp {
public $employee_name;
public $basic_amount;
public $house_rent_percent;
public $medical_allowance_percent; 


public function get_salary_amount(){
   // setting condition for bonus amount accoring to salary 
    
  $house_rent= ($this->house_rent_percent/100)*$this->basic_amount;
  $medical_allowance=($this->medical_allowance_percent/100)*$this->basic_amount;
  $total_amount= $this->basic_amount+$house_rent+$medical_allowance;

  return $total_amount; 





}

    

	


}










?>