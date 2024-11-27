<?php

if (isset($_POST['btnAdd'])) {

    session_start();
    $id = $_SESSION['sid'];

    $newpassword = $_POST['txtNewPass'];
    $newpassword = md5($newpassword);

    $conn = mysqli_connect("localhost", "root", "", "minor_project");

    $query = "update student set s_pass='$newpassword' where s_id=$id";
    mysqli_query($conn, $query);
    mysqli_close($conn);
    header("Location: ./student_changepass.php");

}
?>