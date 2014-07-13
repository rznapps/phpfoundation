<?php

class User {
protected function userAge(){

}

}

class person extends User{
public function getUserage(){
	return this->userAge();
}


}

$person = new person();
echo $person->getUserage();
echo $person->userAge();