<?php

function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }

$servername = "localhost";
$username = "u898596833_pinnacle";
$password = "Pinnacle@0121";
$dbname = "u898596833_pinnacle_regis";

$name=test_input($_POST["name"]);
$dob=test_input($_POST["dob"]);
$gender=test_input($_POST["gender"]);
$category=test_input($_POST["category"]);
$fname=test_input($_POST["fname"]);
$batchId=test_input($_POST["batchId"]);
$school=test_input($_POST["school"]);
$schoolCity=test_input($_POST["schoolCity"]);
$schoolState=test_input($_POST["schoolState"]);
$address=test_input($_POST["address"]);
$city=test_input($_POST["city"]);
$district=test_input($_POST["district"]);
$state=test_input($_POST["state"]);
$pincode=test_input($_POST["pincode"]);
$phone=test_input($_POST["phone"]);
$fmobile=test_input($_POST["fmobile"]);
$email=test_input($_POST["email"]);


 	// Create connection
 $conn = new mysqli($servername, $username, $password,$dbname);

 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }

 $sql = "INSERT into pstar_registration values('$name','$dob','$gender','$category','$fname','$batchId','$school','$schoolCity','$schoolState','$address','$city','$city','$district','$state','$pincode','$phone','$fmobile','$email')";

echo $sql;

 if($conn->query($sql)===TRUE)
 {
     
    header( 'Location: ../P-STAR/about.html' );

 }


 

 




?>
