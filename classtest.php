<?php

class office_Employee {
public $id;
public $name;
public $salary; 


public function get_salary_with_bonus(){
   // return $this->salary + 5000; 
if ($this->salary<=10000) {
  return $this->salary + $this->salary*.5;
} 

else if ($this->salary>10000 || $this->salary<=30000) {
  return $this->salary + $this->salary*.3;
} 
else {

	return 3300 ; 
}

}

    

	


}










?>