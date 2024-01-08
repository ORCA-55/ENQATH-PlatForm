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

<!-- Font Awesome  -->
<link rel="stylesheet" href="../css/all.min.css">
    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="" dir="rtl">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">

                    <div class="col-lg-7">
                        <div class="p-5 ">
                            <div class="text-center">
                                <h1 class=" text-gray-900 mb-4">منصة إنقاذ</h1>
                                <h2 class="h4 text-gray-700 mb-4">إضافة حملة خيرية</h2>
                            </div>
                            <form class="user" action="../admin/control/insert.php" method="post">

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="name" placeholder="اسم الحملة" required>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <select name="city" class="form-select form-control" style="font-size: .8rem;border-radius: 10rem; height: 50px;">
                                            <option selected disabled>اختر المدينة</option>
                                            <option value="1">عدن</option>
                                            <option value="2">لحج</option>
                                            <option value="3">أبين</option>
                                            <option value="4">حضرموت</option>
                                            <option value="5">صنعاء</option>
                                            <option value="6">عمران</option>
                                            <option value="7">البيضاء</option>
                                            <option value="8">الحديدة</option>
                                            <option value="9">الجوف</option>
                                            <option value="10">المحويت</option>
                                            <option value="11">ذمار</option>
                                            <option value="12">حجة</option>
                                            <option value="13">إب</option>
                                            <option value="14">مأرب</option>
                                            <option value="15">ريمة</option>
                                            <option value="16">صعدة</option>
                                            <option value="17">تعز</option>
                                            <option value="18">الضالع</option>
                                            <option value="19">المهرة</option>
                                            <option value="20">سقطرى</option>
                                            <option value="21">شبوة</option>

                                        </select>
                                    </div>
                                    

                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="amount" placeholder="المبلغ المستهدف">
                                    </div>

                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="founder" placeholder="مؤسس الحملة">
                                    </div>

                                </div>





                                <div class="form-group row">

                                    

                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                    <!-- <input type="text" class="form-control form-control-user" name="founder" placeholder="تفاصيل الحملة"> -->

                                      <textarea class="form-control form-control-user" name="deatils" id="" cols="20" rows="5" style="border-radius: 0;" placeholder="تفاصيل الحملة"></textarea>

                                    </div>

                                </div>



                                <input type="submit" name="create-char-camp" class="btn btn-warning btn-user btn-block" value="إضافة الحملة">

                                <hr>

                            </form>

                            
                        </div>
                    </div>
                    <!-- the image -->
                    <div class="col-lg-5 d-none d-lg-block bg-gradient-warning">
                    <i class="fa-sharp fa-solid fa-hand-holding-dollar fa-lg" style="color: #ffffff;font-size: 8rem;margin: 15rem 10rem;"></i>

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