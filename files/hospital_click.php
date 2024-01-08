<?php 
session_start();
include 'config.php';



//عملية طلب حزمة
if(isset($_GET['blood_order'])&&!empty($_GET['bp_id']) && !empty($_GET['h_id'])&& !empty($_GET['ha_id'])&& !empty($_GET['bld_id']))
{



    $bp_id=$_GET['bp_id'];
    $ha_id=$_GET['ha_id'];
    $h_id=$_GET['h_id'];
    $bld_id=$_GET['bld_id'];
    // //ادخال حزمة الدم إلى  جدول طلبات المستشفى
    $insert="INSERT INTO hospitals_orders ( bp_id,ha_id,h_id, bld_id,c_at) 
    VALUES 
    ( '$bp_id', '$ha_id','$h_id','$bld_id', current_timestamp())";
    // // حذف حزمة الدم من جدول مستودع الدم
    $del="DELETE FROM blood_inventory WHERE bp_id=$bp_id";


    mysqli_query($con,$insert);
    mysqli_query($con,$del);

    $_SESSION['package_under_order']="true";
    echo ("<script LANGUAGE='JavaScript'>
          window.location.href='../hospital/available_blood.php';
       </script>");
       exit();
}

//عملية تأكيد إستلام الحزمة
if(isset($_GET['receive_order']) && !empty($_GET['ho_id'])&& !empty($_GET['bp_id'])&& !empty($_GET['h_id'])&& !empty($_GET['ha_id'])&& !empty($_GET['bld_id']))
{

    $ho_id=$_GET['ho_id'];
    $bp_id=$_GET['bp_id'];
    $h_id=$_GET['h_id'];
    $ha_id=$_GET['ha_id'];
    $bld_id=$_GET['bld_id'];

    $insert="INSERT INTO bld_req_archive ( ho_id,bp_id,ha_id, h_id,bld_id,c_at) 
     VALUES 
    ( '$ho_id', '$bp_id','$ha_id','$h_id','$bld_id', current_timestamp())";
    $del="DELETE FROM hospitals_orders WHERE ho_id=$ho_id";
    mysqli_query($con,$insert);
    mysqli_query($con,$del);
    $_SESSION['receive_package']="true";
    echo ("<script LANGUAGE='JavaScript'>
          window.location.href='../hospital/our_orders.php';
       </script>");
       exit();
}



?>