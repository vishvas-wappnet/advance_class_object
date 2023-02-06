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


                        echo "User Register With Details:" . "Firts name:\t" . $First_name . ",Surname Name:\t" . $Last_name  . ",Date of Birth:\t" .  $Date_of_Birth . "\tAddress:" . $Address . "\tEducation Qualificatoin :". $Education_Qualificatoin . "Pan Number:\t" . $Pan_Number . "Adhar NUmber :\t" . $Adhar_Number . "<br>"; //
                    }       

                    
            }




            class Bank_user_Withdraw extends Bank_user_register// class for  user withrawal  

            {

                    public $Amount;

                    public $MIN_AMOUNT  = 500;


                    public function Withdraw_Money($Amount)
                        {
                            $this->Amount = $Amount ; 

                            if($Amount< 500)
                               {
                                 echo "Please Enter Amount more than 500 and tra Again:" . "<br>";
                               } 
                               
                            else
                               {
                                 echo "WIthrwal of RS\t" . $Amount ."\tSuccessfull :" ;
                               }
                            


                        }

                    

                 
            }
 



$Bank_user_vishvas = new Bank_user_Withdraw();

$Bank_user_vishvas->User_register('Vishvas' ,'Solanki' , '1-1-1900' , '18c nirmala socinety , near Hotel mahotsav , patna  - Bihar ,','BA' , '1245C1123ACV' , '2244 4455 8877' );

$Bank_user_vishvas->Withdraw_Money(200); ///this will show error message that please enter amount more than 500

$Bank_user_vishvas->Withdraw_Money(500); // this will show successfull withdrwal


?>
