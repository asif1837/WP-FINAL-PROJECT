<?php
include("database.php");
session_start();
$error="";
if(isset($_POST['add'])){
    if(empty($_POST['bname']) || empty($_POST['bnid']) || empty($_POST['bphone']) || empty($_POST['baddress']) || empty($_POST['bemail']) || empty($_POST['bcheckin']) || empty($_POST['bcheckout'])){
        
        $error="Please fill Up";

    }
    else{
        $bname=$_POST['bname'];
        $bnid=$_POST['bnid'];
        $bphone=$_POST['bphone'];
        $baddress=$_POST['baddress'];
        $bemail=$_POST['bemail'];
        $bcheckin=$_POST['bcheckin'];
        $bcheckout=$_POST['bcheckout'];
        

            if(preg_match("/^[a-zA-Z-' ]*$/",$bname)){

                if(preg_match("/^[1-9][0-9]*$/",$bnid)){
    
                   

                       $connection = new db();
                       $conobj=$connection->OpenCon();
                       $bookingadd=$connection->clientBooking($conobj,"booking",$bname,$bnid,$bphone,$baddress,$bemail,$bcheckin,$bcheckout);
                       if($bookingadd === TRUE){
                        echo "Booking Added Successfully";
                        header("location:client_home.php");
                        
                        }else{
                        echo "Error: " . $bookingadd . "<br>" . $bookingadd->error;
                 
                        }

                        //Create Json
                        $formdata = array(
                            'Booking_Owner_Name'=> $bname,
                            'Booking_Owner_NID'=> $bnid,
                            'Booking_Owner_Phone'=> $bphone,
                            'Booking_Owner_Address'=> $baddress,
                            'Booking_Owner_Email'=> $bemail,
                            'Check_IN'=>$bcheckin,
                            'Expected_Check_Out'=> $bcheckout,

                         );
                         $existingdata = file_get_contents('mydata.json');
                         $tempJSONdata = json_decode($existingdata);
                         $tempJSONdata[] =$formdata;
                         //Convert updated array to JSON
                         $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
                         
                         //write json data into data.json file
                         if(file_put_contents("mydata.json", $jsondata)) {
                              echo "You Data saved<br>";
                          }
                         else 
                              echo "Sorry Not saved";
                  
                       $data = file_get_contents("mydata.json");
                       $myjsondata = json_decode($data);
                  
                       foreach($myjsondata as $myobject)
                       {
                       foreach($myobject as $key=>$value)
                      {
                          echo "Here ".$key." is ".$value."<br>";
                      } 
                      }
                      
    
                }else{
                    $error="nid Must be Number";
                }
    
            }else{
                $error="Name Cannot Contain Number or Special Character";
            }

        
        
    }
}
else{
    $error="Please Submit";
}
?>