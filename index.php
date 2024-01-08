<?php
session_start();

?>
<!doctype html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 
     تم تطوير المنصة بالكامل من قبل المطور سام فيصل اليافعي  يمكنك التواصل عبر تويتر 
     @0RCA_6
 -->
    <meta name="description" content="ENQATH PLATFORM">
    <meta name="author" content="SAM FAISAL">

    <title>منصة إنقاذ | ENQATH</title>
  <!-- favicon -->
  <link rel="shortcut icon" href="img/favicon.ico">
 <!-- sweet alert -->
 <script src="js/sweetalert2.min.js"></script>

    <!-- the animation of the photos -->
    <style>
        img.vert-move {
            -webkit-animation: mover 0.8s infinite alternate;
            animation: mover 1s infinite alternate;
        }

        img.vert-move {
            -webkit-animation: mover 1s infinite alternate;
            animation: mover 0.7s infinite alternate;
        }

        @-webkit-keyframes mover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-10px);
            }
        }

        @keyframes mover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-10px);
            }
        }
    </style>
    <!-- bootstrap FILES -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Rakkas&family=Roboto:wght@100;300;400;500&family=Tajawal:wght@500;700;900&display=swap"
        rel="stylesheet">
    <!-- main css -->
    <link href="css/template.css" rel="stylesheet">


</head>

<body id="section_1" dir="rtl">
  <!--------- the alerts --------->
  <?php 
  
  if(isset($_SESSION['sent_contact'])){
  echo "<script>
  Swal.fire(
     'تم الإرسال ',
     'سيتم الرد عليك  شكراً لتواصلك ',
     'success'
   )
  </script>";
  unset($_SESSION['sent_contact']);
 }
 ?>

    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="user/login.php">
                <img src="img/logo.png" class="logo img-fluid" alt="Kind Heart Charity">
                <span>
                    منصة إنقاذ
                    <small>ساهم بإنقاذ حياة</small>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#top">الرئيسية</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#donateblood">التبرع بالدم</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#Campaigns">الحملات الخيرية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#story">قصتنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#team">الفريق</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="#contact">تواصل معنا</a>
                    </li>

                    <!-- <li class="nav-item dropdown">
                            <a class="nav-link click-scroll dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">News</a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="news.html">News Listing</a></li>

                                <li><a class="dropdown-item" href="news-detail.html">News Detail</a></li>
                            </ul>
                        </li> -->

                    <!-- <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_6">Contact</a>
                        </li> -->

                    <li class="nav-item ms-3">
                        <a class="nav-link custom-btn custom-border-btn btn" href="user/login.php">تسجيل الدخول </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>

        <section class="hero-section hero-section-full-height">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12 col-12 p-0">
                        <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/slide/child.jpg"
                                        class="carousel-image
                                         img-fluid" alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>الحملات الخيرية</h1>

                                        <p style="color: white;">قال تعالى: {لَنْ تَنَالُوا الْبِرَّ حَتَّى تُنْفِقُوا مِمَّا تُحِبُّونَ}</p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="img/slide/family.png"
                                        class="carousel-image img-fluid" alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>سلل الغذاء</h1>

                                        <p style="color: white;">ساعد الغير بما يحتاج لتنعم بالخير </p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <img src="img/slide/donateblood.jpg"
                                        class="carousel-image img-fluid" alt="...">

                                    <div class="carousel-caption d-flex flex-column justify-content-end">
                                        <h1>التبرع بالدم</h1>

                                        <p style="
                                        color: white;
                                    ">قطرة دم قد تكون أغلى هدية يمكن أن تقدمها لشخص آخر</p>
                                    </div>
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#hero-slide"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- start new section -->
        <section class="banner section-padding cta-section"
            style="margin-top: 3rem;background-color: var(--section-bg-color);" id="blood">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="wrapper">
                            <div class="content" id="donateblood">
                                <h1>التبرع بالدم</h1>
                                <p style="font-size: 20px;">
                                    إنطلقت منصة إنقاذ بفكرتها الأولى والأساسية وهي تنظيم عملية التبرع بالدم بين
                                    المتبرعين وبنوك الدم وإحتياجات المستشفيات لحزم الدم
                                    ,التبرع بالدم عمل منقذ للأرواح ينم عن التضامن مع الآخرين وإنقاذ الكثير في الحالات
                                    الطارئة وقد قال الله تعالى
                                    {وَمَنْ أَحْيَاهَا فَكَأَنَّمَا أَحْيَا النَّاسَ جَمِيعًا }.
                                    <br><br>
                                    ففي التبرع بالدم إنقاذ لحياة مريض أو جريح فأنظر إلى الثواب والأجر العظيم لتبرعك
                                    بالدم,
                                    و التبرع المنتظم بالدم يضمنان حصول الجميع على الدم عند حاجتهم له وتوفير حماية ثمنية
                                    للمرضى وللمجتمع.


                                    <br><br>
                                    شكراً جزيلاً لجميع الذين تبرعوا وشاركوا في تنظيم حملاتنا للتبرع بالدم ونُقدر
                                    مساهماتكم في إنجاحها
                                    ومساعدتكم في نشر الوعي عن أهميةالمشاركة والمساهمة في إنقاذ حياة الآخرين.


                                </p>
                                                        <!-- <div class="btn-002">
                                        <ul>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Follow Us</a></li>
                                        </ul>
                                    </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="img-wrapper">
                            <div class="banner-img">
                                <img src="img/donation-02.png" class="vert-move" style="
              width: 100%;
          ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- end new section -->

        <section class="section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12 text-center mx-auto">
                        <h2 class="mb-5">مرحباً بالمنقذ في منصة إنقاذ</h2>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="#" class="d-block">
                                <img src="img/icons/hands.png" class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text">كن <strong>متطوع</strong></p>
                            </a>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="#" class="d-block">
                                <img src="img/icons/heart.png" class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text"><strong>أهتم</strong> بمدينتك</p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="#" class="d-block">
                                <img src="img/icons/receive.png" class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text">تبرع <strong>بالدم</strong></p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="#" class="d-block">
                                <img src="img/icons/scholarship.png" class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text"><strong>ادعم</strong> التعليم</p>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="section-padding section-bg" id="section_2">
            <div class="container">
                <div class="row">
                    <!-- the first column -->
                    <div class="col-lg-6 col-12 mb-5 mb-lg-0" style="
    background-color: white;
    border-radius: 20px;
