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
$query = "select * from company where a_status=1 and status=1";
$count = 0;
$records = mysqli_query($conn, $query);
mysqli_close($conn);
?>
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">APPROVE COMPANY LIST</h1>
<div class="d-flex justify-content-end box" style="position:relative; bottom:-10px; left:-10px;  z-index: 9; ">
    <button class="btn btn-danger" >
        <a class="text-white" href='approvecompanylistpdf.php'><i class="fas fa-file-pdf text-white"></i>&nbsp;PDF</a>
    </button>
</div>
<div class="card card-body">
    <div class="table-responsive">
        <table id="employee_data" class="table table-striped table-bordered  table-hover ">
            <thead>
                <tr>
                    <th>Index no</th>
                    <th>ID</th>
                    <th>Company Name</th>
                    <th>Company Email</th>
                    <th>State</th>
                    <th>PinCode</th>
                    <th>Company Person Name</th>
                    <th>Company Person Number</th>
                </tr>
            </thead>

            <?php
            while (($row = mysqli_fetch_array($records)) == true) {


                echo "<tr style='text-align: center;'>";
                echo "<td>" . ++$count . "</td>";
                echo "<td>" . $row['c_id'] . "</td>";
                echo "<td>" . $row['c_name'] . "</td>";
                echo "<td>" . $row['c_email'] . "</td>";
                echo "<td>" . $row['c_state'] . "</td>";
                echo "<td>" . $row['c_pincode'] . "</td>";
                echo "<td>" . $row['c_pname'] . "</td>";
                echo "<td>" . $row['c_pcontact'] . "</td>";


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