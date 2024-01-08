
<?php
session_start();
if (!isset($_SESSION['a_id'])) {
    header('location: login.php');
    exit();
}
require_once('../files/config.php')
?>




<!DOCTYPE html>
<html lang="ar">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>منصة إنقاذ</title>
       <!-- favicon -->
       <link rel="shortcut icon" href="../img/favicon.ico">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rakkas&family=Roboto:wght@100;300;400;500&family=Tajawal:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary" dir="rtl">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">

                    <div class="col-lg-7">
                        <div class="p-5 ">
                            <div class="text-center">
                                <h1 class=" text-gray-900 mb-4">منصة إنقاذ</h1>
                                <h2 class="h4 text-gray-700 mb-4">إنشاء حساب مسخدم لمرفق صحي</h2>
                            </div>
                            <form class="user" action="../files/new_user.php" method="post">

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="name" placeholder="الاسم الرباعي" required>
                                    </div>

                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="email" placeholder="البريد الإلكتروني" required>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" name="pass" placeholder="كلمة المرور">
                                    </div>

                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" name="re_pass" placeholder="أعد إدخال كلمة المرور">
                                    </div>

                                </div>





                                <div class="form-group row">

                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <select name="hospital" class="form-select form-control" style="font-size: .8rem;border-radius: 10rem; height: 50px;">
                                            <option selected disabled>اختر المستشفى</option>



                                            <?php

                                            $result = mysqli_query($con, "SELECT * FROM hospitals");

                                            while ($row = mysqli_fetch_array($result)) {

                                                echo '<option value="' . $row['h_id'] . '">' . $row['h_name'] . '</option>';
                                            }
                                            ?>







                                        </select>
                                    </div>

                                    <div class="col-sm-6 mb-3 mb-sm-0">

                                        <select name="gender" class="form-select form-control" style="font-size: .8rem;border-radius: 10rem; height: 50px;">
                                            <option name="gender" selected disabled>اختر الجنس</option>
                                            <option value="1">ذكر</option>
                                            <option value="0">أنثى </option>
                                        </select>

                                    </div>

                                </div>






                                <input type="submit" name="create-hospital-account" class="btn btn-primary btn-user btn-block" value="إنشاء الحساب">

                                <hr>

                            </form>

                            <!-- <div class="text-center"><a class="small" href="">نسيت كلمة المرور</a>
                            </div>
                            <div class="text-center"><a class="small" href="login.html">تملك حساب بالفعل؟ تسحيل
                                    الدخول</a></div> -->
                        </div>
                    </div>
                    <!-- the image -->
                    <div class="col-lg-5 d-none d-lg-block bg-gradient-primary">
                    <img src="../img/ff.png" alt="">

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>