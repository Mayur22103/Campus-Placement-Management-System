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
    <link rel="stylesheet" href="fontawesome-6\css\all.css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->


    <!-- <link rel="stylesheet" type="text/css" href="./vendor/parsley/parsley.css" />

    <link rel="stylesheet" type="text/css" href="./vendor/bootstrap-select/bootstrap-select.min.css" /> -->

    <!-- <link rel="stylesheet" type="text/css" href="./vendor/datepicker/bootstrap-datepicker.css" /> -->

    <!-- It Is USe For Datatables -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

    <style>
        .image-circle {
            height: 150px;
            width: 150px;
            border-radius: 33px;
            border: 2px;
            border-style: solid;
            border-color: white;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            z-index: 1;
            padding: 0.3rem !important;
        }

        tr:nth-of-type(odd) {
            background: #C7C7C7;
        }

        th {
            background: #7388AB;
            color: white;
            font-weight: bold;
        }

        .py-2 {

            transition: all 0.2s ease;
            cursor: pointer;


        }

        .py-2:hover {

            box-shadow: 5px 6px 6px 2px #e9ecef;
            transform: scale(1.05);
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="student_dashboard.php">
                <div class="sidebar-brand-icon rotate-n-15">

                </div>
                <i class="fas fa-laugh-wink"></i>
                <div class="sidebar-brand-text mx-3">Student</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->

            <li class="nav-item">
                <a class="nav-link" href="student_dashboard.php">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="studentjobdetail1.php">
                    <i class="fas fa-info-circle"></i>
                    <span>Job Details</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="JobAppliedReportForStudent.php">
                    <i class="fas fa-arrow-circle-right"></i>
                    <span>Applied Job</span></a>
            </li>



            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline mt-5">
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
                    $id = $_SESSION['sid'];
                    $conn = mysqli_connect("localhost", "root", "", "minor_project");
                    $count = 0;
                    $query = "SELECT * FROM student WHERE s_id=$id";
                    $records = mysqli_query($conn, $query);
                    $row = mysqli_fetch_array($records);
                    mysqli_close($conn);
                    ?>

                    <h1 class="h4 text-gray-800">Welcome
                        <?php echo "$row[s_name]" ?>
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
                                <a class="dropdown-item" href="student_profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 " style="color:#3C4B64"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="student_changepass.php">
                                    <i class="fas fa-key fa-sm fa-fw mr-2 " style="color:#3C4B64"></i>
                                    Change Password
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