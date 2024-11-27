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
$query = "SELECT DISTINCT student.s_degname FROM student";
$count = 0;
$records = mysqli_query($conn, $query);
mysqli_close($conn);
?>
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">COURSE WISE SELETED STUDENT</h1>
<div class="card card-body">
    <div class="table-responsive">
        <table id="employee_data" class="table table-striped table-bordered  table-hover ">
            <thead>
                <tr>
                    <th>Index no</th>
                    <th>Course</th>
                    <th>Student List</th>
                    <th>PDF</th>

                </tr>
            </thead>

            <?php
            while (($row = mysqli_fetch_array($records)) == true) {


                echo "<tr style='text-align: center;'>";
                echo "<td>" . ++$count . "</td>";
                echo "<td>" . $row['s_degname'] . "</td>";
                ?>

                <td>
                    <form action="Admin_CourseWise_StudentListBTN.php" method="POST">

                        <input type="hidden" name="sd" value="<?php echo $row['s_degname']; ?>" />
                        <button type="submit" name="apply" class="btn btn-success"><i class="fa-solid fa-eye"></i>&nbsp;View</button>
                    </form>
                </td>
                <td>
                    <form action="Admin_CourseWise_StudentListPDF.php" method="POST">

                        <input type="hidden" name="sd" value="<?php echo $row['s_degname']; ?>" />
                        <button type="submit" name="apply" class="btn btn-danger"><i class="fa-solid fa-file-pdf"></i>&nbsp;Download</button>
                    </form>
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