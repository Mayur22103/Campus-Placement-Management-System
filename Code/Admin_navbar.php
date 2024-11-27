<!DOCTYPE html>
<html lang="en">
<?php
$roleid = $_SESSION['roleid'];
if ($roleid !== "0") {
    header("Location: ./Admin_Login.php");
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .collapsing {
            transition: none;
        }
    </style>
</head>

<body style="font-size:110%;">
    <ul class="nav flex-column nav-tabs " style="border-bottom:0px">
        <li class="nav-item">
            <a class="nav-link  text-white" href="Admin_dashboard.php"> <i
                    class="fa-solid fa-house "></i>&nbsp;&nbsp;Home</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link  text-white " href="Admin_facultylist.php"><i
                    class="fa-solid fa-circle-info"></i>&nbsp;&nbsp;&nbsp;Faculty List</a>
        </li>
        <li class="nav-item">
            <a class="nav-link  text-white" data-toggle="collapse" data-target="#navbarToggleExternalContent"
                aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation"><i
                    class="fa fa-pie-chart"></i>
                &nbsp;Reports</a>
            <div class="pos-f-t" style="font-size:80%;">
                <div class="collapse" id="navbarToggleExternalContent">
                <a class="nav-link text-white" href="Admin_ApproveCom_List.php"> <i
                                class="fa-solid fa-circle-arrow-right text-secondary"></i>&nbsp;&nbsp;APPROVE COMPANY
                            LIST</a>
                        <a class="nav-link text-white" href="Admin_RejectCom_List.php"> <i
                                class="fa-solid fa-circle-arrow-right text-secondary"></i>&nbsp;&nbsp;REJECT COMPANY
                            LIST</a>
                        <a class="nav-link text-white" href="Admin_ApproveJob_List.php"> <i
                                class="fa-solid fa-circle-arrow-right text-secondary"></i>&nbsp;&nbsp;APPROVE JOB
                            LIST</a>
                        <a class="nav-link text-white" href="Admin_RejectJob_List.php"> <i
                                class="fa-solid fa-circle-arrow-right text-secondary"></i>&nbsp;&nbsp;REJECT JOB
                            LIST</a>
                        <a class="nav-link text-white" href="Admin_Student_List.php"> <i
                                class="fa-solid fa-circle-arrow-right text-secondary"></i>&nbsp;&nbsp;STUDENT LIST</a>
                        <a class="nav-link text-white" href="Admin_AllSelectedStudent_List.php"> <i
                                class="fa-solid fa-circle-arrow-right text-secondary"></i>&nbsp;&nbsp;ALL SELECTED
                            STUDENT LIST</a>
                        <a class="nav-link text-white" href="Admin_CourseWiseStudent_List.php"> <i
                                class="fa-solid fa-circle-arrow-right text-secondary"></i>&nbsp;&nbsp;COURSE WISE
                            SELETED STUDENT</a>
                        <a class="nav-link text-white" href="Admin_JobWiseStudent_List.php"> <i
                                class="fa-solid fa-circle-arrow-right text-secondary"></i>&nbsp;&nbsp;JOB WISE SELETED
                            STUDENT</a>
                </div>
            </div>



        </li>


    </ul>
</body>

</html>