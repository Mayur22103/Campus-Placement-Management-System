<?php

$id = $_POST['id'];

session_start();
$sid = $_SESSION['sid'];

$conn = mysqli_connect("localhost", "root", "", "minor_project");
$query = "delete from apply where student_id='$sid' and jobdetail_id='$id'";
mysqli_query($conn, $query);
mysqli_close($conn);
header("Location: ./studentjobdetail1.php");

?>