<?php
if (isset($_POST['btnAdd'])) {

  $extension = strtolower(pathinfo($_FILES['fileupload']['name'],PATHINFO_EXTENSION));
  $uploadfile = "upload/" . time() . ".$extension";
  if ($extension == "jpg" || $extension == "jpeg" || $extension == "png") {
    if (move_uploaded_file($_FILES['fileupload']['tmp_name'],$uploadfile)) {
      echo "<h1> file uploaded</h1>";

    } else
      echo "<h1> error in file upload</h1>" . $_FILES['fileupload']['error'];
  } else {
    echo "<h1> only image file allowed ";
  }


  $name = $_POST['txtName'];
  $email = $_POST['txtEmail'];
  $password = $_POST['txtPassword'];
  $password = md5($password);
  $phonenumber = $_POST['txtNumber'];
  $address = $_POST['txtAddress'];
  $city = $_POST['txtcity'];
  $pincode = $_POST['txtPnumber'];
  $state = $_POST['txtstate'];
  $dob = $_POST['txtdate'];
  $mark1 = $_POST['txtmark1'];
  $mark2 = $_POST['txtmark2'];
  $mark3 = $_POST['txtmark3'];
  $dname = $_POST['degree'];
  $ip = $_SERVER['REMOTE_ADDR'];


  $conn = mysqli_connect("localhost", "root", "", "minor_project");


  $query = "insert into student values(NULL,'$name','$email','$password','$phonenumber','$address','$city','$pincode','$state','$dob','$mark1','$mark2','$mark3','$dname',NULL,1,1,0,'$uploadfile')";
  $result = mysqli_query($conn, $query);
  mysqli_close($conn);
  header("Location: ./StudentLogin.php");

}
?>