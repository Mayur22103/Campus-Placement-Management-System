<?php
session_start();
if (!isset($_SESSION['fid'])) {
    header("Location: ./Admin_Login.php");
}
?>

<?php
include('Admin_header.php');
?>

<?php
$conn = mysqli_connect("localhost", "root", "", "minor_project");
$query = "select * from jobdetails where joba_status=2";
$count = 0;
$records = mysqli_query($conn, $query);
mysqli_close($conn);
?>
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Reject Job List</h1>
<div class="d-flex justify-content-end box" style="position:relative; bottom:-10px; left:-10px;  z-index: 9; ">
    <button class="btn btn-danger">
        <a class="text-white" href='rejectjoblistpdf.php'><i class="fas fa-file-pdf text-white"></i>&nbsp;PDF</a>
    </button>
</div>
<div class="card card-body">
    <div class="table-responsive">
        <table id="employee_data" class="table table-striped table-bordered  table-hover ">
            <thead>
                <tr>
                    <th>Index no</th>
                    <th>Job Title</th>
                    <th>Job Type</th>
                    <th>Skill</th>
                    <th>Salary</th>
                </tr>
            </thead>

            <?php
            while (($row = mysqli_fetch_array($records)) == true) {


                echo "<tr style='text-align: center;'>";
                echo "<td>" . ++$count . "</td>";
                echo "<td>" . $row['j_title'] . "</td>";
                echo "<td>" . $row['j_type'] . "</td>";
                echo "<td>" . $row['skill'] . "</td>";
                echo "<td>" . $row['sal'] . "</td>";

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