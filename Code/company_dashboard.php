<?php
session_start();
if (!isset($_SESSION['userid'])) {
    header("Location: ./CompanyLogin.php");
}
?>

<?php

$conn = mysqli_connect("localhost", "root", "", "minor_project");
$id = $_SESSION['userid'];
$query = "select * from jobdetails where userid=$id";
$records = mysqli_query($conn, $query);
$rowcount=mysqli_num_rows($records);
mysqli_close($conn);
?>
<?php
$conn = mysqli_connect("localhost", "root", "", "minor_project");
$id = $_SESSION['userid'];
$query = "select * from jobdetails where userid=$id and joba_status=1";
$records = mysqli_query($conn, $query);
$rowcount2=mysqli_num_rows($records);
mysqli_close($conn);
?>
<?php
$conn = mysqli_connect("localhost", "root", "", "minor_project");
$id = $_SESSION['userid'];
$query = "SELECT student.s_id from student INNER join apply on apply.student_id=student.s_id INNER join jobdetails on jobdetails.j_id=apply.jobdetail_id where jobdetails.userid='$id' and apply.status=1";
$records = mysqli_query($conn, $query);
$rowcount3=mysqli_num_rows($records);
mysqli_close($conn);
?>
<?php
$conn = mysqli_connect("localhost", "root", "", "minor_project");
$id = $_SESSION['userid'];
$query = "SELECT student.s_id from student INNER join apply on apply.student_id=student.s_id INNER join jobdetails on jobdetails.j_id=apply.jobdetail_id where jobdetails.userid='$id' and apply.status=2";
$records = mysqli_query($conn, $query);
$rowcount4=mysqli_num_rows($records);
mysqli_close($conn);
?>
<?php
$conn = mysqli_connect("localhost", "root", "", "minor_project");
$id = $_SESSION['userid'];
$query = "select * from jobdetails where userid=$id and joba_status=2";
$records = mysqli_query($conn, $query);
$rowcount5=mysqli_num_rows($records);
mysqli_close($conn);
?>
<?php
$conn = mysqli_connect("localhost", "root", "", "minor_project");
$id = $_SESSION['userid'];
$query = "select * from jobdetails where userid=$id and joba_status=0";
$records = mysqli_query($conn, $query);
$rowcount6=mysqli_num_rows($records);
mysqli_close($conn);
?>


<?php
include('com_header.php');
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
                          Total POST JOBS</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowcount ?></div>
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
                          Total Pending JOBS</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowcount6 ?></div>
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
                        Total Approve JOBS</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowcount2 ?></div>
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
                        Total Reject JOBS</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowcount5 ?></div>
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
<div class="col-lg-3 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Applied Student</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowcount3 ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Total Selected Student</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowcount4 ?></div>
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