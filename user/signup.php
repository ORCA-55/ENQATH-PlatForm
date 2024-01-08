<!DOCTYPE html>
<html lang="ar">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="sam faisal">

    <title>مستخدم جديد | منصة إنقاذ</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="../img/favicon.ico">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rakkas&family=Roboto:wght@100;300;400;500&family=Tajawal:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-success" dir="rtl">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">

                    <div class="col-lg-7">
                        <div class="p-5 ">
                            <div class="text-center">
                                <h1 class=" text-gray-900 mb-4">منصة إنقاذ</h1>
                                <h2 class="h4 text-gray-700 mb-4">إنشاء حساب جديد</h2>
                            </div>
                            <form class="user" method="post" action="../files/new_user.php">

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="name" class="form-control form-control-user" placeholder="الاسم الرباعي" required>
                                    </div>

                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="email" class="form-control form-control-user" placeholder="البريد الإلكتروني" required>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" name="pass" placeholder="كلمة المرور" required>
                                    </div>

                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" name="re_pass" placeholder="أعد إدخال كلمة المرور" required>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="tel" class="form-control form-control-user" name="f_num" placeholder="رقم هاتف (إجباري)" required style="
    direction: rtl;
">
                                    </div>

                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="tel" class="form-control form-control-user" name="s_num" placeholder="رقم هاتف (إختياري)" style="
    direction: rtl;
">
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="ident" placeholder=" الهوية - جواز السفر" required>
                                    </div>

                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <select name="bld" class="form-select form-control" style="font-size: .8rem;border-radius: 10rem; height: 50px;" required>
                                            <option value="" selected disabled>اختر فصيلة الدم </option>
                                            <option value="1">A+</option>
                                            <option value="2">B+</option>
                                            <option value="3">O+</option>
                                            <option value="4">AB+</option>
                                            <option value="5">A-</option>
                                            <option value="6">B-</option>
                                            <option value="7">O-</option>
                                            <option value="8">AB-</option>

                                        </select>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <select name="city" class="form-select form-control" style="font-size: .8rem;border-radius: 10rem; height: 50px;" required>
                                            <option value="" selected disabled>اختر المدينة</option>
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

                                    <div class="col-sm-6 mb-1 mb-sm-0">
                                        <input type="text" name="district" class="form-control form-control-user" placeholder="المنطقة" required>
                                    </div>

                                </div>

                                <div class="form-group row mb-0">

                                    <label for="" class="d-block text-center" style="margin-right: 20px;">تاريخ الميلاد</label>

                                </div>


                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="date" name="dob" class="form-control form-control-user" placeholder="تاريخ الميلاد" required>
                                    </div>

                                    <div class="col-sm-6 mb-3 mb-sm-0">

                                        <select name="gender" class="form-select form-control" style="font-size: .8rem;border-radius: 10rem; height: 50px;" required>
                                            <option value="" selected disabled>اختر الجنس</option>
                                            <option value="1">ذكر</option>
                                            <option value="0">أنثى </option>
                                        </select>

                                    </div>

                                </div>


                                <div class="form-group row mb-0">

                                    <label for="" class="d-block text-center" style="margin: auto;">تاريخ آخر تبرع <br>(قم بتركه فارغ في حال لم تتذكر التاريخ أو لم تتبرع من قبل )</label>

                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="date" name="l_d_d" class="form-control form-control-user">
                                    </div>

                                </div>


                                <input type="hidden" class="" name="status" value="1">












                                <input type="submit" name="create-user" class="btn btn-success btn-user btn-block" value="تسجيل">

                                <hr>

                            </form>

                            <div class="text-center"><a class="small" href="#">نسيت كلمة المرور</a>
                            </div>
                            <div class="text-center"><a class="small" href="login.php">تملك حساب بالفعل؟ تسحيل
                                    الدخول</a></div>
                        </div>
                    </div>
                    <!-- the image -->
                    <div class="col-lg-5 d-none d-lg-block bg-gradient-success ">
                        <img style="width: 100%;margin: 140px 0;" src="../img/boy.png" alt="">

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