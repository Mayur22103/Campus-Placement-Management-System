<?php
if (isset($_POST['lsubmit'])) {
    $email = $_POST['txtEmail'];
    $password = $_POST['txtPassword'];
    $password = md5($password);
    $conn = mysqli_connect("localhost", "root", "", "minor_project");
    $query = "select * from faculty where f_email='$email' and f_password='$password' and role=1";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);
    if ($count == 0) {
        echo "<h1> Username and Password is Incorrect...!!! </h1>";
        include "PlacementOfficerLogin.php";

    } else {
        session_start();
        $_SESSION['fid'] = $row['f_id'];
        $_SESSION['roleid'] = $row['role'];
        if ($row['l_status'] == 1) {
            
            header("Location: ./po_dashboard.php");

        } else if ($row['l_status'] == 0) {

            header("Location: ./po_change_pass.php");
        }
        mysqli_close($conn);
    }

}
?>