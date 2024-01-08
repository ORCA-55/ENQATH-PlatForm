<?php
session_start();
include 'config.php';
function post_data($field) {
    $_POST[$field] ??= '';
    return htmlspecialchars(stripslashes($_POST[$field]));
  
}

if($_SERVER['REQUEST_METHOD'] ==='POST'){
$f_name = post_data('f_name');
$l_name = post_data('l_name');
$email = post_data('email');
$msg = post_data('message');
$insert ="insert into contact_us(f_name,l_name,email,msg) values('$f_name','$l_name','$email','$msg')";
mysqli_query($con,$insert);
$_SESSION['sent_contact']="true";
echo "<meta http-equiv='refresh' content='0;url=../index.php'/>";
    exit();
}



