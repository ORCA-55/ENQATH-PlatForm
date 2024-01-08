<?php
session_start();
if (!isset($_SESSION['a_id'])) {
    header('location: login.php');
    exit();
}
require ('../files/config.php');
function getCount($table){
    global $con;
    $result = mysqli_query($con, "SELECT COUNT(*) FROM $table");
    $result=mysqli_fetch_array($result);
     echo $result[0];
}

function getSum($table,$col){
    global $con;
    $result = mysqli_query($con, "SELECT SUM($col) FROM $table");
    $result=mysqli_fetch_array($result);
     echo $result[0];
}

?>


<!DOCTYPE html>
<html lang="ar">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="platform">
    <meta name="author" content="sam">

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

    <link rel="stylesheet" href="../css/sb-admin-2.css">
    <link rel="stylesheet" href="../css/sam.css">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php require_once 'side_bar.php' ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php require_once 'nav_bar.php' ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800 text-right">الإحصائيات العامة</h1>
                    <!-- first row -->
                    <div class="row">

                        <!-- Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2" style="text-align: right;">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                عدد المستخدمين</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php getCount("users");?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa-solid fa-user fa-2x "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Card Example -->

                        <!-- Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2" style="text-align: right;">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                عدد المتبرعين</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php getCount("available_donors");?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-heart-pulse fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Card Example -->
                        <!-- Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2" style="text-align: right;">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                عدد المستشفيات</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php getCount("hospitals");?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-regular fa-hospital fa-2x "></i>
                                            <i class=""></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Card Example -->

                    </div>
                    <!-- end first row -->
                    <!-- second row -->
                    <div class="row">

                        <!-- Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2" style="text-align: right;">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                عدد الحملات الخيرية</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php getCount("char_camp");?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-hand-holding-dollar fa-2x "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Card Example -->

                        <!-- Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2" style="text-align: right;">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                عدد الحملات التطوعية</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php getCount("vol_camp");?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-handshake-angle fa-2x "></i>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Card Example -->
                        <!-- Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2" style="text-align: right;">
                                            <div class="text-xs font-weight-bold text-warning  text-uppercase mb-1">
                                                مبالغ التبرع</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php getSum("char_camp","ch_raised");?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign  fa-2x "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Card Example -->

                    </div>
                    <!-- end second row -->

                    <!-- third row -->
                    <div class="row">

                        <!-- Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2" style="text-align: right;">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                عدد طلبات حزم الدم</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php getCount("hospitals_orders");?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-hand-holding-droplet fa-2x "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Card Example -->

                        <!-- Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2" style="text-align: right;">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                عدد حسابات المستشفيات</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php getCount("hos_emp_acc");?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-solid fa-user-nurse fa-2x "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Card Example -->
                        <!-- Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2" style="text-align: right;">
                                            <div class="text-xs font-weight-bold text-danger  text-uppercase mb-1">
                                                 عدد حسابات بنك الدم</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php getCount("bb_accounts");?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa-regular fa-handshake fa-2x "></i>
            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end Card Example -->

                    </div>
                    <!-- end third row -->
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include_once('footer.php') ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">هل تريد تسجيل الخروج؟</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">إلغاء</button>
                    <a class="btn btn-primary" href="../files/logout.php">نعم</a>
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
    <!-- google font -->
    <script src="../js/all.min.js"></script>
</body>

</html>