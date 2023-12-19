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

form {
    padding: 20px 30px;
}

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
                    <h1 class="display-3 text-white animated slideInDown"> student Corner</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="../index.html">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page"> student Corner</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

   <div class="container mt-5">

        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center px-3">  Form</h6>
            <h1 class="mb-5">Registration Form</h1>
            
        </div>
        <section class="section pages" style="padding-top:10px;">
            
            <div class="row shadow">
            <form id="form" autocomplete="off" action="#"  method="post">
                    <div class="row">
                        <div class='col-sm-2 wp pr'>
                            <div class='form-group'>
                                <label class="w3-text-grey">Name <span>*</span></label>
                                <input type="text" name="name" title="Only Alphabets Allowed" pattern="^[a-zA-Z]+([\s][a-zA-Z]+)*$" class="w3-input w3-border" required>
                            </div>
                        </div>
                        <div class='col-sm-2 wp pr'>
                            <div class='form-group'>
                                <label class="w3-text-grey">Email  <span>*</span></label>
                                <input type="email" name="email" class="w3-input w3-border" required>
                            </div>
                        </div>
                        <div class='col-sm-2 wp pr'>
                            <div class='form-group'>
                                <label class="w3-text-grey">Father Name <span>*</span></label>
                                <input type="text" name="fname" class="w3-input w3-border"  title="Only Alphabets Allowed" pattern="^[a-zA-Z]+([\s][a-zA-Z]+)*$" required>
                            </div>
                        </div>
                        <div class='col-sm-2 wp pr'>
                            <div class='form-group'>
                                <label class="w3-text-grey">Father Mobile  <span>*</span></label>
                                <input type="text" name="fmobile" class="w3-input w3-border" minlength="10" maxlength="10" pattern="^[0-9]*$" title="Only Numeric values allowed" required>
                            </div>
                        </div>
                        <div class='col-sm-2 wp pr'>
                            <div class='form-group'>
                                <label class="w3-text-grey">Student Phone</label>
                                <input type="text" name="phone" class="w3-input w3-border" minlength="10" maxlength="10" pattern="^[0-9]*$" >
                            </div>
                        </div>
                        <div class='col-sm-2 wp pr'>
                            <div class='form-group'>
                                <label class="w3-text-grey">Roll No. <span>*</span></label>
                                <input type="number" min="0" name="rollno" class="w3-input w3-border">
                            </div>
                        </div>
                        <div class="col-sm-2 wp pr">
                            <div class='form-group'>
                                <label class="w3-text-grey">Select Course  <span>*</span></label>
                                <select name="courseId" class="w3-input w3-border" required  onchange="loadBatches(this.value)">
                                <option value="">Select Course</option>
                                <option value='18'>11th Medical</option><option value='19'>11th Non Medical</option><option value='20'>Genesis</option><option value='21'>12th non medical</option><option value='22'>12th medical</option><option value='24'>Testing</option><option value='25'>Biogene</option><option value='26'>NTSE</option><option value='27'>P-star</option><option value='28'>PSAT 2022</option><option value='34'>Test Series</option><option value='35'>Test Series</option>							</select>
                            </div>
                        </div>
                        <div class="col-sm-2 wp pr">
                            <div class='form-group'>
                                <label class="w3-text-grey">Select Batch  <span>*</span></label>
                                <select name="batchId" class="w3-input w3-border" required id="batch">
                                    <option value="">Select Batch</option>
                                </select>
                            </div>
                        </div>
                        <div class='col-sm-2 wp pr'>
                            <div class='form-group'>
                                <label class="w3-text-grey">Gender  <span>*</span></label>
                                <select name="gender" class="w3-input w3-border" required>
                                <option>Male</option>
                                <option>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class='col-sm-2 wp pr'>
                            <div class='form-group'>
                                <label class="w3-text-grey">D.O.B <span>*</span></label>
                                <input type="text" name="dob" class="w3-input w3-border datepickerS" required>
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
                        <div class='col-sm-0 wp pr'>
                            <div class='form-group'>
                                <!-- <label class="w3-text-grey">Biometric ID</label> -->
                                <input type="hidden" min="1" name="bioid" class="w3-input w3-border">
                            </div>
                        </div>
                        <div class="col-sm-3 wp pr">
                            <div class="form-group">
                            <label>Choose Image</label><br>
                            <input type="file" accept="image/x-png,image/gif,image/jpeg" id="imagefile" onchange="$('#showselected').html('Selected File:<b> '+this.files[0].name+'</b>')" name="image" style="position:absolute;left:-2000px">
                                <input type="button" value="Choose Image" onclick="imagefile.click()" class="btn btn-default btn-block">
                                
                            </div>
                        </div>
                        <div class="col-sm-3 wp pr">
                            <div class="form-group">
                            <label>&nbsp; </label><br>
                                <input type="submit" value="Submit" class="btn btn-default btn-block">
                            </div>
                        </div>
                        <div class="col-sm-12 wp"><div id="showselected"></div></div>
                        <div class='col-sm-12 wp'>
                            <div class="text-danger"><b>For any Enquiry related to Registration whatsapp 08808585664</b></div>
                        </div>
                    </div>
                        
                </form>
                </div>
        </section>
    </div>
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