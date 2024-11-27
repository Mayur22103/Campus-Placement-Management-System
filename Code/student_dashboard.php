<?php
session_start();
if (!isset($_SESSION['sid'])) {
    header("Location: ./StudentLogin.php");
}
?>


<?php
$id = $_SESSION['sid'];
$conn = mysqli_connect("localhost", "root", "", "minor_project");
$count = 0;
$query = "SELECT jobdetails.s_date,j_title,
company.c_name 
FROM company
INNER JOIN jobdetails on jobdetails.userid = company.c_id
INNER JOIN apply on apply.jobdetail_id = jobdetails.j_id
INNER JOIN student on student.s_id = apply.student_id
where jobdetails.s_date=CURDATE() and student.s_id=$id";
$records = mysqli_query($conn, $query);
$rowcount=mysqli_num_rows($records);
mysqli_close($conn);
?>

<?php
$id = $_SESSION['sid'];
$conn = mysqli_connect("localhost", "root", "", "minor_project");
$count = 0;
$query = "SELECT jobdetails.s_date,j_title,
company.c_name 
FROM company
INNER JOIN jobdetails on jobdetails.userid = company.c_id
INNER JOIN apply on apply.jobdetail_id = jobdetails.j_id
INNER JOIN student on student.s_id = apply.student_id
where jobdetails.s_date=CURDATE()-1 and student.s_id=$id";
$records = mysqli_query($conn, $query);
$rowcount1=mysqli_num_rows($records);
mysqli_close($conn);
?>

<?php
$id = $_SESSION['sid'];
$conn = mysqli_connect("localhost", "root", "", "minor_project");
$count = 0;
$query = "SELECT jobdetails.s_date,j_title,
company.c_name 
FROM company
INNER JOIN jobdetails on jobdetails.userid = company.c_id
INNER JOIN apply on apply.jobdetail_id = jobdetails.j_id
INNER JOIN student on student.s_id = apply.student_id
where jobdetails.s_date >= DATE(NOW())-INTERVAL 7 DAY and student.s_id=$id";
$records = mysqli_query($conn, $query);
$rowcount2=mysqli_num_rows($records);
mysqli_close($conn);
?>

<?php
$id = $_SESSION['sid'];
$conn = mysqli_connect("localhost", "root", "", "minor_project");
$count = 0;
$query = "SELECT jobdetails.s_date,j_title,
company.c_name 
FROM company
INNER JOIN jobdetails on jobdetails.userid = company.c_id
INNER JOIN apply on apply.jobdetail_id = jobdetails.j_id
INNER JOIN student on student.s_id = apply.student_id
where student.s_id=$id";
$records = mysqli_query($conn, $query);
$rowcount3=mysqli_num_rows($records);
mysqli_close($conn);
?>



<?php
include('header.php');
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
                            Today Total Schedule Interview</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowcount ?></div>
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
                            Yesterday Total Interview</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowcount1 ?></div>
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
                            Last 7 Days Total Interview</div>
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
                            Total Interview till date</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowcount3 ?></div>
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