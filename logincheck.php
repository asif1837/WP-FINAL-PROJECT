<?php
include("database.php");
session_start();
$error="";
if(isset($_POST["submit"])){
if(empty($_POST["email"]) && empty($_POST["password"])){
    echo "Please Enter Your Email";

}else{
    $email=$_POST['email'];
    $password=$_POST['password'];

    $connection = new db();
    $conobj=$connection->OpenCon();

    $userQuery=$connection->CheckUser($conobj,"clients",$email,$password);

    if ($userQuery->num_rows > 0) {
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;

        header("location:Client_home.php");
    }
    else{
        echo "You Entered a Wrong Credintial";
    }
}
}
else{
    //header("location: login.php");
}
?>
