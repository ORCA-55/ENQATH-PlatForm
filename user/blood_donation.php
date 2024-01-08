<?php 
session_start();
if(!isset($_SESSION['user_id'])){
    header('location: login.php');
exit();
}
include ('../files/config.php');
$user_id=$_SESSION['user_id'];
$user_query="select u_status from users where u_id='$user_id'";
    $user_result=mysqli_query($con,$user_query) or die(mysqli_error($con));
    $row=mysqli_fetch_array($user_result);
    
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
   <!-- sweet alert -->
   <script src="../js/sweetalert2.min.js"></script>
<!--  font awsome-->
<link rel="stylesheet" href="../css/all.min.css">
<!-- Custom styles for this template-->
    <link rel="stylesheet" href="../css/sb-admin-2.css">
    <link rel="stylesheet" href="../css/sam.css">

</head>

<body id="page-top" >

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
                <?php require_once 'nav_bar.php' ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800 text-right">التبرع بالدم</h1>
                    
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary text-right">شروط التبرع بالدم</h6>
                        </div>
                        <div class="card-body text-right">
                            <ul>
                         <li> <p> أن يكون المتبرع بصحة جيدة ولا يعاني أي أمراض معدية.</p></li>
                            
                         <li> <p> يكون عمر المتبرع من 18-65 سنة.</p></li>
                            
                         <li> <p>  يجب أن لا يقل وزن المتبرع عن 50 كجم.</p></li>
                            
                         <li> <p>  أن يكون النبض بين 50-100 في الدقيقة.</p></li>
                            
                         <li> <p>  أن لا تزيد درجة الحرارة عن 37 درجة مئوية.</p></li>
                            
                         <li> <p>  أن يكون معدل ضغط الدم أقل من120/80 ملم زئبق.</p></li>
                        </ul>
                        </div>
                    </div>
                    <!-- second card -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary text-right">الحالات التي لا يسمح لها بالتبرع بالدم:
                            </h6>
                        </div>
                        <div class="card-body text-right">
                            <ul>
                         <li> <p>  أقل من عمر 18 سنة.</p></li>
                            
                         <li> <p>المصابون بأمراض  معدية مثل (الإيدز، التهاب الكبد ب وج، الزهري، الملاريا).</p></li>
                         <li> <p>  المصابون بأمراض  الدم الوراثية.</p></li>
                         <li> <p>  المصابون بفقر الدم الحاد.</p></li>
                            
                         <li> <p>  المصابون بالأمراض  المزمنة، مثل السكري، ارتفاع ضغط الدم ، السرطان. </p></li>
                            
                        </ul>
                        </div>
                    </div>
                    
                <!-- end second card -->
                <?php
                if($row['u_status']==1){
               echo' <div class="card-body text-center">
                   

                    <a href="../files/user_click.php?donate=yes" class="btn btn-success btn-icon-split btn-lg">
                        <span class="icon text-white-50">
                            <i class="fas fa-check"></i>
                        </span>
                        <span class="text">تبرع الآن</span>
                    </a>
                    
                   
                   
                </div>';
                }
                if($row['u_status']==0){
                    echo' <div class="card-body text-center">
                   

                    <a href="../files/user_click.php?donate=no" class="btn btn-danger btn-icon-split btn-lg">
                        <span class="icon text-white-50">
                            <i class="fas fa-check"></i>
                        </span>
                        <span class="text">تم تسجيلك كمتبرع اضغط لإلغاء تسجيلك</span>
                    </a>
                    
                   
                   
                </div>';

                }
                if($row['u_status']==2){
                    echo' <div class="card-body text-center">
                   

                    <a  class="btn btn-warning btn-icon-split btn-lg">
                        <span class="icon text-white-50">
                        <i class="fa-solid fa-heart-circle-check"></i>
                        </span>
                        <span class="text">لقد قمت بالتبرع بنجاح شكرا لك</span>
                    </a>
                    
                   
                   
                </div>';
                }
                ?>
              <div class="mb-4"></div>
                
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
                    <a class="btn btn-primary" href="../files/logout.php">نعم</a>
                </div>
            </div>
        </div>
    </div>
   <!--------- the alerts --------->
<?php 
if(isset($_SESSION['donate'])){
  
  echo "<script>
  Swal.fire(
     'تم تسجيلك كمتبرع بالدم',
     'سيتم التواصل معك من قبل موظف بنك الدم',
     'success'
   )
  </script>";
  unset($_SESSION['donate']);
 }
 
 if(isset($_SESSION['cancel_donate'])){
  
    echo "<script>
    Swal.fire(
       'تم إلغاء تسجيلك كمتبرع بالدم',
       'شكراً ',
       'error'
     )
    </script>";
   }
   unset($_SESSION['cancel_donate']);
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
</body>

</html>