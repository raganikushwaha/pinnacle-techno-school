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
  
    <section class="testimonial-section wow fadeInUp" data-wow-delay="0.1s">      
        <div class="container"> 
            <div class="row">
                <div class="col-sm-6 col-lg-6 mb-4">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">                   
                                <img src="../img/stu2.webp">
                                <div class="main-content">
                                    <h3>Lorem ipsum</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure adipisci quidem aspernatur animi quasi facilis, accusantium debitis impedit incidunt illum voluptatem, blanditiis enim, aut architecto reprehenderit repudiandae esse doloribus assumenda.</p>
                                </div>         
                            </div>
                            <div class="carousel-item">                   
                                <img src="../img/stu2.webp">
                                <div class="main-content">
                                    <h3>Lorem ipsum</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure adipisci quidem aspernatur animi quasi facilis, accusantium debitis impedit incidunt illum voluptatem, blanditiis enim, aut architecto reprehenderit repudiandae esse doloribus assumenda.</p>
                                </div>         
                            </div>
                            <div class="carousel-item">                   
                                <img src="../img/stu2.webp">
                                <div class="main-content">
                                    <h3>Lorem ipsum</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure adipisci quidem aspernatur animi quasi facilis, accusantium debitis impedit incidunt illum voluptatem, blanditiis enim, aut architecto reprehenderit repudiandae esse doloribus assumenda.</p>
                                </div>         
                            </div>
                            <div class="carousel-item">                   
                                <img src="../img/stu2.webp">
                                <div class="main-content">
                                    <h3>Lorem ipsum</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure adipisci quidem aspernatur animi quasi facilis, accusantium debitis impedit incidunt illum voluptatem, blanditiis enim, aut architecto reprehenderit repudiandae esse doloribus assumenda.</p>
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