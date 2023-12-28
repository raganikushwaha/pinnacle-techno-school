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
        .ptqe_req_section{
		background: #f3a23a;
		padding:20px;
		margin: 20px 0;
	}
	.ptqe_req_section .form_title{
		margin: 0;
		font-size: 30px;
		background: #f3a23a;
		color: #fff;
		padding: 5px 10px;
	}
	.ptqe_req_section .logo_box{
		width:50px;
		max-width: 50px;
	}
	.ptqe_req_section .ptqe_req_block{
		border: 7px solid #fff;
		padding:20px 10px;
	}
	.ptqe_req_section .ptqe_reg_page{
		background:#fff;
		padding: 20px;
	}
	
    .regform{

        margin-left: 30px;
    }
    @media (max-width:575px) {
        .regform{

         margin-left: 0px;  
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
                    <h1 class="display-3 text-white animated slideInDown"> P-STAR Register</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="../index.php">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">  P-STAR</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <div class="container-fluid">
        <div class="container">
            <div class="ptqe_req_section">
                <div class="ptqe_req_block">
                    <div class="ptqe_reg_page">
                        <div class="row">
                            <div class="col-xs-12 col-md-3">
                                <div class="logo_box"><img src="../img/logo1.jpg" alt="logo" class="img-responsive" style="height: 80px;"></div>
                            </div>
                            <div class="col-xs-12 mt_xs_15 col-md-6 text-center"> <label class="form_title">Registration Form</label> </div>
                            <div class="col-xs-13 col-sm-3 hidden-xs">
                                <!-- <div class="logo_box"><img src="#" alt="logo" class="img-responsive"></div> -->
                            </div>
                        </div>
    
                        <div class="row regform mt-4">	 	
                            <div class="col-lg-6 col-md-6">
                                <form>
                                    <div class="row mb-3">
                                      <label class="form-label">Name:-</label>
                                      <div class="col-md-9">
                                        <input type="text" class="form-control" id="">
                                      </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="form-label">School Name:-</label>
                                        <div class="col-md-9">
                                          <input type="text" class="form-control" id="">
                                        </div>
                                      </div>
                                      <div class="row mb-3">
                                        <label class="form-label">Contact no:-</label>
                                        <div class="col-md-9">
                                          <input type="text" class="form-control" id="">
                                        </div>
                                      </div>
                                      <div class="row mb-3">
                                        <label class="form-label">Present Class:-</label>
                                        <div class="col-md-9">
                                            <select class="form-select">
                                                <option selected>6th</option>
                                                <option value="1">7th</option>
                                                <option value="2">8th</option>
                                                <option value="3">9th</option>
                                                <option value="4">10th</option>
                                                <option value="5">11th Maths/Bio</option>
                                                <option value="6">12th Maths/Bio</option>
                                               
                                            </select> 
                                            
                                        </div>
                                      </div>
                                      <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label">Gender:-</label>
                                        <div class="col-sm-6">
                                          <input type="radio" name="ask"> Male
                                          <input type="radio" name="ask"> Female
                                        </div>
                                      </div>
                            </div>
                           
                            <div class="col-lg-6 col-md-6">
                                 
                                 <div class="row mb-3">
                                    <label class="form-label">Father Name:-</label>
                                    <div class="col-md-9">
                                      <input type="text" class="form-control" id="">
                                    </div>
                                  </div>
                                  <div class="row mb-3">
                                    <label class="form-label">Address:-</label>
                                    <div class="col-md-9">
                                      <input type="text" class="form-control" id="">
                                    </div>
                                  </div>
                                  <div class="row mb-3">
                                    <label class="form-label">E-mail ID:-</label>
                                    <div class="col-md-9">
                                      <input type="text" class="form-control" id="">
                                    </div>
                                  </div>
                                  <div class="row mb-3">
                                    <label class="form-label">Category:-</label>
                                    <div class="col-md-9">
                                        <select class="form-select">
                                            <option selected>GEN </option>
                                            <option value="1">OBC </option>
                                            <option value="2">SC</option>
                                            <option value="3">ST</option>
                                            <option value="4">PH</option>
                                           
                                        </select> 
                                    </div>
      
                                  </div>
                                </div>
                                  <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1"> <b>DECLARATION:</b> I hereby declare that all the information submitted by me in the registration form is correct.</label>
                                  </div>
                                  <div class="col-sm-12 col-md-12 text-center">
                                    <button class="banner_btn">submit</button>
                                </div>
                               
                            </form>  
                        </div>
                    </div>
                </div>
        </div>
        

    </div>


   
       
        
       
   


    
        

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