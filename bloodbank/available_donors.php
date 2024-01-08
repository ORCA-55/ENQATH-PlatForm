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
 <!-- google fonts -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rakkas&family=Roboto:wght@100;300;400;500&family=Tajawal:wght@500;700;900&display=swap" rel="stylesheet">
 <!-- Font Awesome  -->
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- Custom styles for this template-->
    
    <link rel="stylesheet" href="../css/sb-admin-2.css">
    <link rel="stylesheet" href="../css/sam.css">
    <link rel="stylesheet" href="bloodbank.css">
    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <!-- sweet alert -->
  <script src="../js/sweetalert2.min.js"></script>




</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php require_once 'side_bar.php';?>

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php  require_once 'nav_bar.php' ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800 text-right">المتبرعين المتاحين</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary text-center">جدول المتبرعين </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="text-center">
                                        <tr>
                                            <th>بيانات المتبرع</th>
                                            <th>المدينة</th>
                                            <th>الفصيلة</th>
                                            <th>تاريخ التبرع</th>
                                            <th>الحالة</th>
                                            <th>تغيير الحالة</th>
                                        </tr>
                                    </thead>
                                    <tfoot class="text-center">

                                    </tfoot>
                                    <tbody class="text-center">
                                      

                                        <?php
                                        
                                        $result = mysqli_query($con, "SELECT available_donors.u_id, cities.c_name, cities.c_id, bld_groups.grp_name, bld_groups.bld_id, available_donors.d_status, available_donors.c_at FROM available_donors JOIN bld_groups on available_donors.bld_id = bld_groups.bld_id JOIN cities ON available_donors.u_city =cities.c_id");
                                        
                                        while ($row = mysqli_fetch_array($result)) {
                                          
                                            
                                           echo '<tr>
                                            <td>
                                                <a href="info_donor.php?u_id='.$row['u_id'].'" class="btn btn-info btn-icon-split" style="direction:rtl;" target="_blank" >
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-info-circle"></i>
                                                    </span>
                                                    <span class="text">عرض</span>
                                                </a>
                                            </td>
                                            <td>'.$row['c_name'].'</td>
                                            <td style="direction: ltr;">'.$row['grp_name'].'</td>
                                            <td style="direction: ltr;">'.$row['c_at'].'<td>';
                                            if($row['d_status']==0){
                                             echo "متوفر";
                                            }
                                            if($row['d_status']==1){
                                                echo "تحت الطلب";
                                               }
                                            
                                            echo'</td>
                                            
                                            <td>
                                                <a href="../files/bb_click.php?s=1&u_id='.$row['u_id'].'" class="btn btn-warning btn-icon-split">
                                                    <span class="text">تحت الطلب</span>
                                                </a>
                                                <a href="../files/bb_click.php?done=1&ba_id='.$_SESSION['ba_id'].'&u_id='.$row['u_id'].'&bld_id='.$row['bld_id'].'&c_id='.$row['c_id'].'" class="btn btn-success btn-icon-split">
                                                    <span class="text">تم التبرع</span>
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
<?php if(isset($_SESSION['under_order']) ){
 
  echo "<script>
  Swal.fire(
     'تم تغيير الحالة إلى تحت الطلب',
     '',
     'success'
   )
  </script>";
  unset($_SESSION['under_order']);
 }
 if(isset($_SESSION['donate_user'])){
    echo "<script>
    Swal.fire(
       'تمت عملية التبرع',
       'تم تسجيل حزمة الدم بمستودع الدم',
       'success'
     )
    </script>";
   }
   unset($_SESSION['donate_user']);
 ?>
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <!-- <script src="../vendor/jquery-easing/jquery.easing.min.js"></script> -->

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