">
                        <img src="img/logo.png" class="custom-text-box-image img-fluid" alt=""
                            style="max-width: 60%;height: auto;margin: 0 20%;">

                        <div class="custom-text-box mb-lg-0">
                            <h5 class="mb-3">أهداف إنقاذ:</h5>

                            <p>لمنصة إنقاذ أهداف تسعى للوصول لها بكافة الإمكانيات التي تستطيع توفيرها منها:</p>

                            <ul class="custom-list mt-2" style="
                                        padding-right: 0px;
                                    ">
                                <li class="custom-list-item d-flex">
                                    <i class="bi-check custom-text-box-icon me-2"></i>
                                    تسهيل عملية التبرع بالدم
                                </li>

                                <li class="custom-list-item d-flex">
                                    <i class="bi-check custom-text-box-icon me-2"></i>
                                    ربط بنك الدم بالمتبرعين
                                </li>
                                <li class="custom-list-item d-flex">
                                    <i class="bi-check custom-text-box-icon me-2"></i>
                                    ربط المستشفيات ببنك الدم
                                </li>
                                <li class="custom-list-item d-flex">
                                    <i class="bi-check custom-text-box-icon me-2"></i>
                                    توفير حزم الدم للمستشفيات
                                </li>
                                <li class="custom-list-item d-flex">
                                    <i class="bi-check custom-text-box-icon me-2"></i>
                                    دعم المشاريع الصحية
                                </li>
                                <li class="custom-list-item d-flex">
                                    <i class="bi-check custom-text-box-icon me-2"></i>
                                    دعم الحملات الطبية
                                </li>
                                <li class="custom-list-item d-flex">
                                    <i class="bi-check custom-text-box-icon me-2"></i>
                                    دعم المشاريع التنموية
                                </li>
                                <li class="custom-list-item d-flex">
                                    <i class="bi-check custom-text-box-icon me-2"></i>
                                    دعم المشاريع التعليمية
                                </li>
                                <li class="custom-list-item d-flex">
                                    <i class="bi-check custom-text-box-icon me-2"></i>
                                    دعم الحملات التطوعية
                                </li>
                                <li class="custom-list-item d-flex">
                                    <i class="bi-check custom-text-box-icon me-2"></i>
                                    دعم الجمعيات الدينية
                                </li>
                                <li class="custom-list-item d-flex">
                                    <i class="bi-check custom-text-box-icon me-2"></i>
                                    دعم المشاريع الإجتماعية
                                </li>
                                <li class="custom-list-item d-flex">
                                    <i class="bi-check custom-text-box-icon me-2"></i>
                                    تخفيف معانة الأسراللاجئة وكفالة الأيتام
                                </li>
                                <li class="custom-list-item d-flex">
                                    <i class="bi-check custom-text-box-icon me-2"></i>
                                    دعم مشاريع حفر الآبار
                                </li>
                                <li class="custom-list-item d-flex">
                                    <i class="bi-check custom-text-box-icon me-2"></i>
                                    دعم المراكز الإسلامية
                                </li>
                                <li class="custom-list-item d-flex">
                                    <i class="bi-check custom-text-box-icon me-2"></i>
                                    دعم مشاريع ذوي الهمم
                                </li>
                            </ul>
                        </div>




                    </div>
                    <!-- the second column -->
                    <div class="col-lg-6 col-12" id="story">
                        <div class="custom-text-box">
                            <h2 class="mb-2">قصتنا</h2>

                            <h5 class="mb-3">منصة إنقاذ</h5>

                            <p class="mb-0">
                                منصة إنقاذ هي المنصة الأولى في اليمن التي تسمح للمتبرعين بالدم بالتبرع بكل يسر وسهولة وربطهم مع بنوك الدم في جميع المحافظات وتوفير حزم الدم لكافة المستشفيات بفصائل الدم المتنوعة بأسرع وقت ممكن , لم تقف المنصة على أساس التبرع بالدم بل أمتدت لتنظيم الحملات الخيرية والمشاريع التنموية والصحية والتعليمية والتطوعية حتى يسهم الجميع في بناء مجتمعهم .
                            </p>
                        </div>




                        <div class="">
                            <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">
                                <div class="counter-thumb">
                                    <div class="d-flex">
                                        <span class="counter-number" data-from="1" data-to="2023"
                                            data-speed="1000"></span>
                                        <span class="counter-number-text"></span>
                                    </div>

                                    <span class="counter-text">سنة التأسيس</span>
                                </div>

                                <div class="counter-thumb mt-4">
                                    <div class="d-flex">
                                        <span class="counter-number" data-from="1" data-to="9891"
                                            data-speed="1000"></span>

                                    </div>


                                    <span class="counter-text"> متبرع بالدم</span>
                                </div>
                                <div class="counter-thumb mt-4">
                                    <div class="d-flex">
                                        <span class="counter-number" data-from="1" data-to="80"
                                            data-speed="1000"></span>

                                    </div>


                                    <span class="counter-text">حملة خيرية </span>
                                </div>
                                <div class="counter-thumb mt-4">
                                    <div class="d-flex">
                                        <span class="counter-number" data-from="1" data-to="40"
                                            data-speed="1000"></span>

                                    </div>


                                    <span class="counter-text"> حملة تطوعية</span>
                                </div>

                                <div class="counter-thumb mt-4">
                                    <div class="d-flex">
                                        <span class="counter-number" data-from="1" data-to="63"
                                            data-speed="1000"></span>

                                    </div>


                                    <span class="counter-text">مستشفى</span>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>




        </section>


        <section class="about-section section-padding" id="team">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-5 col-12">
                        <img src="img/team3.PNG"
                            class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">
                    </div>

                    <div class="col-lg-5 col-md-7 col-12">
                        <div class="custom-text-block">
                            <h2 class="mb-0">فريق منصة إنقاذ</h2>

                            <p class="text-muted mb-lg-4 mb-md-4">ERROR HUNTERS</p>

                            <P>أشرف على المنصة 8 طلاب تقنية المعلومات مستوى ثاني لعام 2023 بجامعة العلوم التكنولوجيا كللية الهندسة والحاسبات في عدن وكان ذلك لمشروع في مادة إدارة تقنية المعلوات.   
                                 

                            </P>
                            <p>
