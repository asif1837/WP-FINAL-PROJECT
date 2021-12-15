<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "e-tourism2";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 function CheckUser($conn,$table,$email,$password)
 {
 $result = $conn->query("SELECT * FROM ". $table." WHERE Email='". $email."' AND Password_='". $password."'");
 return $result;
 }
 
 //For Client Registration
 function addClient($conn,$table,$uname,$pass,$cfpass,$name,$gender,$dob,$email,$address,$state,$phone)
 {
 $result = $conn->query("INSERT INTO clients (Uname, Password_,Confirm_Password, Name_, Gender,Dob,Email, Address_, State_,Phone) VALUES ('$uname', '$pass', '$cfpass', '$name', '$gender', '$dob','$email', '$address', '$state', '$phone')");
 return $result;
 }


 //For add Booking
 function clientBooking($conn,$table,$bname,$bnid,$bphone,$baddress,$bemail,$bcheckin,$bcheckout)
 {
 $result = $conn->query("INSERT INTO booking (Owner_Name, Owner_Nid, Owner_Phone, Owner_Address, Owner_Email,Check_IN,Expected_Check_Out) VALUES ('$bname', '$bnid', '$bphone', '$baddress', '$bemail', '$bcheckin','$bcheckout')");
 return $result;
 }

 function searchbooking($conn,$table,$bnid)
{
   $result = $conn->query("SELECT * FROM booking WHERE Owner_Nid Like '%{$bnid}%'");
   return $result;
}

//Assign Delivery Update
function updatebooking($conn,$table,$bname,$bnid,$bphone,$bemail,$bcheckin,$bcheckout){
    $result=$conn->query("UPDATE $table SET Owner_Name='$purid', Owner_Nid='$bnid', Owner_Phone = '$bphone', Owner_Address='$baddress', Owner_Email='$bemail', Check_IN='$bcheckin' , Expected_Check_Out='$bcheckout'  WHERE Owner_Nid='$bnid'");
    return $result;
}
 

 //For Close Connection
function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>