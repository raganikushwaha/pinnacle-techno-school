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

        .testimonial-card {
            border: none;
        }

        .testimonial-card .card-header {
            border: none;
            background: none;
            padding: 0;
            text-align: center;
        }

        .testimonial-card .card-header img {
            width: 50%;
        }

        .testimonial-card .card-body {
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
                    <h1 class="display-3 text-white animated slideInDown">Download</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="../index.php">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page"> Download</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-------------p-star syllabus--------->
    <section class="ptqe_syllabus_section wow fadeInUp mt-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center px-3"> Download </h6>
            <h1 class="mb-5">Sample Papers</h1>
    
        </div>
        <div class="ptqe_syllabus_block container">
            <div class="row">
    
                <div class="col-12">
                    <div class="ptqe_sp_block d-flex align-items-center" style="margin-bottom: 0;">
                        <!-- <div class="ptqe_sp_box light">
                            <div class="ptqe_sp_inner">
                                <div class="img_box">
                                    <img class="img-responsive" src="../images/pstar-2024/books.png" alt="img">
                                </div>
                                <div class="desc_box">
                                    <p class="">JEE Main 2020</p>
                                    <a class="downloadlink" href="../images/pstar-2024/Syllabus 5.pdf">Sample Paper</a>
                                </div>
                            </div>
                        </div>
                        <div class="ptqe_sp_box dark">
                            <div class="ptqe_sp_inner">
                                <div class="img_box">
                                    <img class="img-responsive" src="../images/pstar-2024/books.png" alt="img">
                                </div>
                                <div class="desc_box">
                                    <p class="">JEE Main 2021</p>
                                    <a class="downloadlink" href="../images/pstar-2024/Syllabus 6.pdf">Sample Paper</a>
                                </div>
                            </div>
                        </div>
                        <div class="ptqe_sp_box light">
                            <div class="ptqe_sp_inner">
                                <div class="img_box">
                                    <img class="img-responsive" src="../images/pstar-2024/books.png" alt="img">
                                </div>
                                <div class="desc_box">
                                    <p class="">JEE Main 2022</p>
                                    <a class="downloadlink" href="../images/pstar-2024/Syllabus 7.pdf">Sample Paper</a>
                                </div>
                            </div>
                        </div>
                        <div class="ptqe_sp_box dark">
                            <div class="ptqe_sp_inner">
                                <div class="img_box">
                                    <img class="img-responsive" src="../images/pstar-2024/books.png" alt="img">
                                </div>
                                <div class="desc_box">
                                    <p class="">JEE Main 2023</p>
                                    <a class="downloadlink" href="../images/pstar-2024/Syllabus 8.pdf">Sample Paper</a>
                                </div>
                            </div>
                        </div>
                        <div class="ptqe_sp_box light">
                            <div class="ptqe_sp_inner">
                                <div class="img_box">
                                    <img class="img-responsive" src="../images/pstar-2024/books.png" alt="img">
                                </div>
                                <div class="desc_box">
                                    <p class="">JEE Advanced 2020</p>
                                    <a class="downloadlink" href="../images/pstar-2024/Syllabus 9.pdf">Sample Paper</a>
                                </div>
                            </div>
                        </div>
                        <div class="ptqe_sp_box dark">
                            <div class="ptqe_sp_inner">
                                <div class="img_box">
                                    <img class="img-responsive" src="../images/pstar-2024/books.png" alt="img">
                                </div>
                                <div class="desc_box">
                                    <p class="">JEE Advanced 2021</p>
                                    <a class="downloadlink" href="../images/pstar-2024/Syllabus 10.pdf">Sample Paper</a>
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
                                    <p class="">JEE Advanced 2022</p>
                                    <a class="downloadlink" href="../images/pstar-2024/Syllabus 11.pdf">Sample Paper</a>
                                </div>
                            </div>
                        </div>
                        <div class="ptqe_sp_box dark">
                            <div class="ptqe_sp_inner">
                                <div class="img_box">
                                    <img class="img-responsive" src="../images/pstar-2024/books.png" alt="img">
                                </div>
                                <div class="desc_box">
                                    <p class="">JEE Advanced 2023</p>
                                    <a class="downloadlink" href="../images/pstar-2024/Syllabus 11.pdf">Sample Paper</a>
                                </div>
                            </div>
                        </div> -->
                        <div class="ptqe_sp_box light">
                            <div class="ptqe_sp_inner">
                                <div class="img_box">
                                    <img class="img-responsive" src="../images/pstar-2024/books.png" alt="img">
                                </div>
                                <div class="desc_box">
                                    <p class="">NEET 2020</p>
                                    <a class="downloadlink" href="../images/pstar-2024/Syllabus 12.pdf">Sample Paper</a>
                                </div>
                            </div>
                        </div>
                        <div class="ptqe_sp_box dark">
                            <div class="ptqe_sp_inner">
                                <div class="img_box">
                                    <img class="img-responsive" src="../images/pstar-2024/books.png" alt="img">
                                </div>
                                <div class="desc_box">
                                    <p class="">NEET 2021</p>
                                    <a class="downloadlink" href="../images/pstar-2024/Syllabus 12.pdf">Sample Paper</a>
                                </div>
                            </div>
                        </div>
                        <div class="ptqe_sp_box light">
                            <div class="ptqe_sp_inner">
                                <div class="img_box">
                                    <img class="img-responsive" src="../images/pstar-2024/books.png" alt="img">
                                </div>
                                <div class="desc_box">
                                    <p class="">NEET 2022</p>
                                    <a class="downloadlink" href="../images/pstar-2024/Syllabus 12.pdf">Sample Paper</a>
                                </div>
                            </div>
                        </div>
                        <div class="ptqe_sp_box dark">
                            <div class="ptqe_sp_inner">
                                <div class="img_box">
                                    <img class="img-responsive" src="../images/pstar-2024/books.png" alt="img">
                                </div>
                                <div class="desc_box">
                                    <p class="">NEET 2023</p>
                                    <a class="downloadlink" href="../images/pstar-2024/Syllabus 12.pdf">Sample Paper</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
    
    
            <div class="row wow fadeInUp mt-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center px-3">Solution</h6>
                    <h1 class="mb-5">Sample Paper Solutions</h1>
    
                </div>
                <div class="col-12">
                    <div class="row">
                        <!-- <div class="col-6 col-sm-6 col-md-3">
                            <div class="smp_box">
                                <div class="img_box1">
                                    <img class="img-responsive" src="../images/pstar-2024/paperboard.png" alt="img">
                                </div>
                                <div class="desc_box">
                                    <p class="title">JEE Main 2020</p>
                                    <a class="sub downloadlink" href="../images/pstar-2024/sample paper 5.pdf">Solution</a>
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
                                    <p class="title">JEE Main 2021</p>
                                    <a class="sub downloadlink" href="../images/pstar-2024/sample paper 6.pdf">Solution</a>
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
                                    <p class="title">JEE Main 2022</p>
                                    <a class="sub downloadlink" href="../images/pstar-2024/sample paper 7.pdf">Solution</a>
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
                                    <p class="title">JEE Main 2023</p>
                                    <a class="sub downloadlink" href="../images/pstar-2024/sample paper 8th.pdf">Solution</a>
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
                                    <p class="title">JEE Advanced 2020</p>
                                    <a class="sub downloadlink" href="../images/pstar-2024/sample paper 9th.pdf">Solution</a>
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
                                    <p class="title">JEE Advanced 2021</p>
                                    <a class="sub downloadlink" href="../images/pstar-2024/sample paper 10.pdf">Solution</a>
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
                                    <p class="title">JEE Advanced 2022</p>
                                    <a class="sub downloadlink" href="../images/pstar-2024/sample paper 11 hm.pdf">Solution</a>
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
                                    <p class="title">JEE Advanced 2023</p>
                                    <a class="sub downloadlink" href="../images/pstar-2024/sample paper 11 hnm.pdf">Solution</a>
                                </div>
                                <a class="img_box1" href="../images/pstar-2024/sample paper 11 hnm.pdf">
                                    <img class="img-responsive" src="../images/pstar-2024/download.png" alt="img">
                                </a>
                            </div>
                        </div>
                    </div> -->
                    <div class="row secondary">
                        <div class="col-6 col-sm-6 col-md-3">
                            <div class="smp_box">
                                <div class="img_box1">
                                    <img class="img-responsive" src="../images/pstar-2024/paperboard.png" alt="img">
                                </div>
                                <div class="desc_box">
                                    <p class="title">NEET 2020</p>
                                    <a class="sub downloadlink" href="../images/pstar-2024/sample paper 12 hm.pdf">Solution</a>
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
                                    <p class="title">NEET 2021</p>
                                    <a class="sub downloadlink" href="../images/pstar-2024/sample paper 12 hnm.pdf">Solution</a>
                                </div>
                                <a class="img_box1" href="../images/pstar-2024/sample paper 12 hnm.pdf">
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
                                    <p class="title">NEET 2022</p>
                                    <a class="sub downloadlink" href="../images/pstar-2024/sample paper 12 hm.pdf">Solution</a>
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
                                    <p class="title">NEET 2023</p>
                                    <a class="sub downloadlink" href="../images/pstar-2024/sample paper 12 hnm.pdf">Solution</a>
                                </div>
                                <a class="img_box1" href="../images/pstar-2024/sample paper 12 hnm.pdf">
                                    <img class="img-responsive" src="../images/pstar-2024/download.png" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br><br>
    
    
    
            
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