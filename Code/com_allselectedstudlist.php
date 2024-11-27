<?php
session_start();
if (!isset($_SESSION['userid'])) {
    header("Location: ./CompanyLogin.php");
}
?>


<?php
include('com_header.php');
?>
<?php
$count = 0;
$conn = mysqli_connect("localhost", "root", "", "minor_project");
$id = $_SESSION['userid'];
$query = "SELECT student.s_name,jobdetails.j_title,j_type,sal,skill FROM student INNER JOIN apply on apply.student_id=student.s_id  INNER JOIN jobdetails on jobdetails.j_id=apply.jobdetail_id where apply.status=2 and jobdetails.userid=$id";
$records = mysqli_query($conn, $query);

mysqli_close($conn);
?>
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">ALL SELECTED STUDENT LIST</h1>
<div class="d-flex justify-content-end box" style="position:relative; bottom:-10px; left:-10px;  z-index: 9; ">
    <button class="btn btn-danger" >
        <a class="text-white" href='allselectedstudlistreport.php'><i class="fas fa-file-pdf text-white"></i>&nbsp;PDF</a>
    </button>
</div>
<div class="card card-body">
    <div class="table-responsive">
        <table id="employee_data" class="table table-striped table-bordered  table-hover ">
            <thead>
                <tr>
                    <th>Index no</th>
                    <th>Student Name</th>
                    <th>Job Title</th>
                    <th>Job type</th>
                    <th>Salary</th>
                    <th>Skill</th>
                </tr>
            </thead>

            <?php
            while (($row = mysqli_fetch_array($records)) == true) {


                echo "<tr style='text-align: center;'>";
                echo "<td>" . ++$count . "</td>";
                echo "<td>" . $row['s_name'] . "</td>";
                echo "<td>" . $row['j_title'] . "</td>";
                echo "<td>" . $row['j_type'] . "</td>";
                echo "<td>" . $row['sal'] . "</td>";
                echo "<td>" . $row['skill'] . "</td>";


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