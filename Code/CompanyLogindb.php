<?php

if (isset($_POST['lsubmit'])) {

    $email = $_POST['txtEmail'];
    $password = $_POST['txtPassword'];
    $password = md5($password);
    $conn = mysqli_connect("localhost", "root", "", "minor_project");
    $query = "select * from company where c_email='$email' and status=1 and a_status=1";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);

    if ($count == 0) {

        echo "<h1> Approval is Pending</h1>";
        include "CompanyLogin.php";

    } else {

        $query = "select * from company where c_email='$email' and pass='$password'";
        $result = mysqli_query($conn, $query);
        $count = mysqli_num_rows($result);

        if ($count == 0) {
            echo "<h1> Username and Password is Incorrect...!!! </h1>";
            include "CompanyLogin.php";

        } else {

            session_start();
            $row = mysqli_fetch_array($result);
            $_SESSION['userid'] = $row['c_id'];
            header("Location: company_dashboard.php");

        }

    }

    mysqli_close($conn);

}

?>