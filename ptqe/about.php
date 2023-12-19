<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pinnacle Techno School</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">

    <style>
        .ptqe_reg_section {
            padding: 20px 0;
        }

        .ptqe_reg_section .ptqe_reg_block .info h3 {
            font-size: 18px;
            margin: 0;
        }

        .ptqe_reg_section .ptqe_reg_block .sub {
            display: block;
            font-size: 12px;
            font-weight: 600;
            line-height: 1.2;
            margin-top: 10px;
            max-width: 380px;
        }

        .ptqe_reg_section .on_off_reg_block .bar_header {
            position: relative;
            margin: 30px 0 20px;
        }

        .ptqe_reg_section .on_off_reg_block .bar_header span {
            display: inline-block;
        }

        .ptqe_reg_section .on_off_reg_block .bar_header span.img_box {
            position: absolute;
            width: 60px;
            height: 60px;
            top: -10px;
        }

        .ptqe_reg_section .on_off_reg_block .bar_header span.img_box img {
            position: absolute
        }

        .ptqe_reg_section .on_off_reg_block .bar_header span:not(.img_box) {
            height: 40px;
            background: #f5c07a;
            min-width: 220px;
            border-radius: 25px;
            padding-top: 8px;
            padding-left: 50px;
            font-weight: 800;
            position: relative;
            z-index: -1;
            left: 25px;
        }



        .ptqe_syllabus_section {
            padding: 50px 0;
        }

        .ptqe_syllabus_section .ptqe_sp_block {
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 20px;
            margin-bottom: 40px;
        }

        .ptqe_syllabus_section .ptqe_sp_box {
            min-width: 160px;
            text-align: center;
            border-radius: 25px;
            padding: 5px;
            margin-top: 20px;
        }

        .ptqe_syllabus_section .ptqe_sp_box.dark {
            border: 1px solid #f4cf9e;
        }

        .ptqe_syllabus_section .ptqe_sp_box.light {
            border: 1px solid #b84f53;
        }

        .ptqe_syllabus_section .ptqe_sp_box .ptqe_sp_inner {
            border-radius: 25px;
            padding-bottom: 10px;
        }

        .ptqe_syllabus_section .ptqe_sp_box.dark .ptqe_sp_inner {
            background: #b84f53;
            color: #fff;
        }

        .ptqe_syllabus_section .ptqe_sp_box.light .ptqe_sp_inner {
            background: #f4cf9e;
            color: #000;
        }

        .ptqe_syllabus_section .ptqe_sp_inner .img_box {
            padding-top: 20px;
            padding-bottom: 10px;
        }

        .ptqe_syllabus_section .img_box img {
            margin: auto
        }

        .ptqe_syllabus_section .desc_box p {
            font-weight: bold;
            margin-bottom: 5px;
            line-height: 1.1;
        }

        .ptqe_syllabus_section .smp_box {
            background: url(../images/pstar-2024/sample_paper_bg.png) center/100% 100% no-repeat;
            min-height: 110px;

            display: flex;
            align-items: center;
            padding: 17px;
        }

        .ptqe_syllabus_section .smp_box .desc_box {
            padding-left: 20px;
            padding-right: 20px;

        }

        .ptqe_syllabus_section .smp_box .desc_box p.title {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .ptqe_syllabus_section .smp_box .desc_box p.sub {
            color: #b84f53;
            font-size: 12px;
        }

        .ptqe_syllabus_section .smp_box .desc_box a.sub {
            color: #b84f53;
            font-size: 12px;
            font-weight: bold;
        }

        .ptqe_syllabus_section .smp_box .img_box2 {
            margin-left: 15px;

        }

        .why_ptqe_section {
            padding: 50px 0;
        }

        .why_ptqe_section .why_ptqe {
            justify-content: space-around;
            margin-top: 30px;
        }

        .why_ptqe_section .why_ptqe_box {
            background: url(../images/pstar-2024/why_ptqe_bg.png) center/contain no-repeat;
            height: 300px;
            width: 300px;
            padding: 25px;
        }

        .why_ptqe_section .why_ptqe_box .title {
            margin-top: 10px;
            padding-left: 10px;
        }

        .why_ptqe_section .why_ptqe_box .desc {
            margin-top: 20px;
            padding-left: 10px;
            line-height: 1;
            font-size: 12px;


        }

        .d-flex {

            display: flex !important;

        }

        .bg_01 {
            background: #F4CF9E !important;
        }

        img {
            display: block;
            max-width: 100%;

        }

        .testimonial-card{
            border: none;
        }
        
        .testimonial-card .card-header{
            border: none;
            background: none;
            padding: 0;
            text-align: center;
        }

        .testimonial-card .card-header img{
            width: 50%;
        }

        .testimonial-card .card-body{
            border: none;
            background-color: #fff7ed;
            border-radius: 15px;
            box-shadow: 10px 10px 15px -5px #dbccbb;
        }
    </style>
</head>

<body>
    <!----------------include_navbar---------------------------->


    <?php require "../include/navbar.php" ?>

<!----------------end_include_navbar---------------------------->


    <!-- Header Start -->
    <div class="container-fluid" style="background-color:#3b0505; height: 170px;">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center mt-3">
                    <h1 class="display-3 text-white animated slideInDown">About PTQE</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="../index.php">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page"> PTQE</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <section class="mt-5 pstar-section">

        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center px-3">PTQE - 2024</h6>
            <h1 class="">Pinnacle Talent Quest Exam</h1>
            <!-- <img src="../images/pstar-2024/pinnacle p-star.png" alt="" style="display: inline-block; text-align: center; margin: auto; max-width: 550px; width: 100%;"> -->
        </div>
        <div class="container exam-hero mt-5">
            <div class="row">
                <div class="col-12 wow fadeInUp text-center" data-wow-delay="0.1s">
                    <h3 style="color: rgb(196, 0, 0); font-weight: 900;">For Students Presently in Class V, VI, VII, VIII, IX, X, XI & XII</h3>
                </div>
            </div>
            <div class="row exam-date my-2">
                <div class="col-md-6">
                    <h1><strong>5th Nov & 3rd Dec, 2023</strong><br>Exam Date of STAGE-1</h1>
                </div>
                <div class="col-md-6">
                    <h1><strong>10th December, 2023</strong><br>Exam Date of STAGE-2</h1>
                </div>
            </div>
            <div class="row text-center my-3">
                <div class="col-12">
                    <button class="register-now-button"><a href="../ptqe/register.php">Register Now</a></button>
                </div>
            </div>
        </div>
        <div class="container wow fadeInUp text-center">
            <p class="mt-3" style="max-width: 700px; margin: auto;">PTQE brings an amazing opportunity for the young talents to pave their way towards an
                illustrious & bright career. This test will equip students with the Pinnacle advantage that will allow
                them to explore their intrinsic potential and open doors to a world of competitive & scholastic exams.
            </p>
        </div>
        <div class="container wow fadeInUp text-center mt-5" style="margin: auto; max-width: 900px; width: 100%;">
            <div class="row">
                <div class="col-12 p-star" style="background-color: #ffe9cd; border: none;">

                    <h4>Every student presently in Class V, VI, VII, VIII, IX, X & XI MUST appear in the PTQE Test whether he / she is</h4>

                    <p class="checklist"><img src="../images/pstar-2024/icon1.png" alt="" style="float: left;"> presently undecided which stream to be pursued in class XI (Arts / Commerce / Humanities / Medical / Engineering).</p>
                    
                    <p class="checklist"><img src="../images/pstar-2024/icon1.png" alt="" style="float: left;"> aspiring for success in JEE Main/ JEE Advanced and all other engineering entrance examinations.</p>
                    
                    <p class="checklist"><img src="../images/pstar-2024/icon1.png" alt="" style="float: left;"> aspiring for an excellent score in CUET to pursue Bachelor of Science.</p>
                    
                    <p class="checklist"><img src="../images/pstar-2024/icon1.png" alt="" style="float: left;"> aspiring for success in XII Boards & Sr. Olympiads.</p>

                    <p class="checklist"><img src="../images/pstar-2024/icon1.png" alt=""> aspiring for success in X Boards, NTSE & Jr. Science Olympiad.</p>
                </div>
            </div>

        </div>
        <div class="container wow fadeInUp mt-5">

            <div class="row">
                <div class="col-12 col-sm-12 col-md-4">
                    <div class="p-star info-box">
                        <div class="img_box">
                            <img class="img-responsive" src="../img/calender.png" alt="img">
                        </div>
                        <div class="info">
                            <span class="fs-14 fw-800">Exam Date</span>
                            <span class="">Stage-1: 5th Nov and 3rd Dec</span>
                            <span class="">Stage-2: 10th Dec </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4">
                    <div class="p-star info-box">
                        <div class="img_box">
                            <img class="img-responsive" src="../img/notes.png" alt="img" style="max-width:80px;">
                        </div>
                        <div class="info">
                            <span class="fs-14 fw-800">Exam Conduction Process</span>
                            <span class="">PTQE Exam will be conducted in Offline mode only for 5th to 12th.</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4">
                    <div class="p-star info-box">
                        <div class="img_box">
                            <img class="img-responsive" src="../img/reminder.png" alt="img" style="max-width: 80px;">
                        </div>
                        <div class="info">
                            <span class="fs-14 fw-800">Exam Result</span>
                            <span style="font-size: 12px;">Result will be declared asap (It will be declared on www.pinnacletechnoschool.com and will also be shared by call/SMS at registered Mobile No.)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4">
                    <div class="p-star info-box">
                        <div class="img_box">
                            <img class="img-responsive" src="../img/schlorship.png" alt="img" style="max-width:80px;">
                        </div>
                        <div class="info">
                            <span class="fs-14 fw-800">Get Up to 100%* Scholarship</span>
                            <span class="">On the basis of PTQE results we Provides scholarship for admission in
                                pinnacle</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4">
                    <div class="p-star info-box">
                        <div class="img_box">
                            <img class="img-responsive" src="../img/prizes.png" alt="img" style="max-width:80px;">
                        </div>
                        <div class="info">
                            <span class="fs-14 fw-800">Get participation Certificate</span>
                            <span class="">On the basis of PTQE results we Provides Certificate </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4">
                    <div class="p-star info-box">
                        <div class="img_box">
                            <img class="img-responsive" src="../img/cash.png" alt="img" style="max-width:80px;">
                        </div>
                        <div class="info">
                            <span class="fs-14 fw-800">Win Exciting Prizes & Cash </span>
                            <span class="">Lucky winners will win many expensive prizes, cash & gifts as Tablets,
                                Watches, bags etc.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>


    <!----------- p-star regsister ----------->
    <section class="ptqe_reg_section">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center px-3"> REGISTRATION</h6>
            <h1 class="mb-5">REGISTRATION PROCESS </h1>

        </div>
        <div class="container">

            <div class="ptqe_reg_block">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="info">
                            <h3 class="fw-800">How to Register</h3>
                            <span class="sub">Take the first step for your better future by registering for PTQE
                                (Pinnacle Talent Quest Exam)</span>
                            <div class="on_off_reg_block">
                                <div class="bar_header">
                                    <span class="img_box"><img src="../images/pstar-2024/online.png" alt=""></span>
                                    <span>Online Registration</span>
                                </div>
                                <div class="desc">
                                    <p class="m-0">1. Choose the register button among the dropdown list of PTQE </p>
                                    <p class="m-0">2. Fil in the personal details in the registration form and submit
                                        the form. </p>
                                    <p class="m-0">3. Get your Admit Card for PTQE Stage-1 & take the printout of it
                                        while appearing in exam. </p>
                                </div>
                            </div>
                            <div class="on_off_reg_block">
                                <div class="bar_header">
                                    <span class="img_box"><img src="../images/pstar-2024/offline.png" alt=""></span>

                                    <span>Offline Registration</span>
                                </div>
                                <div class="desc">
                                    <p class="m-0">Take form from your school if it has agreed for PTQE registration,
                                        fill in and deposit at your school or you can visit Pinnacle Techno School,
                                        Ballia for offline registration.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="img_box">
                            <img src="../images/pstar-2024/reg_img.png" alt="" style=" max-width: 100%;">
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </section>
    <!-------------events ---------->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Events</h6>
                <h1 class="mb-5">Our Incredible Moments!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border p-2 mx-auto mb-3" src="../images/carousel/1.jpg" style="width: 360px; height: 240px; object-fit: contain; object-position: center;">
                </div>
                <div class="testimonial-item text-center">
                    <img class="border p-2 mx-auto mb-3" src="../images/carousel/2.jpg" style="width: 360px; height: 240px; object-fit: contain; object-position: center;">
                </div>
                <div class="testimonial-item text-center">
                    <img class="border p-2 mx-auto mb-3" src="../images/carousel/3.jpg" style="width: 360px; height: 240px; object-fit: contain; object-position: center;">
                </div>
                <div class="testimonial-item text-center">
                    <img class="border p-2 mx-auto mb-3" src="../images/carousel/4.jpg" style="width: 360px; height: 240px; object-fit: contain; object-position: center;">
                </div>

                <div class="testimonial-item text-center">
                    <img class="border p-2 mx-auto mb-3" src="../images/carousel/5.jpg" style="width: 360px; height: 240px; object-fit: contain; object-position: center;">
                </div>
                <div class="testimonial-item text-center">
                    <img class="border p-2 mx-auto mb-3" src="../images/carousel/6.jpg" style="width: 360px; height: 240px; object-fit: contain; object-position: center;">
                </div>

            </div>
        </div>
    </div>
    <!-------------p-star syllabus--------->
    <section class="ptqe_syllabus_section wow fadeInUp mt-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center px-3"> Syllabus </h6>
            <h1 class="mb-5">PTQE Syllabus & Pattern </h1>

        </div>
        <div class="ptqe_syllabus_block container">
            <div class="row">

                <div class="col-12">
                    <div class="ptqe_sp_block d-flex align-items-center" style="margin-bottom: 0;">
                        <div class="ptqe_sp_box light">
                            <div class="ptqe_sp_inner">
                                <div class="img_box">
                                    <img class="img-responsive" src="../images/pstar-2024/books.png" alt="img">
                                </div>
                                <div class="desc_box">
                                    <p class="">Class V</p>
                                    <a class="downloadlink" href="../images/pstar-2024/Syllabus 5.pdf">Syllabus & Pattern</a>
                                </div>
                            </div>
                        </div>
                        <div class="ptqe_sp_box dark">
                            <div class="ptqe_sp_inner">
                                <div class="img_box">
                                    <img class="img-responsive" src="../images/pstar-2024/books.png" alt="img">
                                </div>
                                <div class="desc_box">
                                    <p class="">Class VI</p>
                                    <a class="downloadlink" href="../images/pstar-2024/Syllabus 6.pdf">Syllabus & Pattern</a>
                                </div>
                            </div>
                        </div>
                        <div class="ptqe_sp_box light">
                            <div class="ptqe_sp_inner">
                                <div class="img_box">
                                    <img class="img-responsive" src="../images/pstar-2024/books.png" alt="img">
                                </div>
                                <div class="desc_box">
                                    <p class="">Class VII</p>
                                    <a class="downloadlink" href="../images/pstar-2024/Syllabus 7.pdf">Syllabus & Pattern</a>
                                </div>
                            </div>
                        </div>
                        <div class="ptqe_sp_box dark">
                            <div class="ptqe_sp_inner">
                                <div class="img_box">
                                    <img class="img-responsive" src="../images/pstar-2024/books.png" alt="img">
                                </div>
                                <div class="desc_box">
                                    <p class="">Class VIII</p>
                                    <a class="downloadlink" href="../images/pstar-2024/Syllabus 8.pdf">Syllabus & Pattern</a>
                                </div>
                            </div>
                        </div>
                        <div class="ptqe_sp_box light">
                            <div class="ptqe_sp_inner">
                                <div class="img_box">
                                    <img class="img-responsive" src="../images/pstar-2024/books.png" alt="img">
                                </div>
                                <div class="desc_box">
                                    <p class="">Class IX</p>
                                    <a class="downloadlink" href="../images/pstar-2024/Syllabus 9.pdf">Syllabus & Pattern</a>
                                </div>
                            </div>
                        </div>
                        <div class="ptqe_sp_box dark">
                            <div class="ptqe_sp_inner">
                                <div class="img_box">
                                    <img class="img-responsive" src="../images/pstar-2024/books.png" alt="img">
                                </div>
                                <div class="desc_box">
                                    <p class="">Class X</p>
                                    <a class="downloadlink" href="../images/pstar-2024/Syllabus 10.pdf">Syllabus & Pattern</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ptqe_sp_block d-flex align-items-center" style="margin-top: 0;">
                        <div class="ptqe_sp_box light">
                            <div class="ptqe_sp_inner">
                                <div class="img_box">
                                    <img class="img-responsive" src="../images/pstar-2024/books.png" alt="img">
                                </div>
                                <div class="desc_box">
                                    <p class="">Class XI M</p>
                                    <a class="downloadlink" href="../images/pstar-2024/Syllabus 11.pdf">Syllabus & Pattern</a>
                                </div>
                            </div>
                        </div>
                        <div class="ptqe_sp_box dark">
                            <div class="ptqe_sp_inner">
                                <div class="img_box">
                                    <img class="img-responsive" src="../images/pstar-2024/books.png" alt="img">
                                </div>
                                <div class="desc_box">
                                    <p class="">Class XI NM</p>
                                    <a class="downloadlink" href="../images/pstar-2024/Syllabus 11.pdf">Syllabus & Pattern</a>
                                </div>
                            </div>
                        </div>
                        <div class="ptqe_sp_box light">
                            <div class="ptqe_sp_inner">
                                <div class="img_box">
                                    <img class="img-responsive" src="../images/pstar-2024/books.png" alt="img">
                                </div>
                                <div class="desc_box">
                                    <p class="">Class XII M</p>
                                    <a class="downloadlink" href="../images/pstar-2024/Syllabus 12.pdf">Syllabus & Pattern</a>
                                </div>
                            </div>
                        </div>
                        <div class="ptqe_sp_box dark">
                            <div class="ptqe_sp_inner">
                                <div class="img_box">
                                    <img class="img-responsive" src="../images/pstar-2024/books.png" alt="img">
                                </div>
                                <div class="desc_box">
                                    <p class="">Class XII NM</p>
                                    <a class="downloadlink" href="../images/pstar-2024/Syllabus 12.pdf">Syllabus & Pattern</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row wow fadeInUp mt-5">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title bg-white text-center px-3">Sample Papers </h6>
                        <h1 class="mb-5"> PTQE Sample Papers</h1>

                    </div>
                    <div class="col-12">
                        <div class="section_header text-center wow fadeInUp mt-5">
                            <h2 class=" fw-800">PTQE stage-1 Sample Papers</h2><br><br>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-3">
                                <div class="smp_box">
                                    <div class="img_box1">
                                        <img class="img-responsive" src="../images/pstar-2024/paperboard.png" alt="img">
                                    </div>
                                    <div class="desc_box">
                                        <p class="title">Class V</p>
                                        <a class="sub downloadlink"
                                            href="../images/pstar-2024/sample paper 5.pdf">Sample Paper</a>
                                    </div>
                                    <a class="img_box1" href="../images/pstar-2024/sample paper 5.pdf">
                                        <img class="img-responsive" src="../images/pstar-2024/download.png" alt="img">
                                    </a>
                                </div>

                            </div>
                            <div class="col-6 col-sm-6 col-md-3">
                                <div class="smp_box">
                                    <div class="img_box1">
                                        <img class="img-responsive" src="../images/pstar-2024/paperboard.png" alt="img">
                                    </div>
                                    <div class="desc_box">
                                        <p class="title">Class VI</p>
                                        <a class="sub downloadlink"
                                            href="../images/pstar-2024/sample paper 6.pdf">Sample Paper</a>
                                    </div>
                                    <a class="img_box1" href="../images/pstar-2024/sample paper 6.pdf">
                                        <img class="img-responsive" src="../images/pstar-2024/download.png" alt="img">
                                    </a>
                                </div>

                            </div>
                            <div class="col-6 col-sm-6 col-md-3">
                                <div class="smp_box">
                                    <div class="img_box1">
                                        <img class="img-responsive" src="../images/pstar-2024/paperboard.png" alt="img">
                                    </div>
                                    <div class="desc_box">
                                        <p class="title">Class VII</p>
                                        <a class="sub downloadlink"
                                            href="../images/pstar-2024/sample paper 7.pdf">Sample Paper</a>
                                    </div>
                                    <a class="img_box1" href="../images/pstar-2024/sample paper 7.pdf">
                                        <img class="img-responsive" src="../images/pstar-2024/download.png" alt="img">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-3">
                                <div class="smp_box">
                                    <div class="img_box1">
                                        <img class="img-responsive" src="../images/pstar-2024/paperboard.png" alt="img">
                                    </div>
                                    <div class="desc_box">
                                        <p class="title">Class VIII</p>
                                        <a class="sub downloadlink"
                                            href="../images/pstar-2024/sample paper 8th.pdf">Sample Paper</a>
                                    </div>
                                    <a class="img_box1" href="../images/pstar-2024/sample paper 8th.pdf">
                                        <img class="img-responsive" src="../images/pstar-2024/download.png" alt="img">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row secondary">
                            <div class="col-6 col-sm-6 col-md-3">
                                <div class="smp_box">
                                    <div class="img_box1">
                                        <img class="img-responsive" src="../images/pstar-2024/paperboard.png" alt="img">
                                    </div>
                                    <div class="desc_box">
                                        <p class="title">Class IX</p>
                                        <a class="sub downloadlink"
                                            href="../images/pstar-2024/sample paper 9th.pdf">Sample Paper</a>
                                    </div>
                                    <a class="img_box1" href="../images/pstar-2024/sample paper 9th.pdf">
                                        <img class="img-responsive" src="../images/pstar-2024/download.png" alt="img">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-3">
                                <div class="smp_box">
                                    <div class="img_box1">
                                        <img class="img-responsive" src="../images/pstar-2024/paperboard.png" alt="img">
                                    </div>
                                    <div class="desc_box">
                                        <p class="title">Class X</p>
                                        <a class="sub downloadlink"
                                            href="../images/pstar-2024/sample paper 10.pdf">Sample Paper</a>
                                    </div>
                                    <a class="img_box1" href="../images/pstar-2024/sample paper 10.pdf">
                                        <img class="img-responsive" src="../images/pstar-2024/download.png" alt="img">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-3">
                                <div class="smp_box">
                                    <div class="img_box1">
                                        <img class="img-responsive" src="../images/pstar-2024/paperboard.png" alt="img">
                                    </div>
                                    <div class="desc_box">
                                        <p class="title">Class XI M</p>
                                        <a class="sub downloadlink"
                                            href="../images/pstar-2024/sample paper 11 hm.pdf">Sample Paper</a>
                                    </div>
                                    <a class="img_box1" href="../images/pstar-2024/sample paper 11hm.pdf">
                                        <img class="img-responsive" src="../images/pstar-2024/download.png" alt="img">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-3">
                                <div class="smp_box">
                                    <div class="img_box1">
                                        <img class="img-responsive" src="../images/pstar-2024/paperboard.png" alt="img">
                                    </div>
                                    <div class="desc_box">
                                        <p class="title">Class XI NM</p>
                                        <a class="sub downloadlink"
                                            href="../images/pstar-2024/sample paper 11 hnm.pdf">Sample Paper</a>
                                    </div>
                                    <a class="img_box1" href="../images/pstar-2024/sample paper 11 hnm.pdf">
                                        <img class="img-responsive" src="../images/pstar-2024/download.png" alt="img">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row secondary">
                            <div class="col-6 col-sm-6 col-md-3">
                                <div class="smp_box">
                                    <div class="img_box1">
                                        <img class="img-responsive" src="../images/pstar-2024/paperboard.png" alt="img">
                                    </div>
                                    <div class="desc_box">
                                        <p class="title">Class XII M</p>
                                        <a class="sub downloadlink"
                                            href="../images/pstar-2024/sample paper 12 hm.pdf">Sample Paper</a>
                                    </div>
                                    <a class="img_box1" href="../images/pstar-2024/sample paper 12hm.pdf">
                                        <img class="img-responsive" src="../images/pstar-2024/download.png" alt="img">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-3">
                                <div class="smp_box">
                                    <div class="img_box1">
                                        <img class="img-responsive" src="../images/pstar-2024/paperboard.png" alt="img">
                                    </div>
                                    <div class="desc_box">
                                        <p class="title">Class XII NM</p>
                                        <a class="sub downloadlink"
                                            href="../images/pstar-2024/sample paper 12 hnm.pdf">Sample Paper</a>
                                    </div>
                                    <a class="img_box1" href="../images/pstar-2024/sample paper 12 hnm.pdf">
                                        <img class="img-responsive" src="../images/pstar-2024/download.png" alt="img">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br><br>


            </div>

            <div class="row wow fadeInUp mt-5">
                <div class="col-12">
                    <div class="section_header text-center">
                        <h2 class=" fw-800 ">PTQE stage-2 Sample Papers</h2><br><br>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-3">
                            <div class="smp_box">
                                <div class="img_box1">
                                    <img class="img-responsive" src="../images/pstar-2024/paperboard.png" alt="img">
                                </div>
                                <div class="desc_box">
                                    <p class="title">Class V</p>
                                    <a class="sub downloadlink"
                                        href="../images/pstar-2024/sample paper 5.pdf">Sample Paper</a>
                                </div>
                                <a class="img_box1" href="../images/pstar-2024/sample paper 5.pdf">
                                    <img class="img-responsive" src="../images/pstar-2024/download.png" alt="img">
                                </a>
                            </div>

                        </div>
                        <div class="col-6 col-sm-6 col-md-3">
                            <div class="smp_box">
                                <div class="img_box1">
                                    <img class="img-responsive" src="../images/pstar-2024/paperboard.png" alt="img">
                                </div>
                                <div class="desc_box">
                                    <p class="title">Class VI</p>
                                    <a class="sub downloadlink" href="../images/pstar-2024/sample paper 6.pdf">Sample
                                        Paper</a>
                                </div>
                                <a class="img_box1" href="../images/pstar-2024/sample paper 6.pdf">
                                    <img class="img-responsive" src="../images/pstar-2024/download.png" alt="img">
                                </a>
                            </div>

                        </div>
                        <div class="col-6 col-sm-6 col-md-3">
                            <div class="smp_box">
                                <div class="img_box1">
                                    <img class="img-responsive" src="../images/pstar-2024/paperboard.png" alt="img">
                                </div>
                                <div class="desc_box">
                                    <p class="title">Class VII</p>
                                    <a class="sub downloadlink" href="../images/pstar-2024/sample paper 7.pdf">Sample
                                        Paper</a>
                                </div>
                                <a class="img_box1" href="../images/pstar-2024/sample paper 7.pdf">
                                    <img class="img-responsive" src="../images/pstar-2024/download.png" alt="img">
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-3">
                            <div class="smp_box">
                                <div class="img_box1">
                                    <img class="img-responsive" src="../images/pstar-2024/paperboard.png" alt="img">
                                </div>
                                <div class="desc_box">
                                    <p class="title">Class VIII</p>
                                    <a class="sub downloadlink" href="../images/pstar-2024/sample paper 8th.pdf">Sample
                                        Paper</a>
                                </div>
                                <a class="img_box1" href="../images/pstar-2024/sample paper 8th.pdf">
                                    <img class="img-responsive" src="../images/pstar-2024/download.png" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row secondary">
                        <div class="col-6 col-sm-6 col-md-3">
                            <div class="smp_box">
                                <div class="img_box1">
                                    <img class="img-responsive" src="../images/pstar-2024/paperboard.png" alt="img">
                                </div>
                                <div class="desc_box">
                                    <p class="title">Class IX</p>
                                    <a class="sub downloadlink" href="../images/pstar-2024/sample paper 9th.pdf">Sample
                                        Paper</a>
                                </div>
                                <a class="img_box1" href="../images/pstar-2024/sample paper 9th.pdf">
                                    <img class="img-responsive" src="../images/pstar-2024/download.png" alt="img">
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-3">
                            <div class="smp_box">
                                <div class="img_box1">
                                    <img class="img-responsive" src="../images/pstar-2024/paperboard.png" alt="img">
                                </div>
                                <div class="desc_box">
                                    <p class="title">Class X</p>
                                    <a class="sub downloadlink" href="../images/pstar-2024/sample paper 10.pdf">Sample
                                        Paper</a>
                                </div>
                                <a class="img_box1" href="../images/pstar-2024/sample paper 10.pdf">
                                    <img class="img-responsive" src="../images/pstar-2024/download.png" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
    </section>
    
    <!---------------- testimonials-------------->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">What our students say!</h1>
            </div>
            <div class="row">

                <div class="col-lg-3 col-6">

                    <div class="card testimonial-card">
                        <div class="card-header">
                            <img src="../images/pstar-2024/testimonial/t4.png" alt="">
                        </div>
                        <div class="card-body">
                            <p><b>It was my goal to Choose <span class="big-red" style="color: red; font-size: 30px; font-weight: 700;">Defence</span> after class X, I joined Pinnacle Techno School for two rigorous years</b> Those 2 years of beneficial learning made me academically abled enough to pursue Engineering and then <b>joined Indian Air Force as a Flying Officer</b> <b>- Ankur Pandey</b></p>
                        </div>
                    </div>


                </div>

                <div class="col-lg-3 col-6">

                    <div class="card testimonial-card">
                        <div class="card-header">
                            <img src="../images/pstar-2024/testimonial/t1.png" alt="">
                        </div>
                        <div class="card-body">
                            <p><b>It was my target to Choose <span class="big-red" style="color: red; font-size: 30px; font-weight: 700;">Humanities</span>.</b> To strengthen my understanding of human society and culture- thinking skills, <b>I joined Pinnacle from class VIII to X.</b> Those 3 years of beneficial learning made me academically abled enough to pursue <b>Humanities from BHU. - Sanjeevani Dubey</b></p>
                        </div>
                    </div>


                </div>

                <div class="col-lg-3 col-6">

                    <div class="card testimonial-card">
                        <div class="card-header">
                            <img src="../images/pstar-2024/testimonial/t5.png" alt="">
                        </div>
                        <div class="card-body">
                            <p><b>It was my dream to persue <span class="big-red" style="color: red; font-size: 30px; font-weight: 700;">Engineering</span>.</b> To strengthen my Mathematics and critical-thinking skills and problem-solving skills <b>I joined Pinnacle from class XI to XII.</b> Those 2 years of beneficial learning made me able to <b>crack JEE Advanced in 12th appearing</b> and pursue Engineering from IIT BHU in Civil Engineering field. <b>- Bhola Kumar</b></p>
                        </div>
                    </div>


                </div>

                <div class="col-lg-3 col-6">

                    <div class="card testimonial-card">
                        <div class="card-header">
                            <img src="../images/pstar-2024/testimonial/t2.png" alt="">
                        </div>
                        <div class="card-body">
                            <p><b>It was my pre-set goal to become <span class="big-red" style="color: red; font-size: 30px; font-weight: 700; white-space: nowrap;">IAS Officer</span>.</b> And to strengthen my critical-thinking skills and problem-solving abilities, <b>I joined Pinnacle from class IX to XII.</b> Those 4 years of beneficial learning made me academically abled enough to pursue <b>Arts from Allahabad University</b> which I qualified by CUET. <b>- Rekha Singh</b></p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    
    <div class="container wow fadeInUp text-center">
        <div class="row">
            <div class="col-12 p-star" style="background-color: #ffe9cd;">

                <p class="checklist"><img src="../images/pstar-2024/icon1.png" alt="" style="float: left;"> Course taught in each of Class VI to X is common & same for all students of that Class, irrespective of the stream (Arts, Commerce, Humanities, PCM, PCB, PCMB) they may opt for while moving to Class XI.</p>
                
                <p class="checklist"><img src="../images/pstar-2024/icon1.png" alt="" style="float: left;"> Every student going to Class VI to X will immensely benefit from PTQE's process of Academic Cult Metamorphosis which will not only empower them to perform much better academically but also empower them with much enhanced Mental Ability including Analytical Skills, which are extremely vital for success in any career & life itself.</p>
                
                <p class="checklist"><img src="../images/pstar-2024/icon1.png" alt="" style="float: left;"> These programs help build a solid foundation built by unravelling your 100% hidden potential for success even if you are aiming at pursuing higher studies in Arts (CUET), Commerce (CUET), Engineering (JEE Main, JEE Advanced, BITSAT, WBJEE, TANCET, EAMCET, KCET, MHTCET...), Humanities (CUET), Medicine (NEET) or in pure Sciences PC,M/B at IISc/IISER or at other institutes (CUET).</p>
                
                <p class="checklist"><img src="../images/pstar-2024/icon1.png" alt="" style="float: left;"> These programs will optimally prepare you for NTSE, Junior Olympiads and at least for the IOQM. No matter what your current academic performance is, a PTQE program can help you undergo a metamorphosis.</p>
            </div>
        </div>

    </div>
    <!-------------why ptqe------------------------------------->
    <section class="why_ptqe_section bg_01 wow fadeInUp mt-5">

        <div class="why_ptqe_block container">
            <div class="row">
                <div class="col-12">
                    <div class="section_header text-center">
                        <h2 class=" fw-800 ">Why PTQE is Different ? ...</h2>
                    </div>
                </div>
            </div>
            <div class="why_ptqe d-flex align-items-center" style="flex-wrap: wrap;">
                <div class="why_ptqe_box">
                    <div class="img_box">
                        <img class="img-responsive" src="../images/pstar-2024/milestone.png" alt="img">
                    </div>
                    <div class="title fw-800">
                        <span>Pinnacle</span>
                    </div>
                    <div class="desc">
                        <p>
                            PTQE is the initial step for career aspirants to reach at Pinnacle of their set goals. In
                            essence, it pioneers them on the path of achieving their targeted goals and to an
                            illustrious & bright career. Our Institute has the ability to raise Students’ potential
                            manifold.
                        </p>
                    </div>
                </div>
                <div class="why_ptqe_box">
                    <div class="img_box">
                        <img class="img-responsive" src="../images/pstar-2024/trust.png" alt="img">
                    </div>
                    <div class="title fw-800">
                        <span>SWOT Analysis</span>
                    </div>
                    <div class="desc">
                        <p>
                            PTQE question papers are designed meticulously taken in consideration the scientifically &
                            analytically driven parameters for the real assessment of the young minds. The in-depth
                            analysis of performance enables the student to know the scope for improvement & evaluate the
                            Analytical Skills required for success in various other careers & life.
                        </p>
                    </div>
                </div>
                <div class="why_ptqe_box">
                    <div class="img_box">
                        <img class="img-responsive" src="../images/pstar-2024/competitive.png" alt="img">
                    </div>
                    <div class="title fw-800">
                        <span>Career Guidance</span>
                    </div>
                    <div class="desc">
                        <p>
                            Performance in P-STAR determines the academic potential for Success in respective
                            forthcoming higher Competitive Exams. Thus, students can confidently choose the career path
                            looking at their forte & improve themselves in the weak areas essential for success in
                            future.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <br>


     <!-------------------------include footer------------------------------------->

      <?php require "../include/footer.php" ?>

     <!-------------------------include footer------------------------------------->



        <!-- Back to Top -->
        <a href="#" class="btn btn-lg  btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../lib/wow/wow.min.js"></script>
        <script src="../lib/easing/easing.min.js"></script>
        <script src="../lib/waypoints/waypoints.min.js"></script>
        <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="../js/main.js"></script>
</body>

</html>