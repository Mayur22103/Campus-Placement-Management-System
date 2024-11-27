<?php

if (isset($_POST['btnAdd'])) {

    session_start();
    $id = $_SESSION['userid'];
    $name = $_POST['txtName'];
    $phn = $_POST['txtPhone'];
    $email = $_POST['email'];
    $addr = $_POST['Address'];
    $city = $_POST['City'];
    $pincode = $_POST['Pincode'];

    $conn = mysqli_connect("localhost", "root", "", "minor_project");
    $query = "update company set c_name='$name',c_contact='$phn',c_email='$email',c_address='$addr',c_city='$city',c_pincode='$pincode' where c_id=$id";
    mysqli_query($conn, $query);
    mysqli_close($conn);
    header("Location: ./com_profile.php");

}
?>