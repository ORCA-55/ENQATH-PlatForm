<?php
session_start();
require('../files/config.php');
if (!isset($_SESSION['ba_id'])) {
    header('location: login.php');
    exit();
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
    <!-- RTL FILE CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.rtl.min.css" integrity="sha384-PRrgQVJ8NNHGieOA1grGdCTIt4h21CzJs6SnWH4YMQ6G5F5+IEzOHz67L4SQaF0o" crossorigin="anonymous">
    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rakkas&family=Roboto:wght@100;300;400;500&family=Tajawal:wght@500;700;900&display=swap" rel="stylesheet">
    <!-- google font -->
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- Custom styles for this template-->

    <link rel="stylesheet" href="../css/sb-admin-2.css">
    <link rel="stylesheet" href="../css/sam.css">
    <link rel="stylesheet" href="bloodbank.css">

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
                    <h1 class="h3 mb-4 text-gray-800 text-right">معلومات المتبرع</h1>


                    <div class="my_cards" style="display: flex;justify-content: space-around;">






                        <div class="card mb-4 py-3 border-bottom-danger col-lg-6 shadow">
                            <div class="card-body " style="text-align: right;">

                               
                            <h3 style="margin-bottom: 35px;text-align: center;">تفاصيل المتبرع</h3>
                            <?php
                                   $u_id=$_GET['u_id'];  
                                        $result = mysqli_query($con, "
                                        SELECT  u_name,u_email,u_f_num,u_s_num,u_gender,u_dob,l_d_d,u_district,grp_name,c_name
                                        FROM users
                                        JOIN  bld_groups 
                                        on users.bld_id = bld_groups.bld_id
                                        JOIN cities
                                        ON users.u_city =cities.c_id
                                        where u_id=$u_id");
                                        
                                        while ($row = mysqli_fetch_array($result)) {
                                       
                                echo '<p>
                                    <b>اسم المتبرع:</b>
                                    <span style="font-weight: 600;color: red;">'.$row['u_name'].'</span>
                                </p>

                                <p>
                                    <b> البريد الإلكتروني:</b>
                                    <span>'.$row['u_email'].'</span>
                                </p>
                                <p>
                                    <b> رقم الهاتف </b>
                                    <span style="font-weight: 600;color: green;">'.$row['u_f_num'].'</span>
                                </p>
                                <p>
                                    <b> رقم هاتف آخر:</b>
                                    <span style="font-weight: 600;color: green;">'.$row['u_s_num'].'</span>
                                </p>
                                <P>
                                    <b> الفصيلة:</b>
                                    <span style>'.$row['grp_name'].'</span>
                                </p>
                                <P>
                                    <b> الجنس:</b>
                                    <span>';if($row['u_gender']==1){
                                        echo "ذكر";
                                    }else{
                                        echo "أنثى";
                                    };echo'</span>
                                </p>
                                <P>
                                    <b> المدينة:</b>
                                    <span>'.$row['c_name'].'</span>
                                </p>
                                 <P>
                                    <b> المنطقة:</b>
                                    <span>'.$row['u_district'].'</span>
                                </p>
                                <P>
                                    <b> تاريخ الميلاد:</b>
                                    <span>'.$row['u_dob'].'</span>
                                </p>
                                <P>
                                    <b> آخر عملية تبرع:</b>
                                    <span>'.$row['l_d_d'].'</span>
                                </p>';
                                        }
                                        ?>
                            </div>
                        </div>













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