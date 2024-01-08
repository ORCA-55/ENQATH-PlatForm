<?php
session_start();

require('config.php');
//login normal user
if (isset($_POST['login-user'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];
    $user_authentication_query="select * from users where u_email='$email' and u_pass='$password'";
    $user_authentication_result=mysqli_query($con,$user_authentication_query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($user_authentication_result);

    if($rows_fetched==0){
        //no user
        //redirecting to login page
        $_SESSION['error_auth']="true";
        header("Location: ../user/login.php");
       exit();
        
        
    }else
    {

        $row=mysqli_fetch_array($user_authentication_result);
        $_SESSION['user_id']=$row['u_id'];
        $_SESSION['user_name']=$row['u_name'];
        $_SESSION['u_gender']=$row['u_gender'];
     

        header('location: ../user/index.php');
        exit();
    }

}  
//login bank blood account
 else if (isset($_POST['BB_acount_login'])) {

    
    $email=$_POST['email'];
    $password=$_POST['password'];
    $user_authentication_query="select * from bb_accounts where ba_email='$email' and ba_pass='$password'";
    $user_authentication_result=mysqli_query($con,$user_authentication_query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($user_authentication_result);

    if($rows_fetched==0){
        //no user
        //redirecting to login page
        header("Location: ../bloodbank/login.php?error=1");

       
        exit();
        
    }else{

        $row=mysqli_fetch_array($user_authentication_result);
        $_SESSION['ba_id']=$row['ba_id'];
        $_SESSION['ba_name']=$row['ba_name']; 
       
        header('location: ../bloodbank/available_donors.php');
        exit();
    }

    //log in hospital account
}else if (isset($_POST['hospital_acount_login'])) {

    
    $email=$_POST['email'];
    $password=$_POST['password'];
    $user_authentication_query="select hos_emp_acc.ha_id,
    hos_emp_acc.ha_name,
    hos_emp_acc.h_id,
    concat(hospitals.h_name,' - ',cities.c_name) as hos_name
    
    from hos_emp_acc
    INNER join hospitals
    on hospitals.h_id =  hos_emp_acc.h_id
    INNER  JOIN cities
    on cities.c_id=hospitals.h_city where ha_email='$email' and ha_pass='$password'";
    $user_authentication_result=mysqli_query($con,$user_authentication_query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($user_authentication_result);

    if($rows_fetched==0){
        //no user
        //redirecting to login page
        header("Location: ../hospital/login.php?error=1");

        exit();
        
    }else{

        $row=mysqli_fetch_array($user_authentication_result);
        $_SESSION['ha_id']=$row['ha_id'];
        $_SESSION['ha_name']=$row['ha_name']; 
        $_SESSION['h_id']=$row['h_id'];
        $_SESSION['hos_name']=$row['hos_name']; 


        header('location: ../hospital/available_blood.php');
exit();
    }
    
    
        
    
}else{
    echo ("<script LANGUAGE='JavaScript'>
        window.alert('غير مسموح الوصول لهذه الصفحة');
        window.location.href='../index.php';
        </script>");
        exit();
}


?>