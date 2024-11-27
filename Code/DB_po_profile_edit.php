<?php

if (isset($_POST['btnAdd'])) {

    session_start();
    $id = $_SESSION['fid'];
    $name = $_POST['txtName'];
    $phn = $_POST['txtPhone'];
    $email = $_POST['email'];
    $dob = $_POST['birthdate'];


    $conn = mysqli_connect("localhost", "root", "", "minor_project");
    $query = "update faculty set f_name='$name',f_contactnumber='$phn',f_email='$email',f_dob='$dob' where f_id=$id";
    mysqli_query($conn, $query);
    mysqli_close($conn);
    header("Location: ./po_profile.php");

}
?>