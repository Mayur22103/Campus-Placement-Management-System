<?php

if (isset($_POST['csubmit'])) {

    session_start();
    $id = $_SESSION['fid']; 
    
    $newpassword = $_POST['txtNewPass'];
    $newpassword = md5($newpassword);
   
    $conn = mysqli_connect("localhost", "root", "", "minor_project");
   
        $query = "update faculty set f_password='$newpassword',l_status=1 where f_id=$id";
        mysqli_query($conn, $query);
        mysqli_close($conn);
        header("Location: ./po_dashboard.php");
  
   
   
   

}
?>



