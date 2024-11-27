<?php
session_start();
if (!isset($_SESSION['sid'])) {
    header("Location: ./StudentLogin.php");
}
?>



<?php
include('header.php');
?>


<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Job Apply List</h1>
<div class="d-flex justify-content-end box" style="position:relative; bottom:-10px; left:-10px;  z-index: 9; ">
    <button class="btn btn-danger" >
        <a class="text-white" href='jobappliedpdfforstudent.php'><i class="fas fa-file-pdf text-white"></i>&nbsp;PDF</a>
    </button>
</div>
<div class="card card-body">

    <div class="table-responsive">
        <table id="employee_data" class="table table-striped table-bordered">

            <thead>
                <tr>
                    <th>Index no</th>
                    <th>Job Title</th>
                    <th>Salary</th>
                    <th>Comapny</th>


                </tr>
            </thead>
            <?php

            $degree = $_SESSION['degree'];
            $id = $_SESSION['sid'];
            if (!isset($id)) {
                header('Location: ./Slogin.php');
            }
            $conn = mysqli_connect("localhost", "root", "", "minor_project");
            $count = 0;
            $query = "SELECT jobdetails.j_title,jobdetails.sal,company.c_name,jobdetails.s_date FROM jobdetails INNER JOIN company ON company.c_id=jobdetails.userid INNER JOIN apply on apply.jobdetail_id=jobdetails.j_id where apply.status=1 and apply.student_id=$id";
            $records = mysqli_query($conn, $query);
            ?>
            <?php
            while (($row = mysqli_fetch_array($records)) == true) {


                echo "<tr style='text-align: center;'>";
                echo "<td>" . ++$count . "</td>";
                echo "<td>" . $row['j_title'] . "</td>";
                echo "<td>" . $row['sal'] . "</td>";
                echo "<td>" . $row['c_name'] . "</td>";

                ?>


                <?php
                echo "</tr>";

            } ?>
        </table>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#employee_data').DataTable();
    });  
</script>


<?php
include('footer.php');
?>