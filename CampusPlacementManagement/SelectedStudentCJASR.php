<?php
session_start();
$stuid = $_POST['id'];
$jobid = $_SESSION['jobid'];
$conn = mysqli_connect("localhost", "root", "", "minor_project");
$query = "UPDATE apply o INNER JOIN student od ON o.student_id = od.s_id SET o.status=2 ,od.selected_status=2 WHERE o.student_id = $stuid AND o.jobdetail_id='$jobid' ";
mysqli_query($conn, $query);
mysqli_close($conn);
header("Location: ./CompanyJobAppliedStudentRecord.php");

?>