<?php
session_start();


if(!isset($_SESSION['ha_id'])){
    header('location: login.php');
    exit();
}
require('../files/config.php');
$h_id=$_SESSION['h_id'];
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
<!-- Font Awesome  -->
<link rel="stylesheet" href="../css/all.min.css">
<!-- Custom styles for this template-->
   
    <link rel="stylesheet" href="../css/sb-admin-2.css">
    <link rel="stylesheet" href="../css/sam.css">
        <!-- Custom styles for this page -->
        <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
 <!-- sweet alert -->
 <script src="../js/sweetalert2.min.js"></script>

</head>

<body id="page-top" >

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
                <?php  require_once 'nav_bar.php'?>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800 text-right">طلبات الدم القائمة</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary text-center">جدول طلبات الدم </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="text-center">
                                        <tr>
                                           <th>رقم الطلب</th>
                                            <th> الفصيلة</th>
                                            <th>رقم الحزمة</th>
                                            <th>الموظف</th>
                                            <th>تاريخ الطلب</th>
                                            <th>العمليات</th>
                                        </tr>
                                    </thead>
                                    <tfoot class="text-center">
                                     
                                    
                                    </tfoot>
                                    <tbody class="text-center">
                                    <?php
                                        $result = mysqli_query($con,"SELECT
                                        hospitals_orders.ho_id, 
                                        hospitals_orders.bp_id,
                                        hospitals_orders.c_at,
                                        hos_emp_acc.ha_name,
                                        hospitals.h_id,
                                        bld_groups.grp_name,
                                        bld_groups.bld_id
                                       
                                        FROM 
                                        hospitals_orders
                                        JOIN  bld_groups 
                                        on hospitals_orders.bld_id = bld_groups.bld_id
                                        JOIN  hos_emp_acc 
                                        on hospitals_orders.ha_id = hos_emp_acc.ha_id
                                         JOIN  hospitals 
                                        on hospitals_orders.h_id = hospitals.h_id
                                        where hospitals.h_id=$h_id");

                                        while ($row = mysqli_fetch_array($result)) {

                                           

                                            echo'
                                            <tr>
                                            <td>'.$row['ho_id'].'</td>
                                              <td style=" direction: ltr;">'.$row['grp_name'].'</td>
                                              <td>'.$row['bp_id'].'</td>
                                              <td>'.$row['ha_name'].'</td>
                                              <td style=" direction: ltr;">'.$row['c_at'].'</td>
                                              <td>
                                                  <a href="../files/hospital_click.php?ho_id='.$row['ho_id'].'&bp_id='.$row['bp_id'].'&h_id='.$row['h_id'].'&ha_id='.$_SESSION['ha_id'].'&bld_id='.$row['bld_id'].'&receive_order='.'" class="btn btn-success btn-icon-split">
                                                      <span class="text">تم استلام الحزمة</span>
                                                  </a>
                                              </td>
                                          </tr>';
                                        }
                                        ?>
                                       
                                 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- end table -->
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php  include_once('footer.php')?>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                    <a class="btn btn-primary" href="">نعم</a>
                </div>
            </div>
        </div>
    </div>
<!--------- the alerts --------->
<?php 
  
  if(isset($_SESSION['receive_package'])){
  echo "<script>
  Swal.fire(
     'تم تسجيل استلام الحزمة ',
     '',
     'success'
   )
  </script>";
  unset($_SESSION['receive_package']);
 }
 ?>
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>
    <!-- google font -->
    <script src="../js/all.min.js"></script>
    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>

    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>
</body>

</html>