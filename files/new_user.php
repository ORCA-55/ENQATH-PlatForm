<?php
session_start();
include 'config.php';
function post_data($field) {
    $_POST[$field] ??= '';
    return htmlspecialchars(stripslashes($_POST[$field]));
    
}

//create new account for normal user
if ($_SERVER['REQUEST_METHOD'] ==='POST' && isset($_POST['create-user'])) {
//  print_r($_POST);

$name = post_data('name');
$email = post_data('email');
$pass = post_data('pass');
$ident = post_data('ident');
$re_pass = post_data('re_pass');
$f_num = post_data('f_num');
$s_num = post_data('s_num');
$bld = post_data('bld');
$city = post_data('city');
$district = post_data('district');
$dob = post_data('dob');
$gender = post_data('gender');
$l_d_d = post_data('l_d_d');
$status = post_data('status');


if($_POST['l_d_d']===""){
    $l_d_d='0000-00-00';
    
}

$insert="INSERT INTO users ( u_name, u_email, u_pass, u_ident, u_f_num, u_s_num, u_city, u_district, u_gender, bld_id, u_status, u_dob, l_d_d, c_at) VALUES ( '$name', '$email', '$pass', '$ident', '$f_num', '$s_num', '$city', '$district', '$gender', '$bld', '$status', '$dob', '$l_d_d', current_timestamp())";

mysqli_query($con,$insert);


echo "<meta http-equiv='refresh' content='0;url=../user/login.php?create=yes' />";
    exit();
}

//create new account for blood bank employees
if ($_SERVER['REQUEST_METHOD'] ==='POST' && isset($_POST['create-BBacount'])) {
 
    
    $name = post_data('name');
    $email = post_data('email');
    $pass = post_data('pass');
    $ident = post_data('ident');
    $re_pass = post_data('re_pass');
    $f_num = post_data('f_num');
    
    
    $insert="INSERT INTO bb_accounts( ba_name, ba_email, ba_pass, ba_ident, ba_num, c_at) VALUES ( '$name', '$email', '$pass', '$ident', '$f_num', current_timestamp())";
    
    mysqli_query($con,$insert);
    
    $_SESSION['create_bb_account']="true";

    echo "<meta http-equiv='refresh' content='0;url=../admin/bb_accounts.php' />";
        exit();
    }

//create new account for hospital employees
if ($_SERVER['REQUEST_METHOD'] ==='POST' && isset($_POST['create-hospital-account'])) {
 
    
    $name = post_data('name');
    $email = post_data('email');
    $pass = post_data('pass');
    $re_pass = post_data('re_pass');
    $h_id = post_data('hospital');
    $gender = post_data('gender');

    
    
    $insert="INSERT INTO hos_emp_acc( h_id, ha_name, ha_email, ha_pass,ha_gender,c_at) VALUES ( '$h_id', '$name','$email', '$pass', '$gender',  current_timestamp())";
    
    mysqli_query($con,$insert);
    $_SESSION['create_hos_emp_account']="true";
    echo "<meta http-equiv='refresh' content='0;url=../admin/hospital_accounts.php' />";
        exit();
    }

?>