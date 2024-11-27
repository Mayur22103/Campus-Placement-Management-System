<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Campus placement managment system</title>

    <!-- Custom fonts for this template-->
    <link href="./vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-6\css\all.css">
    <!-- Custom styles for this template-->
    <link href="./css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->


    <link rel="stylesheet" type="text/css" href="./vendor/parsley/parsley.css" />


    <link rel="stylesheet" type="text/css" href="./vendor/datepicker/bootstrap-datepicker.css" />


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="VCSS/fileupload.css">


    <style>
        .py-2 {

            transition: all 0.2s ease;
            cursor: pointer;


        }

        .py-2:hover {

            box-shadow: 5px 6px 6px 2px #e9ecef;
            transform: scale(1.05);
        }

        tr:nth-of-type(odd) {
            background: #C7C7C7;
        }

        th {
            background: #7388AB;
            color: white;
            font-weight: bold;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="po_dashboard.php">
                <div class="sidebar-brand-icon rotate-n-15">

                </div>
                <i class="fas fa-laugh-wink"></i>
                <div class="sidebar-brand-text mx-3">Placement Officer</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->

            <li class="nav-item">
                <a class="nav-link" href="po_dashboard.php">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="po_PendingCom_List.php">
                    <i class="fas fa-info-circle"></i>
                    <span>Pending Comapny List</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Po_PendingJob_List.php">
                    <i class="far fa-calendar-check"></i>
                    <span>Pending Job List</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="po_reports.php">
                    <i class="fa fa-pie-chart"></i>
                    <span>Reports</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="po_uploadstudent.php">
                <i class="fa-solid fa-cloud-arrow-up"></i>
                    <span>Upload Student Details</span></a>
            </li>





            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline mt-1">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <?php
                    $id = $_SESSION['fid'];
                    $conn = mysqli_connect("localhost", "root", "", "minor_project");
                    $count = 0;
                    $query = "SELECT * FROM faculty WHERE f_id=$id";
                    $records = mysqli_query($conn, $query);
                    $row = mysqli_fetch_array($records);
                    mysqli_close($conn);
                    ?>

                    <h1 class="h4 text-gray-800">Welcome
                        <?php echo "$row[f_name]" ?>
                    </h1>

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>



                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow  ml-auto">
                            <a class="btn btn-outline-light " type="button" data-toggle="dropdown">
                                <span class="fa fa-user fa-2x fa-fade" style="color:#3C4B64"></span></a>
                            <!-- Dropdown - User Information -->

                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="po_profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 " style="color:#3C4B64"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 " style="color:#3C4B64"></i>
                                    Logout
                                </a>
                            </div>

                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">