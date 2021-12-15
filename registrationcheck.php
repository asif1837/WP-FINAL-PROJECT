<?php
include("database.php");
session_start();
$error="";


if(isset($_POST['submit'])){
    if (empty($_POST['uname']) || empty($_POST['pass']) || empty($_POST['cfpass']) || empty($_POST['name']) || empty($_POST['email']) || empty($_POST['rad']) || empty($_POST['phone']) || empty($_POST['dob']) || empty($_POST['address']) || empty($_POST['state'])){
        echo "Please Fill Up The Form";
    }
    else
    {
        $uname=$_POST['uname'];           
        $pass=$_POST['pass'];          
        $cfpass=$_POST['cfpass'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $gender=$_POST['rad'];
        $phone=$_POST['phone'];
        $dob=$_POST['dob'];
        $address=$_POST['address'];
        $state=$_POST['state'];

        if($pass == $cfpass){
            

            if(preg_match("/^[a-zA-Z-' ]*$/",$uname)){ 

                if((strlen($pass) > 7) && (strlen($cfpass) > 7)){

                     if($pass == $cfpass){

                        if(preg_match("/^[a-zA-Z-' ]*$/",$name)){

                            if(filter_var($email, FILTER_VALIDATE_EMAIL)){

                                
                                    
                                    if(preg_match("/[a-zA-Z0-9]/", $address)){
                                        $connection = new db();
                                        $conobj=$connection->OpenCon();
                                        $clientAdd=$connection->addClient($conobj,"clients",$uname,$pass,$cfpass,$name,$gender,$dob,$email,$address,$state,$phone);
                                        if($clientAdd == TRUE){
                                         echo "Client Add Successfully";
                                         header("location:login.php");
                                         
                                         }else{
                                         //echo "Error: " . $clientAdd . "<br>" . $clientAdd->error;
                                  
                                         }
                                    }else{
                                        echo $error="Adress Can only contains Number and string";
                                    }
                            
                              
                                
                            }else{
                                echo $error="Email format is not okay";
                            }
                        }else{
                            echo $error="Name Cannot Contains Digits or Special Character";
                        }    
                    }else{
                        echo $error="Password and Confirm Password cannot Match";
                    }       
                }else{
                     echo $error="Password and Confirm Password Length Must be 8";
                    }
            }else{
                echo $error="User Name Cannot Contains Number or Special Character";
            } 
        }
    }

}
?>
