<?php
session_start();

require('../../files/config.php');
//login normal user
if (isset($_POST['login-admin'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];
    $user_authentication_query="select * from admins where a_email='$email' and a_pass='$password'";
    $user_authentication_result=mysqli_query($con,$user_authentication_query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($user_authentication_result);

    if($rows_fetched==0){
        //no user
        //redirecting to login page
        header("Location: ../login.php?error=1");
      exit();

        
        
    }else
    {

        $row=mysqli_fetch_array($user_authentication_result);
        $_SESSION['a_id']=$row['a_id'];
        $_SESSION['user_name']=$row['a_name']; 
        $_SESSION['a_name']=$row['a_name']; 
     

        header('location: ../index.php');
    }

}else{
    echo ("<script LANGUAGE='JavaScript'>
        window.alert('غير مسموح الوصول لهذه الصفحة');
        window.location.href='../index.php';
        </script>");
        exit();
}


?>