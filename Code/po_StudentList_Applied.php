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
               $id = $_POST['id'];             
               $conn = mysqli_connect("localhost", "root", "", "minor_project");
                    $query = "SELECT student.s_id, student.s_name,student.s_email,student.s_degname,jobdetails.j_title,jobdetails.j_id,jobdetails.j_type,apply.student_id,apply.jobdetail_id FROM student INNER JOIN apply ON student.s_id=apply.student_id INNER JOIN jobdetails ON jobdetails.j_id=apply.jobdetail_id where jobdetails.userid=$id and apply.status=1";
                    $count = 0;
                    $records = mysqli_query($conn, $query);
                    mysqli_close($conn);
?>
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">APPLIED STUDENT LIST</h1>
<div class="card card-body">
<div class="table-responsive">
<table id="employee_data" class="table table-striped table-bordered  table-hover " >
    <thead>
        <tr>
            <th>Index no</th>
            <th>Student Name</th>
            <th>Email</th>
            <th>Degree Name</th>
             <th>Job Title</th>
             <th>Job Type</th>   
   
        </tr>
    </thead>

    <?php
    while (($row = mysqli_fetch_array($records)) == true) {


        echo "<tr style='text-align: center;'>";
        echo "<td>" . ++$count . "</td>";
        echo "<td>" . $row['s_name'] . "</td>";
        echo "<td>" . $row['s_email'] . "</td>";
        echo "<td>" . $row['s_degname'] . "</td>";
        echo "<td>" . $row['j_title'] . "</td>";
        echo "<td>" . $row['j_type'] . "</td>";

 
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