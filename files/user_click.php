<?php

session_start();
include('config.php');
$user_id = $_SESSION['user_id'];
$user_query = "select * from users where u_id='$user_id'";
$user_result = mysqli_query($con, $user_query) or die(mysqli_error($con));
$row = mysqli_fetch_array($user_result);


$u_id = $row['u_id'];
$bld_id = $row['bld_id'];
$u_city = $row['u_city'];
$d_status = 0;

if ($_GET['donate'] == "yes") {

    $insert = "INSERT INTO available_donors ( u_id, bld_id,u_city, d_status, c_at) VALUES ( '$u_id', '$bld_id','$u_city', '$d_status', current_timestamp())";
    $update = "UPDATE users SET u_status = 0 WHERE u_id = $u_id";

    mysqli_query($con, $insert);
    mysqli_query($con, $update);

    $_SESSION['donate']="true";
    header("Location: ../user/blood_donation.php");
    exit();
}

if ($_GET['donate'] == "no") {

    $insert = "DELETE FROM available_donors WHERE u_id = $u_id";
    $update = "UPDATE users SET u_status = 1 WHERE u_id = $u_id";

    mysqli_query($con, $insert);
    mysqli_query($con, $update);
    $_SESSION['cancel_donate']="true";
    header("Location: ../user/blood_donation.php");

    exit();
}
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['vol_id']) && isset($_SESSION['user_id'])) {

    $u_id = $_SESSION['user_id'];
    $vol_id = $_GET['vol_id'];

    $insert = " INSERT INTO camp_volunteers(u_id,vol_id,c_at) VALUES($u_id,$vol_id,current_timestamp())";
     mysqli_query($con, $insert);
     $_SESSION['vol']="true";
     header("Location: ../user/volunteer.php");
     exit();
}

?>

