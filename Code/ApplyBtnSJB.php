<?php

$id = $_POST['id'];
session_start();
$sid = $_SESSION['sid'];

$conn = mysqli_connect("localhost", "root", "", "minor_project");
$query = "select * from apply where student_id='$sid'and jobdetail_id='$id'";
$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);


if ($count == 0) {
   $query = "insert into apply(student_id,jobdetail_id,ip,status)values ( " . $_SESSION['sid'] . ", '$id',1,1)";
} else {
   $query = "update apply set status=1 where student_id='$sid' and jobdetail_id='$id' ";
}

mysqli_query($conn, $query);
mysqli_close($conn);
header("Location: ./studentjobdetail1.php");

?>