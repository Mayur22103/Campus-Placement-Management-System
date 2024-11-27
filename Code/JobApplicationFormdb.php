<?php
if (isset($_POST['btnJadd'])) {
    session_start();
    $userid = $_SESSION['userid'];
    $title = $_POST['txttitle'];
    $skill = $_POST['txtskill'];
    $degree = $_POST['degree'];
    $discription = $_POST['txtdis'];
    $salary = $_POST['txtsal'];
    //$chk = "";
    $conn = mysqli_connect("localhost", "root", "", "minor_project");
    // foreach ($degree as $ab) {
    //     $chk .= $ab . " ";
    // }
    $query = "insert into jobdetails values(NULL,'$title','$skill','$degree','$discription','$salary',NULL,1,1, $userid,0,NOW())";
    $result = mysqli_query($conn, $query);
    $conn = mysqli_close($conn);
    echo '<script language="javascript">';
    echo 'alert("Job Approval is Pending please wait For Approval");';
    echo 'window.location.href = "./com_jobpost.php"';
    echo '</script>';
    //header("Location: ./com_jobpost.php");
}

?>