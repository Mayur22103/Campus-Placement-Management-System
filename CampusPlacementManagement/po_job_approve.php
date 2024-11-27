<?php

$id=$_POST['id'];
$conn=mysqli_connect("localhost","root","","minor_project");
$query="update jobdetails set joba_status=1 where j_id='$id'";
mysqli_query($conn,$query);
mysqli_close($conn);
header("Location: ./Po_PendingJob_List.php");

?>