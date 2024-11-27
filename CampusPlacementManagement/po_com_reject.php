<?php

if(isset($_POST['id']))
{
    $id = $_POST['id'];
    $conn = mysqli_connect("localhost","root","","minor_project");
    $query = "update company set status=0 where c_id='$id'";
    mysqli_query($conn,$query);
    include("com_reject_mail.php");
    header("Location: ./po_PendingCom_List.php");
    mysqli_close($conn);
}
else
{
    header("Location: ./po_PendingCom_List.php");
}


?>