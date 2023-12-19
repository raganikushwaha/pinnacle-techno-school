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
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!----------------include_navbar---------------------------->


    <?php require "include/index_navbar.php" ?>

   <!----------------end_include_navbar---------------------------->

    <!-- Header Start -->
    <div class="container-fluid" style="background-color:#3b0505; height: 170px;">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center mt-3">
                    <h1 class="display-3 text-white animated slideInDown">LOGIN</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page"> LOGIN</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    
       <section>
        <div class="container mt-5 mb-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center px-3">LOGIN</h6>
                <h1 class="mb-5">Login Form</h1>
                
            </div>

            <div class="container">
                <div class="row">
                    <div class="col d-flex justify-content-center">
                     <div class="col-sm-12 col-md-6">
                        <div class="card">
                                    <!-- <div class="card-title text-white bg-white text-center p-2 mt-2">
                                     <h3> Student Login Form</h3>
                                    </div> -->
                         <div class="card-body">
                           <form action="" method="post">
                              <div class="form-group">
                                 <label for="email">Email ID:</label>
                                 <input type="text" name="email" class="form-control" required>
                              </div><br/>
                              <div class="form-group">
                              <label for="password">Password:</label>
                              <input type="password" name="password" class="form-control" required>
                              </div>
                              </div><br/>
                              <div class="card-footer text-right">
                              <button type="submit" name="login" class="btn btn-warning">Login</button> |
                              <a href="P-STAR/register.php"> Not registered yet ?</a>	
                           </form>   <br/>                  
                         </div>
                       </div>
                   </div> 
                 </div> 
               </div> 
           </div>             
   </section> 
    

  <br> <br>
        

    <!-------------------------include footer------------------------------------->

    <?php require "include/index_footer.php" ?>

   <!-------------------------include footer------------------------------------->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg  btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>