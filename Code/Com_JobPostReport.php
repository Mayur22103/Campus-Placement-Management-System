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
$query = "select * from jobdetails where userid=$id";

$count = 0;
$records = mysqli_query($conn, $query);
mysqli_close($conn);
?>
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">ALL POST JOBS</h1>
<div class="d-flex justify-content-end box" style="position:relative; bottom:-10px; left:-10px;  z-index: 9; ">
    <button class="btn btn-danger">
        <a class="text-white" href='com_JobPostReportPdf.php'><i class="fas fa-file-pdf text-white"></i>&nbsp;PDF</a>
    </button>
</div>
<div class="card card-body">
    <div class="table-responsive">
        <table id="employee_data" class="table table-striped table-bordered  table-hover ">
            <thead>
                <tr>
                    <th>Index no</th>
                    <th>Job Title</th>  
                    <th>Status</th>
                    <th>Post Date</th>
                </tr>
            </thead>

            <?php
            while (($row = mysqli_fetch_array($records)) == true) {


                echo "<tr style='text-align: center;'>";
                echo "<td>" . ++$count . "</td>";
                echo "<td>" . $row['j_title'] . "</td>";


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

                    <?php
                    echo "<td>" . $row['p_date'] . "</td>";
                    echo "</tr>";

                    }
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