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
$uid = $_SESSION['userid'];
$conn = mysqli_connect("localhost", "root", "", "minor_project");
$query = "SELECT student.s_id, student.s_name,student.s_email,student.s_degname,jobdetails.j_title,jobdetails.j_id,apply.student_id,apply.jobdetail_id FROM student INNER JOIN apply ON student.s_id=apply.student_id INNER JOIN jobdetails ON jobdetails.j_id=apply.jobdetail_id where jobdetails.userid=$uid and apply.status=1 and student.selected_status=1";
$count = 0;
$records = mysqli_query($conn, $query);
mysqli_close($conn);
?>
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Job Offer</h1>

<div class="">
    <div class="table-responsive">
        <table id="employee_data" class="table table-striped table-bordered  table-hover ">
            <thead>
                <tr>
                    <th>Index no</th>
                    <th>Student Name</th>
                    <th>Email</th>
                    <th>Degree Name</th>
                    <th>Job Type</th>
                    <th>Status</th>

                </tr>
            </thead>

            <?php
            while (($row = mysqli_fetch_array($records)) == true) {

                $_SESSION['jobid'] = $row['j_id'];
                echo "<tr style='text-align: center;'>";
                echo "<td>" . ++$count . "</td>";
                echo "<td>" . $row['s_name'] . "</td>";
                echo "<td>" . $row['s_email'] . "</td>";
                echo "<td>" . $row['s_degname'] . "</td>";
                echo "<td>" . $row['j_title'] . "</td>";
                ?>

                
                <td>
                    <div class="row justify-content-center">
                        <form action="SelectedStudentCJASR.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $row['s_id']; ?>" />
                            <button type="submit" name="select" class="btn btn-success rounded-circle" style="height:40px;width:40px"><i class="fa-solid fa-check"></i></button>
                        </form>
                        &nbsp;&nbsp;
                        <form action="RejectStudentCJASR.php" method="POST">
                        <button type="submit" name="delete" class="btn btn-danger rounded-circle" style="height:40px;width:40px"><i class="fa-sharp fa-solid fa-xmark"></i></button>
                        <input type="hidden" name="id" value="<?php echo $row['s_id']; ?>" />
                        </form>                       
                    </div>

                </td>


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