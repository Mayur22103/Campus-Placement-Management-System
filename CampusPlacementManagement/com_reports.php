<?php
session_start();
if (!isset($_SESSION['userid'])) {
    header("Location: ./CompanyLogin.php");
}
?>


<?php

include('com_header.php');
?>

<h1 class="h3 mb-4 text-gray-800">REPORTS</h1>

<div class="col-lg-8 col alert">
    <div class="card border-left-primary shadow h-100 py-2" width="50px">
        <div class="card-body">
            <a class="nav-link" href="com_jobwiseselectedstudent.php">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        Applied Student List
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
            </div>
            </a>
        </div>
    </div>
</div>


<div class="col-lg-8 col alert">
    <div class="card border-left-primary shadow h-100 py-2" width="50px">
        <div class="card-body">
        <a class="nav-link" href="com_selectedstudentjobwise.php">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        Selected Student List
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
            </div>
            </a>
        </div>
    </div>
</div>

<div class="col-lg-8 col alert">
    <div class="card border-left-primary shadow h-100 py-2" width="50px">
        <div class="card-body">
        <a class="nav-link" href="com_allselectedstudlist.php">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        All Selected Student List
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
            </div>
            </a>
        </div>
    </div>
</div>

<div class="col-lg-8 col alert">
    <div class="card border-left-primary shadow h-100 py-2" width="50px">
        <div class="card-body">
        <a class="nav-link" href="Com_JobPostReport.php"> 
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        All Post Jobs
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
            </div>
            </a>
        </div>
    </div>
</div>

<div class="col-lg-8 col alert">
    <div class="card border-left-primary shadow h-100 py-2" width="50px">
        <div class="card-body">
        <a class="nav-link" href="Com_JobPostWithDetailReport.php">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        PostJobs With Details
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
            </div>
            </a>
        </div>
    </div>
</div>















<?php
include('footer.php');
?>