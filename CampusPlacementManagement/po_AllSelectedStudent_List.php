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
                    $query = "SELECT company.c_name,company.c_id,jobdetails.userid,jobdetails.j_title,jobdetails.skill,jobdetails.j_type,student.s_name,student.s_id,student.s_degname,student.selected_status,apply.status FROM jobdetails INNER JOIN company  ON jobdetails.userid=company.c_id INNER JOIN student ON student.s_degname=jobdetails.j_type  INNER JOIN apply ON apply.jobdetail_id=jobdetails.j_id WHERE apply.status=2  AND apply.student_id=student.s_id";
                    $count = 0;
                    $records = mysqli_query($conn, $query);
                    mysqli_close($conn);
?>
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">ALL SELECTED STUDENT LIST</h1>
<div class="d-flex justify-content-end box" style="position:relative; bottom:-10px; left:-10px;  z-index: 9; ">
    <button class="btn btn-danger" >
        <a class="text-white" href='Po_Admin_AllSelectedStudListPDF.php'><i class="fas fa-file-pdf text-white"></i>&nbsp;PDF</a>
    </button>
</div>
<div class="card card-body">
<div class="table-responsive">
<table id="employee_data" class="table table-striped table-bordered  table-hover " >
    <thead>
        <tr>
            <th>Index no</th>
            <th>Student Name</th>
            <th>Student Degree Name</th>
            <th>Company Name</th>
            <th>Job Title</th>        
        </tr>
    </thead>

    <?php
    while (($row = mysqli_fetch_array($records)) == true) {


        echo "<tr style='text-align: center;'>";
        echo "<td>" . ++$count . "</td>";
        echo "<td>" . $row['s_name'] . "</td>";
        echo "<td>" . $row['s_degname'] . "</td>";
        echo "<td>" . $row['c_name'] . "</td>";
        echo "<td>" . $row['j_title'] . "</td>";
      
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