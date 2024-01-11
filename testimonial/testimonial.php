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
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

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

    <style>
    .testimonial-section{      
    background: url(../img/card1.webp);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
   }
    .testimonial-section .carousel-item{
    margin-top: 50px; 
    padding: 40px 30px;
    background-color: #f7fcfc;
    border-radius: 0.9375rem;
    text-align: center;
    position: relative;
    
    } 
    .testimonial-section .carousel-item img{ 
        width: 80px;
        height: 80px;  
        border-radius: 50%;
        border: 5px solid #f6fbfb;
        transition: all .4s ease;
        transform: translate(-50%, -50%);
        top: 10px;
        position: absolute;
    }
    .main-content h5{
    font-weight: 700;
    color: rgb(28, 22, 22);

    }
    .main-content {
        position: relative;
        z-index: 4;
        margin: 35px 0;
    }
    .main-content:before,
    .main-content:after{
        position: absolute;
        font-family: 'FontAwesome';
        font-size: 72px;
        z-index: -4;
    }
    .main-content::before {
        left: 0;
        top: -60px;
        content: "\201C";
        color:  #1f0000;
       
    }
    .main-content::after {
        right: 0;
        bottom: -33px;
        content: "\201E";
        color:   #1f0000;
    }
    .testimonial-section .carousel-item p, h3{   
        text-align: justify;
    }
    .carousel-control-prev{
    font-size: 4px;
    width: 20px;
        height: 20px;
        border-radius: 50%;
        top:50%;
        background-color: rgba(34, 23, 25, 0.875);
    }
    .carousel-control-next {   
        width: 20px;
        height: 20px; 
        border-radius: 50%;
        top:50%;
        background-color:  rgba(34, 23, 25, 0.875);
    }
    @media (max-width: 768px) {
        .carousel-control-prev{
            display: none;
        }
    
    .carousel-control-next {   
        display: none;
    }
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
                    <h1 class="display-3 text-white animated slideInDown">Testimonials</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="../index.php">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">testimonial</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    


    <!-- Section-5 testimonial-->
    <div class="container mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="text-center">
            <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
            <h1 class="mb-5">Testimonial</h1>
        </div>
        <div class="row text-center mb-4">
            <div class="col-md-6 col-sm-12"><h2>Student's Testimonials</h2></div>
            <div class="col-md-6 col-sm-12"><h2> Parent's Testimonials</h2></div>     
        </div>
    </div>
  
   
    <section class="testimonial-section">      
        <div class="container"> 
            <div class="row">
                <div class="col-sm-6 col-lg-6 mb-4">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">                   
                                <img src="../banner/testimonials/tanvika.jpeg">
                                <div class="main-content">
                                    <h3>Tanvika Ojha </h3>
                                    <p>I joined Pinnacle in class 11th and now I am in 12th standard. Pinnacle has made a big difference in my life, not just at academically but also for me personally. Great teachers and a nice environment at the institute have inspired me to learn and succeed. They also helped me become a better person. I feel ready to step forward towards my future goals.
                                    </p>
                                </div>         
                            </div>
                            <div class="carousel-item">                   
                                <img src="../banner/testimonials/achal.jpeg">
                                <div class="main-content">
                                    <h3>Achal Gupta </h3>
                                    <p>I joined Pinnacle Techno School when I was in class 9th, scored 92% in 10th standard and now I am preparing for NEET. I am currently in 11th standard and I am confident to crack NEET with the help of my mentor’s guidance and my hard work. I would like to thank my teachers at Pinnacle to show me the path to success. I am hopeful to fulfil my dream of becoming a doctor one day.
                                </p>
                                </div>         
                            </div>
                            <div class="carousel-item">                   
                                <img src="../banner/testimonials/ashutosh.jpeg">
                                <div class="main-content">
                                    <h3>Ashutosh Pandey </h3>
                                    <p>Joined Pinnacle in class 11th and now I am in class 12th. I am now focusing on engineering and aims to crack IIT-JEE. A qualified team of teachers, expert guidance and great learning environment at Pinnacle helped me a lot in my academics. I am now clear about choosing my journey towards JEE preparation and hopeful to get good rank in my exam with the help of my faculty teachers.
                                </p>
                                </div>         
                            </div>
                            <div class="carousel-item">                   
                                <img src="../banner/testimonials/disha.jpeg">
                                <div class="main-content">
                                    <h3>Disha Sharma </h3>
                                    <p>Joined Pinnacle when I was in 9th std and now I am in 10th std. I dream about joining IIT one day and I have already started my preparation for JEE at Pinnacle. The supportive and engaging learning atmosphere at the institute makes the whole learning process easy and enjoyable. When you enjoy learning your subjects, it means you are on the right path and that is how I know I am on the right path with right guidance. Thank you pinnacle for the support and guidance.   
                                </p>
                                </div>         
                            </div>
                            <div class="carousel-item">                   
                                <img src="../banner/testimonials/shakshi.jpeg">
                                <div class="main-content">
                                    <h3>Shakshi Pandey </h3>
                                    <p>I Joined pinnacle when I was in class 6th and it was the best decision to start early at such a great institute. Pinnacle provided me a solid foundation and great sense of confidence . Innovative teaching methodology and interactive learning lays a strong foundation for my academic pursuits. Now I am in class 8th and my academic goals of my life are clear to me. Thank you Pinnacle for setting a stage for continuous success in my academic journey.

                                    </p>
                                </div>         
                            </div>
                            <div class="carousel-item">                   
                                <img src="../banner/testimonials/ishan.jpeg">
                                <div class="main-content">
                                    <h3>Ishan Tiwari </h3>
                                    <p>I started at Pinnacle in class 9th, my mentors at Pinnacle helped to achieve 94% in my 10th board exams. I am now, with the support of my teachers at pinnacle, aiming  to crack IIT-JEE . Pinnacle's special way of teaching helped me get better marks and also fueled my interest towards science and mathematics. I'm now hopeful to do better in my academics in upcoming months.
                                </p>
                                </div>         
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                            </button>
                        </div>  
                    </div>                   
                </div>
            

                <div class="col-sm-6 col-lg-6 mb-4">
                    <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">                   
                            <img src="../banner/testimonials/praveen.jpeg">
                                <div class="main-content">
                                    <h3>Praveen Bisen</h3>
                                    <p>I enrolled my son in Pinnacle Techno School at 7th standard. He is currently studying in class 8th and exceling in his studies. I am very impressed by his progress ever since he joined Pinnacle. Pinnacle offers supportive environment and team of qualified teachers that had played major roles in his progress. As a parent, I am confident that my academic endeavor.son is at right place and he is definitely going to succeed in his.</p>
                                </div>         
                            </div>
                            <div class="carousel-item">                   
                                <img src="../banner/testimonials/shabd.jpg">
                                <div class="main-content">
                                    <h3>Shabd prakash gupta</h3>
                                    <p>My daughter Anchal and son Ayush joined Pinnacle in 9th standard. Currently, Anchal is in the 11th standard, preparing for the NEET, and both my kids are doing really well in their studies. Especially, my daughter, who has shown remarkable improvement in her studies and is confident that she is going to crack NEET in her first attempt. I would like to thank pinnacle and its faculty teachers for such a positive transformation in my children.</p>
                                </div>         
                            </div>
                            <div class="carousel-item">                   
                                <img src="../img/gal1.webp">
                                <div class="main-content">
                                    <h3>Lorem ipsum</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure adipisci quidem aspernatur animi quasi facilis, accusantium debitis impedit incidunt illum voluptatem, blanditiis enim, aut architecto reprehenderit repudiandae esse doloribus assumenda.</p>
                                </div>         
                            </div>
                            <div class="carousel-item">                   
                                <img src="../img/gal1.webp">
                                <div class="main-content">
                                    <h3>Lorem ipsum</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure adipisci quidem aspernatur animi quasi facilis, accusantium debitis impedit incidunt illum voluptatem, blanditiis enim, aut architecto reprehenderit repudiandae esse doloribus assumenda.</p>
                                </div>         
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                            </button>
                        </div>                  
                    </div>
                </div>                      
            </div>        
        </div>  
    </section>
      
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