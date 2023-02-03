<?php

class Employee

{

  public $first_name;

  public $last_name;

  public $age;

 

  public function __construct($first_name, $last_name, $age)

  {

    $this->first_name = $first_name;

    $this->last_name = $last_name;

    $this->age = $age;

  }


}


  class user extends Employee
  {

  public function getFirstName()

  {

    return $this->first_name;

  }

  public function getLastName()

  {

    return $this->last_name;

  }

  public function getAge()

  {

    return $this->age;

  }

}





$objEmployee = new user('anon', 'hacker', 30);

echo "Employee first name :" . $objEmployee->getFirstName() . "<br>"; 

echo "Employee last name: " .$objEmployee->getLastName() . "<br>"; 

echo "Employee age is:" . $objEmployee->getAge(); 




?>
