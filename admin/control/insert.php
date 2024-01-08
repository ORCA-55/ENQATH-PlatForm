<?php
session_start();
require_once ('../../files/config.php');
if(isset($_POST['create-hospital']))
{
   
    $h_name=$_POST['name'];
    $h_city=$_POST['city'];
    $insert="INSERT INTO hospitals( h_name, h_city, c_at) VALUES ( '$h_name', '$h_city', current_timestamp())";

    mysqli_query($con,$insert);
    
    $_SESSION['create_hospital']="true";
echo "<meta http-equiv='refresh' content='0;url=../show_hospitals.php?hospital=$h_name' />";
    exit();
}

if(isset($_POST['create-char-camp']))
{
 
    $ch_name=$_POST['name'];
    $ch_city=$_POST['city'];
    $ch_goal=$_POST['amount'];
    $ch_founder=$_POST['founder'];
    $ch_details=$_POST['deatils'];
    $insert="INSERT INTO char_camp( ch_name, ch_city,ch_goal,ch_founder,ch_details, ch_date) VALUES ( '$ch_name', '$ch_city','$ch_goal','$ch_founder','$ch_details', current_timestamp())";

    mysqli_query($con,$insert);
echo "<meta http-equiv='refresh' content='0;url=../char_camp.php?create=yes' />";
    exit();
}


if(isset($_POST['create-vol-camp']))
{
 
    $vol_name=$_POST['name'];
    $vol_city=$_POST['city'];
    $vol_location=$_POST['location'];
    $vol_date=$_POST['date'];
    $vol_founder=$_POST['founder'];
    $vol_details=$_POST['deatils'];
    $insert="INSERT INTO vol_camp( vol_name, vol_city,vol_location,vol_details,vol_founder, vol_date) VALUES ( '$vol_name', '$vol_city','$vol_location','$vol_details','$vol_founder', '$vol_date')";

    
    mysqli_query($con,$insert);
echo "<meta http-equiv='refresh' content='0;url=../vol_camp.php?create=yes' />";
    exit();
}

?>