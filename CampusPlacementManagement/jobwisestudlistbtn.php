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
                    $id = $_POST['jid'];
                    $conn = mysqli_connect("localhost", "root", "", "minor_project");
                    $query = "SELECT student.s_name,s_degname,jobdetails.j_id, apply.jobdetail_id FROM student INNER JOIN apply  on apply.student_id=student.s_id  INNER JOIN jobdetails on jobdetails.j_id=apply.jobdetail_id where jobdetails.j_id=$id and  apply.status=1";

                    $count = 0;
                    $records = mysqli_query($conn, $query);
                    mysqli_close($conn);
?>
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">STUDENT LIST</h1>

<div class="">
<div class="table-responsive">
<table id="employee_data" class="table table-striped table-bordered  table-hover " >
    <thead>
        <tr>
            <th>Index no</th>
            <th>Student Name</th>
            <th>Student Degree</th>      
        </tr>
    </thead>

    <?php
    while (($row = mysqli_fetch_array($records)) == true) {


        echo "<tr style='text-align: center;'>";
        echo "<td>" . ++$count . "</td>";
        echo "<td>" . $row['s_name'] . "</td>";
        echo "<td>" . $row['s_degname'] . "</td>";
   
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