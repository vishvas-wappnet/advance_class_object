<?php

        class Bank_user_register // class for bank user registration 

            {

                    public $First_name;

                    public $Last_name;

                    public $Date_of_Birth;

                    public $Address;

                    public $Education_Qualificatoin;

                    public $Pan_Number;

                    public $Adhar_Number;


                 public function User_register($First_name ,$Last_name , $Date_of_Birth , $Address ,$Education_Qualificatoin , $Pan_Number ,$Adhar_Number) //this functoin used to register 
                    {
                        $this->First_name = $First_name;
                        $this->Last_name = $Last_name;
                        $this->Date_of_Birth = $Date_of_Birth;
                        $this->Address = $Address ;
                        $this->Educatoin_Qualificatoin = $Education_Qualificatoin;
                        $this->Pan_Number =$Pan_Number;
                        $this->Adhar_Number = $Adhar_Number;


                        echo "User Register With Details:" . "Firts name:\t" . $First_name . ",Surname Name:\t" . $Last_name  . ",Date of Birth:\t" .  $Date_of_Birth . "\tAddress:" . $Address . "\tEducation Qualificatoin :". $Education_Qualificatoin . "Pan Number:\t" . $Pan_Number . "Adhar NUmber :\t" . $Adhar_Number ;
                    }       
            }




            class Bank_user_register // class for withdrawal 

            {

                    public $First_name;

                    public $Last_name;

                    public $Date_of_Birth;

                    public $Address;

                    public $Education_Qualificatoin;

                    public $Pan_Number;

                    public $Adhar_Number;


                 public function User_register($First_name ,$Last_name , $Date_of_Birth , $Address ,$Education_Qualificatoin , $Pan_Number ,$Adhar_Number) //this functoin used to register 
                    {
                        $this->First_name = $First_name;
                        $this->Last_name = $Last_name;
                        $this->Date_of_Birth = $Date_of_Birth;
                        $this->Address = $Address ;
                        $this->Educatoin_Qualificatoin = $Education_Qualificatoin;
                        $this->Pan_Number =$Pan_Number;
                        $this->Adhar_Number = $Adhar_Number;


                        echo "User Register With Details:" . "Firts name:\t" . $First_name . ",Surname Name:\t" . $Last_name  . ",Date of Birth:\t" .  $Date_of_Birth . "\tAddress:" . $Address . "\tEducation Qualificatoin :". $Education_Qualificatoin . "Pan Number:\t" . $Pan_Number . "Adhar NUmber :\t" . $Adhar_Number ;
                    }       
            }
 
 

//   public function __construct($first_name, $last_name, $age)

//   {

//     $this->first_name = $first_name;

//     $this->last_name = $last_name;

//     $this->age = $age;

//   }


// }


//   class user extends Employee
//   {

//   public function getFirstName()

//   {

//     return $this->first_name;

//   }

//   public function getLastName()

//   {

//     return $this->last_name;

//   }

//   public function getAge()

//   {

//     return $this->age;

//   }

// }





$Bank_user_vishvas = new Bank_user_register();

$Bank_user_vishvas->User_register('Vishvas' ,'Solanki' , '1-1-1900' , '18c nirmala socinety , near Hotel mahotsav , patna  - Bihar ,','BA' , '1245C1123ACV' , '2244 4455 8877' );



?>
