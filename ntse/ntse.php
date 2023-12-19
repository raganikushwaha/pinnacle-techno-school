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
  .form-group {
    margin-bottom: 15px;
   }

.w3-border {
    border: 1px solid #ccc!important;
}
    .w3-input {
    padding: 8px;
    display: block;
    border: none;
    border-bottom: 1px solid #ccc;
    width: 100%;
}

.b-warning, .b-warning:hover {
    background: #3b0505;
    color: #fff;
    padding: 5px;
}

label span {
    color: #FF5733;
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
                    <h1 class="display-3 text-white animated slideInDown">Register NTSE</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="../index.php">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">NTSE</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <div class="container mt-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center px-3">  Registration</h6>
            <h1 class="mb-5"> NTSE Registration</h1>
            
        </div>
        <section class="section pages">
            <div class="row shadow">
                <div class="col-sm-12">
                     
                    <div class="mycardbody">
                        <form id="form" action="#" method="post">
                            <div class="row mt-5">
                                <div class='col-sm-2 wp pr'>
                                    <div class='form-group'>
                                        <label class="w3-text-grey">Name <span>*</span></label>
                                        <input type="text" name="name"  title="Only Alphabets Allowed" pattern="^[a-zA-Z]+([\s][a-zA-Z]+)*$" class="w3-input w3-border" required>
                                    </div>
                                </div>
                                <div class='col-sm-2 wp pr'>
                                    <div class='form-group'>
                                        <label class="w3-text-grey">Email <span>*</span></label>
                                        <input type="email" name="email" class="w3-input w3-border" required>
                                    </div>
                                </div>
                                <div class='col-sm-2 wp pr'>
                                    <div class='form-group'>
                                        <label class="w3-text-grey">Father Name <span>*</span></label>
                                        <input type="text" name="fname" title="Only Alphabets Allowed" pattern="^[a-zA-Z]+([\s][a-zA-Z]+)*$" class="w3-input w3-border" required>
                                    </div>
                                </div>
                                <div class='col-sm-2 wp pr'>
                                    <div class='form-group'>
                                        <label class="w3-text-grey">Father Mobile <span>*</span></label>
                                        <input type="text" name="fmobile" minlength="10" maxlength="10" pattern="^[0-9]*$" title="Only Numeric values allowed" class="w3-input w3-border" required>
                                    </div>
                                </div>
                                <div class='col-sm-2 wp pr'>
                                    <div class='form-group'>
                                        <label class="w3-text-grey">Student Phone</label>
                                        <input type="text" id="sphone" name="phone" minlength="10" maxlength="10" pattern="^[0-9]*$" title="Only Numeric values allowed" class="w3-input w3-border">
                                    </div>
                                </div>
                                    <div class='col-sm-2 wp pr'>
                                    <div class='form-group'>
                                        <label class="w3-text-grey">School</label>
                                        <input type="text" name="school" class="w3-input w3-border">
                                    </div>
                                </div><br/><br/><br/>
                                <div class='col-sm-2 wp pr'>
                                    <div class='form-group'>
                                        <label class="w3-text-grey">Gender <span>*</span></label>
                                        <select name="gender" class="w3-input w3-border" required>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                </div>
    
                                <div class='col-sm-2 wp pr'>
                                    <div class='form-group'>
                                        <label class="w3-text-grey">D.O.B <span>*</span></label>
                                        <input type="text" name="dob" class="w3-input w3-border datepicker" required>
                                    </div>
                                </div>
                                <div class='col-sm-4 wp pr'>
                                    <div class='form-group'>
                                        <label class="w3-text-grey">Village/City <span>*</span></label>
                                        <input type="text" name="city" class="w3-input w3-border" required>
                                    </div>
                                </div>
                                <div class='col-sm-12 wp pr'>
                                    <div class='form-group'>
                                        <label class="w3-text-grey">Address <span>*</span></label>
                                        <textarea name="address" class="w3-input w3-border" required></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-3 wp pr">
                                    <div class="form-group">
                                        <input type="submit" value="Submit" class="w3-btn b-warning">
                                    </div>
                                </div>
                                <div class="col-sm-6 wp pr"></div>
                                <div class="col-sm-6 wp pr">
                                    <div id="showselected"></div>
                                </div>
                            </div>
                        </form>
                    </div>
    
                </div>
            </div>
             </div>
        </section>

   <br> <br>
        

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