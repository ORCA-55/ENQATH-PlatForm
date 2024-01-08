<?php 
session_start();

if (!$_SESSION['ba_id']) {
    header('location: login.php');
}
include 'config.php';
//اذا تم الضغط على زر تحت الطلب 
if(!empty($_GET['s']) && !empty($_GET['u_id']))
{
    $u_id=$_GET['u_id'];
    $update="UPDATE available_donors SET d_status = 1 WHERE u_id = $u_id";
    mysqli_query($con,$update);
    $_SESSION['under_order']="true";
    echo ("<script LANGUAGE='JavaScript'>
          window.location.href='../bloodbank/available_donors.php';
       </script>");
       exit();
}
// اذا تم الضغط على زر تم التبرع
if(!empty($_GET['done']) && !empty($_GET['ba_id'])&& !empty($_GET['u_id'])&& !empty($_GET['bld_id']))
{
    $ba_id=$_GET['ba_id'];
    $u_id=$_GET['u_id'];
    $bld_id=$_GET['bld_id'];
    $c_id=$_GET['c_id'];
    //ادخال حزمة الدم إلى مستودع الدم
    $insert="INSERT INTO blood_inventory ( ba_id, bld_id,c_id,c_at) VALUES ( '$ba_id', '$bld_id','$c_id', current_timestamp())";
    // حذف المتبرع من قائمة المتبرعين المتاحين
    $del="DELETE FROM available_donors WHERE u_id=$u_id";
    // تغيير حالة التبرع للمستخدم بانه قام بالتبرع 
    $update="UPDATE users SET u_status = 2 WHERE u_id = $u_id";

    mysqli_query($con,$insert);
    mysqli_query($con,$del);
    mysqli_query($con,$update);
    $_SESSION['donate_user']="true";
    echo ("<script LANGUAGE='JavaScript'>
          
          window.location.href='../bloodbank/available_donors.php';
       </script>");
       exit();
}

?>