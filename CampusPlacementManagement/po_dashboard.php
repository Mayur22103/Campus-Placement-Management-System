<?php
session_start();
if (!isset($_SESSION['fid'])) {
    header("Location: ./PlacementOfficerLogin.php");
}
?>

<?php
$conn = mysqli_connect("localhost", "root", "", "minor_project");
$count = 0;
$query = "SELECT company.c_id from company;";
$records = mysqli_query($conn, $query);
$rowcount = mysqli_num_rows($records);
mysqli_close($conn);
?>
<?php
$conn = mysqli_connect("localhost", "root", "", "minor_project");
$count = 0;
$query = "SELECT company.c_id from company where a_status=1";
$records = mysqli_query($conn, $query);
$rowcount2 = mysqli_num_rows($records);
mysqli_close($conn);
?>
<?php
$conn = mysqli_connect("localhost", "root", "", "minor_project");
$count = 0;
$query = "SELECT student.s_id from student WHERE student.selected_status=2";
$records = mysqli_query($conn, $query);
$rowcount3 = mysqli_num_rows($records);
mysqli_close($conn);
?>
<?php
$conn = mysqli_connect("localhost", "root", "", "minor_project");
$count = 0;
$query = "SELECT jobdetails.j_id from jobdetails";
$records = mysqli_query($conn, $query);
$rowcount4 = mysqli_num_rows($records);
mysqli_close($conn);
?>
<?php
$conn = mysqli_connect("localhost", "root", "", "minor_project");
$count = 0;
$query = "SELECT jobdetails.j_id from jobdetails where joba_status=1";
$records = mysqli_query($conn, $query);
$rowcount5 = mysqli_num_rows($records);
mysqli_close($conn);
?>
<?php
$conn = mysqli_connect("localhost", "root", "", "minor_project");
$count = 0;
$query = "SELECT company.c_id from company where a_status=0";
$records = mysqli_query($conn, $query);
$rowcount6 = mysqli_num_rows($records);
mysqli_close($conn);
?>

<?php
$conn = mysqli_connect("localhost", "root", "", "minor_project");
$count = 0;
$query = "SELECT company.c_id from company where a_status=2";
$records = mysqli_query($conn, $query);
$rowcount7 = mysqli_num_rows($records);
mysqli_close($conn);
?>
<?php
$conn = mysqli_connect("localhost", "root", "", "minor_project");
$count = 0;
$query = "SELECT jobdetails.j_id from jobdetails where joba_status=0";
$records = mysqli_query($conn, $query);
$rowcount8 = mysqli_num_rows($records);
mysqli_close($conn);
?>
<?php
$conn = mysqli_connect("localhost", "root", "", "minor_project");
$count = 0;
$query = "SELECT jobdetails.j_id from jobdetails where joba_status=2";
$records = mysqli_query($conn, $query);
$rowcount9 = mysqli_num_rows($records);
mysqli_close($conn);
?>
<?php
$conn = mysqli_connect("localhost", "root", "", "minor_project");
$count = 0;
$query = "SELECT student.s_id from student";
$records = mysqli_query($conn, $query);
$rowcount10 = mysqli_num_rows($records);
mysqli_close($conn);
?>
<?php
include('po_header.php');
?>

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

<!-- Content Row -->
<div class="row">

    <div class="col mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Number of company
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php echo $rowcount ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Number of Approve company</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php echo $rowcount2 ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Number of Pending Company</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php echo $rowcount6 ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Number of Reject Company</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php echo $rowcount7 ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<div class="row">

    <div class="col mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Number of Jobs</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php echo $rowcount4 ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Number of Approve Jobs</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php echo $rowcount5 ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Number of Pending Jobs</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php echo $rowcount8 ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Number of Reject Jobs</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php echo $rowcount9 ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Number Of Student</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php echo $rowcount10 ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Number Of Placed Student</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?php echo $rowcount3 ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include('footer.php');
?>