يتقدم قائد الفريق سام فيصل اليافعي وكل أعضاء الفريق بالشكر الكامل لعميد كلية الهندسة والحاسبات الدكتور نصر السقاف وأيضا مشرف المشاريع الدكتور عبدالملك السروري على دعمهم لنا وللفرق الأخرى.
                             </P>

                            <ul class="social-icon mt-4">
                                <li class="social-icon-item">
                                    <a href="https://twitter.com/0RCA_6" class="social-icon-link bi-twitter"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-facebook"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-instagram"></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- start new section -->
        <section class="banner section-padding cta-section"
            style="margin-top: 5rem;background-color: var(--section-bg-color);" id="our_story">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="wrapper">
                            <div class="content">
                                <h1>التبرع الخيري</h1>
                                <p style="font-size: 20px;">
                                    قال رسول الله ﷺ "من فرَّج عن مسلم كربة من كرب الدنيا فرَّج الله عنه كربة من كربات
                                    يوم القيامة".
                                    <br><br>

                                    تبرعك يحدث فرقًا كبيراً في حياة الآخرين وتسهم في تلبية إحتياجات المحتاجين وتقديم دعم
                                    للذين يعانون,إن المساهمة في تغيير حياة الآخرين للأفضل يسهم في بناء مجتمع أفضل وأكثر
                                    تلاحمًا,حيث يتحقق التضامن والتكافل بين أفراد المجتمع .
                                    <br>
                                    <br>
                                    قد يبدو التبرع بقطعة صغيرة من مالك أو جهدك غير مؤثر لك لكنه يحدث فارق كبير على مستوى
                                    المجتمع بل أنه يعزز صور التكافل الإجتماعي بين المسلمين لا سيما الأجر والثواب العظيم.
                                </p>
                                <!-- <div class="btn-002">
                <ul>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Follow Us</a></li>
                </ul>
              </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="img-wrapper">
                            <div class="banner-img">
                                <img src="img/donation-01.png" class="vert-move" style="
              width: 100%;
          ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- end new section -->


        <section class="section-padding" id="section_3">
            <div class="container">
                <div class="row" id="Campaigns">

                    <div class="col-lg-12 col-12 text-center mb-4">
                        <h2>الحملات الخيرية</h2>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap">
                            <img src="img/causes/education_system_in_yemen.jpg"
                                class="custom-block-image img-fluid" alt="" style="height: 250px;">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">تعليم الأطفال</h5>

                                    <p>حملة تم تنظيمها من قبل وزارة التعليم   للتبرع للطلاب الأيتام من أجل دعم
                                         عملية تعليمهم وإستمرارها</p>

                                    <div class="progress mt-4">
                                        <div class="progress-bar w-75" role="progressbar" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <div class="d-flex align-items-center my-2">
                                        <p class="mb-0" style="margin-left: 10px;">
                                            <strong>المبلغ الحالي :</strong>
                                            18,500$
                                        </p>

                                        <p class="ms-auto mb-0">
                                            <strong>المستهدف:</strong>
                                            32,000$
                                        </p>
                                    </div>
                                </div>

                                <a href="user/login.php" class="custom-btn btn">تبرع الآن</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap">
                            <img src="img/causes/yemen-hunger-5.jpg"
                                class="custom-block-image img-fluid" alt="" style="height: 250px;">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">الدعم الأسري</h5>

                                    <p>تهدف هذه الحملة لتوفير المتطلبات الأساسيات للعوائل الفقيرة من سلل غذائية وغيرها
                                    </p>

                                    <div class="progress mt-4">
                                        <div class="progress-bar w-50" role="progressbar" aria-valuenow="50"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <div class="d-flex align-items-center my-2">
                                        <p class="mb-0" style="margin-left: 10px;">
                                            <strong>المبلغ الحالي :</strong>
                                            20,000$
                                        </p>

                                        <p class="ms-auto mb-0">
                                            <strong>المستهدف:</strong>
                                            44,000$
                                        </p>
                                    </div>
                                </div>

                                <a href="user/login.php" class="custom-btn btn">تبرع الآن</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="custom-block-wrap">
                            <img src="img/causes/water.jpg"
                                class="custom-block-image img-fluid" alt="" style="height: 250px;">

                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">آبار المياة</h5>

                                    <p>حملة منظمة من قبل منصة إنقاذ لحفر آبار المياة في المناطق التي يعاني منها سكانها من
                                        شح المياة </p>

                                    <div class="progress mt-4">
                                        <div class="progress-bar w-75" role="progressbar" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <div class="d-flex align-items-center my-2">
                                        <p class="mb-0" style="margin-left: 10px;">
                                            <strong>المبلغ الحالي :</strong>
                                            $10,500$
                                        </p>

                                        <p class="ms-auto mb-0">
                                            <strong>المستهدف:</strong>
                                            15,000$
                                        </p>
                                    </div>
                                </div>

                                <a href="user/login.php" class="custom-btn btn">تبرع الآن</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>



        <section class="contact-section section-padding" id="contact">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-12 ms-auto mb-5 mb-lg-0">
                        <div class="contact-info-wrap">
                            <h2>ابق على تواصل</h2>



                            <div class="contact-info">
                                <h5 class="mb-3">معلومات التواصل</h5>

                                <p class="d-flex mb-2">
                                    <i class="bi-geo-alt me-2 ms-2"></i>
                                    اليمن , عدن
                                </p>

                                <p class="d-flex mb-2">
                                    <i class="bi-telephone me-2 ms-2"></i>

                                    <a href="tel: 120-240-9600">
                                        02-000-0000
                                    </a>
                                </p>

                                <p class="d-flex">
                                    <i class="bi-envelope me-2 ms-2"></i>

                                    <a href="mailto:info@yourgmail.com">
                                        help@enqath.org
                                    </a>
                                </p>

                                <a href="user/login.php" class="custom-btn btn mt-3"
                                    style="padding-left: 3rem;padding-right: 3rem;">تبرع الآن</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12 mx-auto">
                        <form class="custom-form contact-form" action="files/contact.php" method="post" role="form">
                            <h2>تواصل معنا</h2>

                            <p class="mb-4">أو يمكنك التواصل عبر البريد الإلكتروني:
                                sam6dev@gmail.com
                                <a href="#"></a>
                            </p>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="f_name" id="first-name" class="form-control"
                                        placeholder="الاسم الاول" required>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="l_name" id="last-name" class="form-control"
                                        placeholder="الاسم الأخير" required>
                                </div>
                            </div>

                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control"
                                placeholder="البريد الاإلكتروني" required>

                            <textarea name="message" rows="5" class="form-control" id="message"
                                placeholder="كيف يمكننا مساعدتك؟" required></textarea>

                            <button type="submit" class="form-control">إرسال</button>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 mb-4">
                    <img src="img/logo.png" class="logo img-fluid" alt="">
                    <h3 style="color: white;">منصة إنقاذ</h3>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <h5 class="site-footer-title mb-3">روابط سريعة</h5>

                    <ul class="footer-menu">
                        <li class="footer-menu-item"><a href="#top" class="footer-menu-link">الرئيسية</a></li>

                        <li class="footer-menu-item"><a href="#donatedblood" class="footer-menu-link">التبرع بالدم</a></li>

                        <li class="footer-menu-item"><a href="#campaigns" class="footer-menu-link">الحملات الخيرية</a></li>

                        <li class="footer-menu-item"><a href="#story" class="footer-menu-link">قصتنا</a></li>

                        <li class="footer-menu-item"><a href="#team" class="footer-menu-link">فريق المنصة</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mx-auto">
                    <h5 class="site-footer-title mb-3">معلومات التواصل</h5>

                    <p class="text-white d-flex mb-2">
                        <i class="bi-telephone me-2 ms-2"></i>

                        <a href="tel: 120-240-9600" class="site-footer-link">
                            02-000-0000
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <i class="bi-envelope me-2 ms-2"></i>

                        <a href="mailto:info@yourgmail.com" class="site-footer-link">
                            help@enqath.org
                        </a>
                    </p>

                    <p class="text-white d-flex mt-3">
                        <i class="bi-geo-alt me-2 ms-2"></i>
                        اليمن , عدن
                    </p>

                    <a href="user/login.php" class="custom-btn btn mt-3">تبرع الآن</a>
                </div>
            </div>
        </div>

        <div class="site-footer-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-7 col-12">
                        <p class="copyright-text mb-0">جميع الحقوق محفوظة © 2023 <a href="#">منصة إنقاذ</a>
                            <br>
                            المبرمج: <a href="https://twitter.com/0RCA_6" target="_blank">سام فيصل اليافعي
                                contact with me on X
                            </a>

                        </p>

                    </div>


                    <div class="col-lg-6 col-md-5 col-12 d-flex justify-content-center align-items-center mx-auto">
                        <ul class="social-icon">
                            <li class="social-icon-item">
                                <a href="https://twitter.com/0RCA_6" class="social-icon-link bi-twitter"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-instagram"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-linkedin"></a>
                            </li>

                            <li class="social-icon-item">
                                <a href="https://youtube.com/templatemo" class="social-icon-link bi-youtube"></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- typewriter effect -->

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <!-- <script src="js/click-scroll.js"></script> -->
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>