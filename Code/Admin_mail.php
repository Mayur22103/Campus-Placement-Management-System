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
$mail->Password = "xxxxxxxxxxxxxxxxxxx";



$mail->SetFrom("cpms388@gmail.com", "CPMS");
$id = $_POST['id'];
$sql = "select f_email from faculty where f_id=$id";
$res = mysqli_query($con, $sql);
if (mysqli_num_rows($res) > 0) {
  $mail->addReplyTo("cpms388@gmail.com");
  while ($x = mysqli_fetch_assoc($res)) {

    $mail->addBCC($x['f_email']);

  }
  $sql1 = "select f_name from faculty where f_id=$id";
  $records = mysqli_query($con, $sql1);
  $y = mysqli_fetch_assoc($records);
  $name = $y['f_name'];
  $mail->IsHTML(true);
  $mail->Subject = 'Registred - CPMS Portal ';
  $mail->Body = "<h3>You can login to the platform using following credentials : </h3><h4>
   Dear $name <br>Your Username Is : Your E-mail Address<br>
   Your Temporary Password Is : 12345<br><br>
   You Can Change Your Password After Login
  </h4>";
  $mail->AltBody = "<h3>You can login to the platform using following credentials : </h3><h4>
  Dear $name <br>Your Username Is : Your E-mail Address<br>
  Your Temporary Password Is : 12345<br><br>
  You Can Change Your Password After Login
 </h4>";


  if ($mail->Send()) {
    //  header("Location: ./Admin_facultylist.php");
  } else {
    echo "Email not sent";

  }
} else {
  echo "no data found";
}





?>
