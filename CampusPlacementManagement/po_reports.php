<?php
session_start();
if (!isset($_SESSION['fid'])) {
    header("Location: ./PlacementOfficerLogin.php");
}
?>




<?php
include('po_header.php');
?>

<h1 class="h3 mb-4 text-gray-800">REPORTS</h1>

<div class="col-lg-8 col alert">
    <div class="card border-left-primary shadow h-100 py-2" width="50px">
        <div class="card-body">
            <a class="nav-link" href="po_ApproveCom_List.php">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            APPROVE COMPANY LIST
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
            <a class="nav-link" href="po_RejectCom_List.php">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            REJECT COMPANY LIST
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
            <a class="nav-link" href="po_ApproveJob_List.php">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            APPROVE JOB LIST
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
            <a class="nav-link" href="po_RejectJob_List.php">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            REJECT JOB LIST
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
            <a class="nav-link" href="po_Student_List.php">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            STUDENT LIST
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
            <a class="nav-link" href="po_AllSelectedStudent_List.php">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            ALL SELECTED STUDENT LIST
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
            <a class="nav-link" href="po_CourseWiseStudent_List.php">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            COURSE WISE SELETED STUDENT
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
            <a class="nav-link" href="po_JobWiseStudent_List.php">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            JOB WISE SELETED STUDENT
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