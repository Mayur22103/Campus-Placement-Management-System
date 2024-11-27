<?php
if (isset($_POST['ScheduleDate'])) {
    $conn = mysqli_connect("localhost", "root", "", "minor_project");
    $id = $_POST['id'];
    $sdate = $_POST['sd'];
    $query = "select * from jobdetails where j_id='$id' and joba_status=1";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $query = "update jobdetails set s_date='$sdate' where j_id='$id'";
    }
    mysqli_query($conn, $query);
    mysqli_close($conn);
    header("Location: ./CompanyJobRecord.php");
}
?>