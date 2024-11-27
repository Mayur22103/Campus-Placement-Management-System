<?php
session_start();
if (!isset($_SESSION['fid'])) {
    header("Location: ./PlacementOfficerLogin.php");
}
?>

<?php
include('po_header.php');
?>

<?php
$conn = mysqli_connect("localhost", "root", "", "minor_project");
$id = $_POST['jt'];
$query = "SELECT company.c_name,company.c_id,jobdetails.userid,jobdetails.j_title,jobdetails.skill,jobdetails.j_type,student.s_name,student.s_degname,student.selected_status FROM jobdetails INNER JOIN company  ON jobdetails.userid=company.c_id INNER JOIN student ON student.s_degname=jobdetails.j_type WHERE student.selected_status=2 and jobdetails.j_title='$id'";

$count = 0;
$records = mysqli_query($conn, $query);
mysqli_close($conn);


?>
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">JOB WISE SELETED STUDENT</h1>
<div class="card card-body">
    <div class="table-responsive">
        <table id="employee_data" class="table table-striped table-bordered  table-hover ">
            <thead>
                <tr>
                    <th>Index No</th>
                    <th>Student Name</th>
                    <th>Student Degree</th>
                    <th>Comapny</th>
                </tr>
            </thead>

            <?php
            while (($row = mysqli_fetch_array($records)) == true) {


                echo "<tr style='text-align: center;'>";
                echo "<td>" . ++$count . "</td>";
                echo "<td>" . $row['s_name'] . "</td>";
                echo "<td>" . $row['s_degname'] . "</td>";
                echo "<td>" . $row['c_name'] . "</td>";



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