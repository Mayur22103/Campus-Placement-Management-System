<?php

if(isset($_POST['id']))
{
    $id = $_POST['id'];
    $conn = mysqli_connect("localhost","root","","minor_project");
    $query = "update jobdetails set joba_status=2 where j_id='$id'";
    mysqli_query($conn,$query);
    header("Location: ./Po_PendingJob_List.php");
    mysqli_close($conn);
}
else
{
    header("Location: ./Po_PendingJob_List.php");
}


?>