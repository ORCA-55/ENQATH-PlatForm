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
                    <h1 class="h3 mb-4 text-gray-800 text-right">حسابات  المستشفيات المسجلة</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary text-center">جدول حسابات المرافق الصحية المسجلة</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="text-center">
                                        <tr>
                                            <th>اسم الموظف</th>
                                            <th>الإيميل</th>
                                            <th>كلمة المرور</th>
                                            <th>المستشفى</th> 
                                            <th>المدينة</th>
                                            <th>تاريخ إنشاء الحساب</th>
                                            <th>العمليات</th>
                                        </tr>
                                    </thead>
                                    <tfoot class="text-center">

                                    </tfoot>
                                    <tbody class="text-center">
                                      

                                        <?php
                                        
                                        $result = mysqli_query($con, "SELECT ha_id,ha_name,ha_email,ha_pass,h_name,hos_emp_acc.c_at,c_name FROM `hos_emp_acc` INNER JOIN hospitals ON hospitals.h_id=hos_emp_acc.h_id INNER JOIN cities ON hospitals.h_city=cities.c_id");
                                        
                                        while ($row = mysqli_fetch_array($result)) {
                                       
                                            
                                            
                                          echo'<tr>
                                            <td>'.$row['ha_name'].'</td>
                                            <td>'.$row['ha_email'].'</td>
                                            <td>'.$row['ha_pass'].'</td>
                                            <td>'.$row['h_name'].'</td>
                                            <td>'.$row['c_name'].'</td>
                                            
                                            <td style="direction: ltr;">'.$row['c_at'].'</td>
                                            <td><a href="control/delete.php?ha_id='.$row['ha_id'].'" class="btn btn-danger btn-circle">
                                            <i class="fas fa-trash"></i></a></td>
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
    <?php 
     //alert create account
    if(isset($_SESSION['create_hos_emp_account'])){

  echo "<script>
  Swal.fire(
     'تم إنشاء حساب',
     'موظف مستشفى',
     'success'
   )
  </script>";
  unset($_SESSION['create_hos_emp_account']);

 }
 //alert delete account
 if(isset($_SESSION['delete_hos_emp_account'])){

    echo "<script>
    Swal.fire(
       'تم حذف الحساب',
       '',
       'success'
     )
    </script>";
    unset($_SESSION['delete_hos_emp_account']);
    }?>
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