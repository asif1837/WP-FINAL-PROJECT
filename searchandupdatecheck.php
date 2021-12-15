<?php
include("database.php");
$error="";
$bname=$bnid=$bphone=$baddress=$bemail=$bcheckin=$bcheckout="";
if(isset($_POST['search'])){
   if(empty($_POST['bnid'])){
       $error="Please fill up";
   }else{
       $pid=$_POST['bnid'];
       $connection = new db();
       $conobj=$connection->OpenCon();
       $productupdate=$connection->searchbooking($conobj,"booking",$bnid);
       if ($productupdate->num_rows > 0) {
 
        // output data of each row
            while($row = $productupdate->fetch_assoc()) {
                $bname=$row["Owner_Name"];
                $bnid=$row["Owner_Nid"];
                $bphone=$row["Owner_Phone"];
                $baddress=$row["Owner_Address"];
                $bemail=$row["Owner_Email"];
                $bcheckin=$row["Check_IN"];
                $bcheckout=$row["Expected_Check_Out"];
       
            }
       
        }else{
            echo "0 results";
        }  

    }
}else{

}

if(isset($_POST['update'])){
        $bname=$_POST['bname'];
        $bnid=$_POST['bnid'];
        $bphone=$_POST['bphone'];
        $baddress=$_POST['baddress'];
        $bemail=$_POST['bemail'];
        $bcheckin=$_POST['bcheckin'];
        $bcheckout=$_POST['bcheckout'];
        
        
            $connection = new db();
            $conobj=$connection->OpenCon();
            $bookingupdate=$connection->updatebooking($conobj,"booking",$bname,$bnid,$bphone,$baddress,$bemail,$bcheckin,$bcheckout);
            if($bookingupdate === TRUE){
                echo "Booking Updated Successfully";

                //header("location:updateproduct.php");       
                }else{
                    echo "Error: " . $bookingupdate . "<br>" . $bookingupdate->error;
                     }                   
    }else{
    $error="Please Submit";
}

?>