<?php
if (isset($_POST['btnAdd'])) {
  $name = $_POST['txtName'];
  $email = $_POST['txtEmail'];
  $password = $_POST['txtPassword'];
  $password = md5($password);
  $phonenumber = $_POST['txtNumber'];
  $address = $_POST['txtAddress'];
  $city = $_POST['txtcity'];
  $pincode = $_POST['txtPnumber'];
  $state = $_POST['txtstate'];
  $country = $_POST['txtcountry'];
  $personename = $_POST['txtpname'];
  $personecontact = $_POST['txtCnumber'];
  $ip = $_SERVER['REMOTE_ADDR'];
  $a_status = 0;

  $conn = mysqli_connect("localhost", "root", "", "minor_project");
  $query = "insert into company values(NULL,'$name','$email','$password','$phonenumber','$address','$city','$pincode','$state','$country','$personename','$personecontact',NULL,1,1,'$a_status')";

  mysqli_query($conn, $query);
  mysqli_close($conn);
  echo '<script language="javascript">';
  echo 'alert("Waiting For Approvel After That You Can Login");';
  echo 'window.location.href = "./CompanyLogin.php"';
  echo '</script>';
 // header("Location: ./CompanyLogin.php");
}
?>