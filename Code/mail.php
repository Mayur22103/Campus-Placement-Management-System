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

$sql = "select s_email from student where m_status=0";
$res = mysqli_query($con, $sql);
if (mysqli_num_rows($res) > 0) {
  $mail->addReplyTo("cpms388@gmail.com");
  while ($x = mysqli_fetch_assoc($res)) {

    $mail->addBCC($x['s_email']);

  }
  $mail->IsHTML(true);
  $mail->Subject = 'Registred - CPMS Portal ';
  $mail->Body = '<h3>You can login to the platform using following credentials : </h3><h4>
  Username: Your E-mail Address
  </h4><h4>Password: Your Mobile Number</h4>';
  $mail->AltBody = '<h3>You can login to the platform using following credentials : </h3><h4>
  Username: Your E-mail Address
  </h4><h4>Password: Your Mobile Number</h4>';

  if ($mail->Send()) {
    $query = "update student set m_status=1 where m_status=0";
    mysqli_query($conn, $query);
    header("Location: ./po_uploadstudent.php");
  } else {
    echo "Email not sent";
   
  }
} else {
  echo "no data found";
}





?>