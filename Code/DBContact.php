<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$msg = $_POST['message'];

$ip = $_SERVER['REMOTE_ADDR'];


$conn = mysqli_connect("localhost", "root", "", "minor_project");


$query = "insert into contact values(NULL,'$name','$email','$subject','$msg',1,null)";
$result = mysqli_query($conn, $query);
mysqli_close($conn);
header("Location: ./home_page.php");

?>