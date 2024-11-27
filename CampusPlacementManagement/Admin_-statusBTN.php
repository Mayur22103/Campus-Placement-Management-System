<?php

$id=$_POST['id'];
$conn=mysqli_connect("localhost","root","","minor_project");
$query="update faculty set role=2 where f_id='$id'";
mysqli_query($conn,$query);
mysqli_close($conn);
header("Location: ./Admin_facultylist.php");

?>