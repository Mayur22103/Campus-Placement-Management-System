<?php

if (isset($_POST['btnAdd'])) {

    session_start();
    $id = $_SESSION['userid'];

    $newpassword = $_POST['txtNewPass'];
    $newpassword = md5($newpassword);

    $conn = mysqli_connect("localhost", "root", "", "minor_project");

    $query = "update company set pass='$newpassword' where c_id=$id";
    mysqli_query($conn, $query);
    mysqli_close($conn);
    header("Location: ./com_changepass.php");

}
?>