<?php session_start();
if (!isset($_SESSION['user_id'])) {
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
    <meta name="description" content="enqath platform">
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
    <!-- Custom styles for this template -->

    <link rel="stylesheet" href="../css/sb-admin-2.css">
    <link rel="stylesheet" href="../css/sam.css">

    <script src="../js/sweetalert2.min.js"></script>

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
                    <h1 class="h3 mb-4 text-gray-800 text-right">الرئيسية</h1>

                    <!-- first card -->
                    <div class="card shadow mb-4">

                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary text-right">أسباب وأهمية التبرع بالدم</h6>
                        </div>
                        <div class="card-body text-right">
                            <h5> تكمن أهمية التبرع بالدم في الحفاظ على الأرواح عن طريق نقل الدم إلى الحالات التالية:
                            </h5>
                            <ul>
                                <li>
                                    <p>الأطفال المصابون بفقر الدم الحاد الذي ينتج غالبًا عن الملاريا أو سوء التغذية.</p>
                                </li>

                                <li>
                                    <p>حالات الطوارئ والحوادث الشديدة كحوادث السيارات، والحروق، والكوارث.</p>
                                </li>

                                <li>
                                    <p>في حالة حدوث مضاعفات الحمل (مثل: الحمل خارج الرحم، والنزيف قبل أو أثناء أو بعد الولادة).</p>
                                </li>

                                <li>
                                    <p>المرضى المصابون باضطرابات الدم، ونخاع العظم، واضطرابات الهيموغلوبين الموروثة، وحالات نقص المناعة.</p>
                                </li>

                                <li>
                                    <p>كما أنها ضرورية لعمليات نقل الدم المنتظمة للأشخاص الذين يعانون من حالات (مثل: الثلاسيميا، ومرض الخلايا المنجلية)، وتستخدم لصنع مواد (مثل: عوامل التجلط للأشخاص المصابين بالهيموفيليا).</p>
                                </li>

                                <li>
                                    <p>مرضى السرطان.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- second card -->
                    <div class="card shadow mb-4">

                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary text-right">الأشخاص الذين لا يمكنهم التبرع بالدم:</h6>
                        </div>
                        <div class="card-body text-right">
                            <ul>
                                <li>
                                    <p>المصابون بالعدوى ونزلات البرد: إذا كان لدى المتبرع نزلة برد أو إنفلونزا أو التهاب في الحلق أو أي عدوى أخرى.</p>
                                </li>

                                <li>
                                    <p>إذا أجرى المتبرع وشمًا أو ثقبًا في الجسم مؤخرًا، فلا يمكنه أن يتبرع بالدم خلال 6 أشهر اعتبارًا من تاريخ خضوعه لهذا الإجراء، أما إذا أُجرِيَ الثقبُ على يد مهني صحي معتَمَد وزال أي التهاب زوالًا تامًّا، فيمكن للفرد أن يتبرع بالدم بعد مضي 12 ساعة.</p>
                                </li>

                                <li>
                                    <p>إذا خضع المتبرع لإجراءٍ جراحي بسيط، فعليه أن ينتظر 24 ساعة قبل التبرع بالدم، بينما عليه أن ينتظر شهرًا واحدًا في حال خضوعه لعملية جراحية.</p>
                                </li>

                                <li>
                                    <p>في حالة السفر إلى مناطق تستوطن فيها حالات العدوى المنقولة عن طريق البعوض (مثل: الملاريا، وحمى الضنك، وفيروس زيكا) فيجب تجنب التبرع بالدم مؤقتًا.</p>
                                </li>

                                <li>
                                    <p>تعاطي المخدرات.</p>
                                </li>

                                <li>
                                    <p>الإصابة بأمراض مُعْدِية (مثل: الإيدز، والتهاب الكبد "ب"، و"ج"، والزهري، والملاريا).</p>
                                </li>
                                <li>
                                    <p>لا يمكن للحامل التبرع بالدم. ويوصى بعدم التبرع بالدم أثناء الإرضاع، كما ينبغي مرور 9 أشهر على الأقل (مثل: فترة الحمل) قبل التبرع بالدم بعد الولادة، ومرور حتى 3 أشهر بعد أن يُفطم المولود بشكل ملحوظ.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- third card -->
                    <div class="card shadow mb-4">

                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary text-right">إرشادات قبل التبرع بالدم:</h6>
                        </div>
                        <div class="card-body text-right">
                            <ul>
                                <li>
                                    <p>من المهم تناول وجبة خفيفة قبل التبرع بالدم، وتناول الطعام بشكل منتظم بشكل عام؛ للحفاظ على استقرار مستوى السكر في الدم، وتجنُّب الشعور بالدوار بعد التبرع.</p>
                                </li>

                                <li>
                                    <p>شرب 500 مل من الماء مباشرة قبل التبرع بالدم لتجنُّب الدُّوَار أو الإغماء بعد التبرع بالدم.</p>
                                </li>

                                <li>
                                    <p>تجنُّب القيام بأي تمارين رياضية شديدة أو رفع الأحمال الثقيلة في يوم التبرع بالدم.</p>
                                </li>

                                <li>
                                    <p>يوصى بالحصول على قسط كامل من النوم ما بين 7 إلى 9 ساعات في الليلة السابقة للتبرع.</p>
                                </li>


                            </ul>
                        </div>
                    </div>

                    <!-- fourth card -->
                    <div class="card shadow mb-4">

                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary text-right">أسباب وأهمية التبرع بالدم</h6>
                        </div>
                        <div class="card-body text-right">
                            <h5>إرشادات بعد التبرع بالدم:</h5>
                            <ul>
                                <li>
                                    <p>يجب أن تستريح على مقعدك لمدة 2- 5 دقائق، ثم خُذْ قسطًا من الراحة لمدة 10- 15 دقيقة قبل مغادرة مكان التبرع بالدم.</p>
                                </li>

                                <li>
                                <p>تجنب النشاط البدني الشديد في يوم التبرع بالدم.</p>
                                </li>

                                <li>
                                <p>اشرب السوائل وتناول وجبة خفيفة.</p>
                                </li>

                                <li>
                                <p>إذا شعرت بالدوار (حرارة، تعرُّق، ارتعاش، رعشة أو غثيان)، فاستلقِ على الفور وخُذْ قسطًا من الراحة حتى تشعر بتحسُّن، مع شرب الكثير من السوائل.</p>
                                </li>
                                <li>
                                <p>عادةً ما تكون الكدمات الناتجة مكان الإبرة غير ضارة وتختفي بمرور الوقت.</p>
                                </li>
                                <li>
                                <p>إذا تكرر النزيف، فاجلس وارفع ذراعك، واضغط على المنطقة التي يخرج منها الدم لمدة 5 دقائق على الأقل.</p>
                                </li>

                            </ul>
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
    <script src=../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>
    <!-- google font -->
    <script src="../js/all.min.js"></script>
</body>

</html>