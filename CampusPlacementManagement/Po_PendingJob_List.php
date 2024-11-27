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
$query = "select * from jobdetails where  joba_status=0 and status=1";
$count = 0;
$records = mysqli_query($conn, $query);
mysqli_close($conn);
?>
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Pending Job List</h1>

<div class="">
    <div class="table-responsive">
        <table id="employee_data" class="table table-striped table-bordered  table-hover ">
            <thead>
                <tr>
                    <th>Index no</th>
                    <th>Job Title</th>
                    <th>Job Type</th>
                    <th>Skill</th>
                    <th>Salary</th>
                    <th>Approve/Reject</th>


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

                ?>

                <td>
                    <div class="row justify-content-center">
                        <form action="po_job_approve.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $row['j_id']; ?>" />
                            <button type="submit" name="approve" class="btn btn-success rounded-circle" style="height:40px;width:40px"><i class="fa-solid fa-check"></i></button>
                        </form>
                        &nbsp;&nbsp;
                        <form action="po_job_reject.php" method="POST">
                        <button type="submit" name="delete" class="btn btn-danger rounded-circle" style="height:40px;width:40px"><i class="fa-sharp fa-solid fa-xmark"></i></button>
                            <input type="hidden" name="id" value="<?php echo $row['j_id']; ?>" />
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