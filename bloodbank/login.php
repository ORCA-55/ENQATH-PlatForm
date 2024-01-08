<!DOCTYPE html>
<html lang="ar">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>تسجيل الدخول | منصة إنقاذ</title>
        <!-- favicon -->
        <link rel="shortcut icon" href="../img/favicon.ico">

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rakkas&family=Roboto:wght@100;300;400;500&family=Tajawal:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="../css/sb-admin-2.css">

<!-- sweet alert -->
<script src="../js/sweetalert2.min.js"></script>



</head>

<body class="bg-gradient-danger" dir="rtl">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">

                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class=" text-gray-900 mb-4">منصة إنقاذ</h1>

                                <h2 class="h4 text-gray-700 mb-5">تسجيل الدخول - بنك الدم </h2>
                            </div>
                            <form class="user" action="../files/log_user.php" method="post">

                                <div class="form-group row">
                            
                                    <div class="col-sm-12 mb-3 mb-sm-4">
                                        <input type="text" class="form-control form-control-user" name="email"
                                            placeholder="البريد الإلكتروني" required>
                                    </div>

                                    <div class="col-sm-12 mb-3 mb-sm-4">
                                        <input type="password" class="form-control form-control-user"
                                            name="password" placeholder="كلمة المرور" required>
                                    </div>

                                </div>

                               



                                <input type="submit" name="BB_acount_login" class="btn btn-danger btn-user btn-block" value="تسجيل الدخول">

                                <!-- <a href="#" class="btn btn-primary btn-user btn-block">إنشاء حساب جديد</a> -->
                                <hr>

                            </form>

                            <!-- <div class="text-center"><a class="small" href="#">نسيت كلمة المرور</a></div> -->
                            <!-- <div class="text-center"><a class="small" href="signup.php">لا تملك حساب؟ تسجيل حساب جديد</a></div> -->
                        </div>
                    </div>
                    <!-- the image -->
                    <div class="col-lg-5 d-none d-lg-block bg-gradient-danger">
                        <img src="../img/blood.png" style="width: 100%;" alt="">
                   </div>
                </div>
            </div>
        </div>

    </div>
    <?php
 if(isset($_GET['error'])&& $_GET['error'] ==1){
  
    echo "<script>
    Swal.fire(
       'خطأ',
       'البريد الإلكتروني أو كلمة المرور خطأ',
       'error'
     )
    </script>";
   }
   ?>
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>