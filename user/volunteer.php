<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('location: login.php');
    exit();
}

require_once('../files/config.php');



?>



<!DOCTYPE html>
<html lang="ar">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="platform">
    <meta name="author" content="sam">



    <title>منصةإنقاذ</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="../img/favicon.ico">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rakkas&family=Roboto:wght@100;300;400;500&family=Tajawal:wght@500;700;900&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- sweet alert -->
    <script src="../js/sweetalert2.min.js"></script>

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="../css/sb-admin-2.css">
    <link rel="stylesheet" href="../css/sam.css">
    <style>
        @media (min-width: 992px) {
            .col-lg-6 {

                max-width: 48%;
            }
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php require_once 'side_bar.php'; ?>
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
                    <h1 class="h3 mb-4 text-gray-800 text-right">الحملات التطوعية</h1>



                    <div class="my_cards" style="display: flex;flex-wrap: wrap;flex-direction: row;gap: 15px;">
                        <?php
                        $result = mysqli_query($con, "SELECT 
                    vol_camp.vol_id,
                    vol_camp.vol_name,
                    vol_camp.vol_location,
                    vol_camp.vol_details,
                    vol_camp.vol_founder,
                    vol_camp.vol_date,
                    cities.c_name
                    FROM 
                    vol_camp
                    JOIN cities
                    ON vol_camp.vol_city =cities.c_id where vol_status=1");

                        while ($row = mysqli_fetch_array($result)) {

                            echo '<div class="card mb-4 py-3 border-bottom-primary col-lg-6 shadow">
                        <div class="card-body " style="text-align: right;">

                            <h3 style="margin-bottom: 35px;text-align: center;">' . $row['vol_name'] . '</h3>
                            <p>
                                <b>مكان الحملة:</b>
                                <span>' . $row['c_name'] . '</span>
                            </p>

                            <p>
                                <b> الموقع:</b>
                                <span>' . $row['vol_location'] . '</span>
                            </p>

                            <p>
                            <b>القائم بالحملة:</b>
                            <span>' . $row['vol_founder'] . '</span>
                            </p>

                            <p>
                            <b> تاريخ الحملة:</b>
                                <span>' . $row['vol_date'] . '</span>
                            </p>

                            <p>
                                <b> تفاصيل الحملة:</b>
                                <span>' . $row['vol_details'] . '</span>
                            </p>
                            <div class="card-body text-center">


                                <a href="../files/user_click.php?vol_id=' . $row['vol_id'] . '" class="btn btn-primary btn-icon-split btn-lg">
                                    <span class="icon text-white-50">
                                        <svg class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                        </svg>

                                    </span>
                                    <span class="text">التطوع الآن</span>
                                </a>



                            </div>
                        </div>
                    </div>';
                        }

                        ?>



                    </div>


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


    <!--------- the alerts --------->
    <?php if (isset($_SESSION['vol'])) {

        echo "<script>
 Swal.fire(
    'تم تسجيلك كمتطوع',
    'سيتم التواصل معك من قبل مسؤول الحملة',
    'success'
  )
 </script>";
        unset($_SESSION['vol']);
    } ?>


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