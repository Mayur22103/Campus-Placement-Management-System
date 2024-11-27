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
$id = $_SESSION['userid'];
$conn = mysqli_connect("localhost", "root", "", "minor_project");
$query = "select * from jobdetails where userid=$id and status=1";

$count = 0;
$records = mysqli_query($conn, $query);
mysqli_close($conn);
?>
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Schedule Recruitment</h1>

<div class="">
    <div class="table-responsive">
        <table id="employee_data" class="table table-striped table-bordered  table-hover ">
            <thead>
                <tr>
                    <th>Index no</th>
                    <th>Job Title</th>
                    <th>Skill</th>
                    <th>Job Require Degree</th>
                    <th>Discription</th>
                    <th>Salary</th>
                    <th>Status</th>
                    <th>Schedule</th>

                </tr>
            </thead>

            <?php
            while (($row = mysqli_fetch_array($records)) == true) {


                echo "<tr style='text-align: center;'>";
                echo "<td>" . ++$count . "</td>";
                echo "<td>" . $row['j_title'] . "</td>";
                echo "<td>" . $row['skill'] . "</td>";
                echo "<td>" . $row['j_type'] . "</td>";
                echo "<td>" . $row['j_dis'] . "</td>";
                echo "<td>" . $row['sal'] . "</td>";


                ?>

                <td>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "minor_project");
                    $query = "select * from jobdetails where j_id=$row[j_id]";
                    $result = mysqli_query($conn, $query);
                    while (($row1 = mysqli_fetch_array($result)) == true) {
                        if ($row1['joba_status'] == 0)
                            echo "Pending";
                        else if ($row1['joba_status'] == 1)
                            echo "Approve";
                        else if ($row1['joba_status'] == 2)
                            echo "Reject";
                        ?>

                    </td>
                    <td>
                        <form action="ScheduleDateCJR.php" method="POST">                 
                            <input type="hidden" name="id" value="<?php echo $row1['j_id']; ?>" />                
                            <input type="date" name="sd" value="<?php echo $row1['s_date']; ?>" />                                                
                            <?php if ($row1['joba_status'] == 2) { ?>
                                <button type="submit" name="ScheduleDate" class="btn btn-secondary"  disabled>ScheduleDate</button>
                            <?php } else if ($row1['joba_status'] == 0) { ?> 
                                        <button type="submit" name="ScheduleDate" class="btn btn-secondary" disabled>ScheduleDate</button>
                            <?php } else { ?> 
                                <button type="submit" name="ScheduleDate" class="btn btn-primary" style="width:120px">ScheduleDate</button>
                            <?php } ?>
                          
                        </form>
                    <?php } ?>

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