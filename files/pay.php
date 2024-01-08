<?php
session_start(); 
if ($_SERVER['REQUEST_METHOD'] =='POST' && isset($_POST['ch_id']) && isset($_POST['amount']))
{

   $ch_id= $_POST['ch_id'];
   $amount= $_POST['amount'];
   $u_id=$_SESSION['user_id'];

 require_once('config.php');
$r = mysqli_query($con,"SELECT ch_raised FROM char_camp where ch_id=$ch_id");
$result = mysqli_fetch_array($r);
 $raised=$result['ch_raised'];

 $update=" UPDATE char_camp SET ch_raised=$raised+$amount WHERE ch_id =$ch_id";
 $insert=" INSERT INTO camp_donors(u_id,ch_id,amount,c_at) VALUES($u_id,$ch_id,$amount,current_timestamp())";

 $up=mysqli_query($con,$update);
 $in=mysqli_query($con,$insert);


 
if($up && $in){
   $_SESSION['pay']="true";
   header("Location: ../user/campaigns.php");

   exit();
}

   
}
?>