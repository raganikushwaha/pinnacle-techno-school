<?php

$servername = "localhost";
$username = "u898596833_meet_invisorte";
$password = "Invisor@TECH1";
$database = "u898596833_query_schoolpp";
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "school";

$name = $_POST["name"];
$phone = $_POST["email"];
$message = $_POST["message"];
$subject = $_POST["subject"];

$conn = mysqli_connect($servername, $username, $password, $database);

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



$to = 'info@pinnacletechnoschool.com';
$to_name= 'hello';
$subject= 'Query';
$body = '<p> Dear Team, <br><br> Please find below Query -
<table style="width:70%; border:1px solid black;">
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Message</th>
    <th>Subject</th>
    
  </tr>
  <tr>
       <td>'. $name.'</td>
       <td>'. $phone.'</td>
       <td>'. $message.'</td>
       <td>'. $subject.'</td>
       
    
  </tr>
  
</table>
<br><br>
Thanks 
'

;

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = false;
$mail->Debugoutput = 'html';
$mail->Host = "smtp.hostinger.com";
$mail->Port = 25;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->isHTML(true);
$mail->Username = "info@pinnacletechnoschool.com";
$mail->Password = "Pinnacle@123";

//Set who the message is to be sent from
$mail->setFrom('pinnacle@pinnacletechnoschool.com', 'pinnacletechnoschool.com');
//Set an alternative reply-to address
$mail->addReplyTo('pinnacle@pinnacletechnoschool.com', 'pinnacletechnoschool.com');

//Set who the message is to be sent to
$mail->addAddress($to, $to_name);
// $mail->addAddress('shailendra.kharwar@techguard.in', 'SHUBHAM SHARMA');

//Set the subject line
$mail->Subject = $subject;
$mail->msgHTML($body);


if (!$mail->send()) {
    $response ="Mailer Error: " . $mail->ErrorInfo;
} else {
    $response ="Message sent!";
}

$sql = "INSERT INTO contact (name, email, subject, message) VALUES ('$name', '$phone', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    header('Location: contact/contact.html');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

?>