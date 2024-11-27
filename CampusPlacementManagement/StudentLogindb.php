<?php
if (isset($_POST['ssubmit'])) {
   $email = $_POST['txtEmail'];
   $password = $_POST['txtPassword'];
   $password = md5($password);

   $conn = mysqli_connect("localhost", "root", "", "minor_project");
   $query = "select * from student where s_email='$email' and s_pass='$password' and status=1 ";
   $result = mysqli_query($conn, $query);
   $count = mysqli_num_rows($result);


   if ($count == 0) {
      echo "<h1> Username and Password is Incorrect...!!! </h1>";
      include "./StudentLogin.php";
   } 
   else {

      session_start();
      $row = mysqli_fetch_array($result);
      $_SESSION['degree'] = $row['s_degname'];
      $_SESSION['sid'] = $row['s_id'];

      header("Location: ./student_dashboard.php");
      mysqli_close($conn);
   }


}
?>