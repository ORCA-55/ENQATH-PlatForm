<?php
session_start();
require_once '../../files/config.php';
//delete blood bank account
if(isset($_GET['ba_id'])){
    $ba_id=$_GET['ba_id'];
$del="delete from bb_accounts where ba_id=$ba_id";
mysqli_query($con,$del);
$_SESSION['delete_bb_account']="true";
header("Location: ../bb_accounts.php");
exit();
}


//delete blood bank account
if(isset($_GET['ha_id'])){
    $ha_id=$_GET['ha_id'];
$del="delete from hos_emp_acc where ha_id=$ha_id";
mysqli_query($con,$del);
$_SESSION['delete_hos_emp_account']="true";
header("Location: ../hospital_accounts.php");
exit();
}
?>