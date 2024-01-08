<?php
session_start();


if(!isset($_SESSION['ha_id'])){
    header('location: login.php');
    exit();
}
require('../files/config.php');
?>
<!DOCTYPE html>
<html lang="ar">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="enqath platform">
    <meta name="author" content="sam faisal">

    <title>منصةإنقاذ</title>
        <!-- favicon -->
        <link rel="shortcut icon" href="../img/favicon.ico">
 <!-- google fonts -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rakkas&family=Roboto:wght@100;300;400;500&family=Tajawal:wght@500;700;900&display=swap" rel="stylesheet">
 <!--  Font Awesome fonts -->
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- Custom styles for this template -->
    
    <link rel="stylesheet" href="../css/sb-admin-2.css">
    <link rel="stylesheet" href="../css/sam.css">
    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <!-- sweet alert -->
  <script src="../js/sweetalert2.min.js"></script>


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
                <?php  require_once 'nav_bar.php'?>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800 text-right">مخزون الدم المتوفر</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary text-center">جدول حزم الدم المتوفرة </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="text-center">
                                        <tr>
                                            <th>رقم الحزمة</th>
                                            <th> الفصيلة</th>
                                            <th>المدينة</th>
                                            <th>تاريخ توفيره</th>
                                            <th>العمليات</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot class="text-center">


                                    </tfoot>
                                    <tbody class="text-center">

                                        <?php
                                        $result = mysqli_query($con,"SELECT 
                                        blood_inventory.bp_id,
                                        
                                        bld_groups.grp_name,
                                        bld_groups.bld_id,
                                        cities.c_name,
                                        blood_inventory.c_at
                                        FROM 
                                        blood_inventory
                                        JOIN  bld_groups 
                                        on blood_inventory.bld_id = bld_groups.bld_id
                                        JOIN cities
                                        on cities.c_id=blood_inventory.c_id;");

                                        while ($row = mysqli_fetch_array($result)) {

                                         
                                            echo'<tr>
                                            <td>'.$row['bp_id'].'</td>
                                            <td style="direction: ltr;">'.$row['grp_name'].'</td>
                                            <td >'.$row['c_name'].'</td>
                                            <td style="direction: ltr;">'.$row['c_at'].'</td>
                                            <td> <a href="../files/hospital_click.php?bp_id='.$row['bp_id'].'&h_id='.$_SESSION['h_id'].'&ha_id='.$_SESSION['ha_id'].'&bld_id='.$row['bld_id'].'&blood_order='.'" class="btn btn-success btn-icon-split">
                                                    <span class="text">طلب</span>
                                                </a></td>
                                            
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
                    <a class="btn btn-primary" href="">نعم</a>
                </div>
            </div>
        </div>
    </div>
<!--------- the alerts --------->
<?php 
  
  if(isset($_SESSION['package_under_order'])){
  echo "<script>
  Swal.fire(
     'تم طلب الحزمة ',
     'سيتم توصيل كيس الدم  من قبل بنك الدم ',
     'success'
   )
  </script>";
  unset($_SESSION['package_under_order']);
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