<?php

$con = mysqli_connect("localhost", "root", "", "minor_project");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';




$mail = new PHPMailer();
$mail->IsSMTP();

$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port = 587;
$mail->Host = "smtp.gmail.com";

$mail->Username = "cpms388@gmail.com";
$mail->Password = "uiqjtsvdelynirkp";



$mail->SetFrom("cpms388@gmail.com", "CPMS");
$id = $_POST['id'];
$sql = "select c_email from company where c_id=$id";
$res = mysqli_query($con, $sql);
if (mysqli_num_rows($res) > 0) {
  $mail->addReplyTo("cpms388@gmail.com");
  while ($x = mysqli_fetch_assoc($res)) {

    $mail->addBCC($x['c_email']);

  }
 
  $mail->IsHTML(true);
  $mail->Subject = 'Approved - CPMS Portal ';
  $mail->Body = "<h3> Your Company Request Is Approved </h3>";
  $mail->AltBody = "<h3> Your Company Request Is Approved </h3>";

  if ($mail->Send()) {
    //  header("Location: ./Admin_facultylist.php");
  } else {
    echo "Email not sent";

  }
} else {
  echo "no data found";
}





?>