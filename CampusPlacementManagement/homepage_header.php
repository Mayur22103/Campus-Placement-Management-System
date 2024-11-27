<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Campus Placement Managment System</title>

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="fontawesome-6\css\all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="./css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link rel="stylesheet" href="bootstrap-4.6.1/dist/css/bootstrap.css">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom styles for Contact -->
    <link href="css/cnt.css" rel="stylesheet">

    <!-- Custom styles for Opportunities part in that company logo slide -->
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Custom styles for Datatable -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

    <!-- Custom styles for Team Members -->
    <link rel="stylesheet" href="VCSS/teamMembers.css">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="VCSS/style.css">


    <!-- <link rel="stylesheet" type="text/css" href="./vendor/parsley/parsley.css" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="./vendor/bootstrap-select/bootstrap-select.min.css" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="./vendor/datepicker/bootstrap-datepicker.css" /> -->

    <style>
        html {
            scroll-behavior: smooth;
        }

        .layout_padding {
            padding-top: 40px;
            padding-bottom: 0px;
        }

        hr {

            border: none;
            border-left: 1px solid hsla(200, 10%, 50%, 100);
            height: 100%;
            width: 1px;
        }

        body {
            background-color: #FFF1DC;
        }

        .nav-c {
            color: #E8D5C4;
        }

        .nav>li>a:hover {
            color: #fff;

        }

        li>a:after {
            content: '';
            display: block;
            height: 1.5px;
            background: #FBC02D;
            transform: scaleX(0);
            transition: transform .3s;
        }

        li>a:hover:after {
            transform: scaleX(1);
            transition: transform .3s;
        }

        .lft {
            position: relative;
            margin: 0 auto;
            left: -25px;
        }
    </style>


</head>

<body id="page-top">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand-lg navbar-light p-1" style="background-color:#3C4B64;  ">

            <div class="navbar-brand">
                <div class="logo "><a href="home_page.php"><img class="ig" src="pic/logo3.png"></a></div>
            </div>

            <button type="button" class="btn navbar-toggler" data-toggle="collapse" data-target="#mymenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="mymenu">

                <ul class="nav lft " style="font-size:20px;">
                    <li class="nav-item">
                        <a class="nav-link nav-c  " href="home_page.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-c" href="#elem">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-c" href="#contact" id="">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-c " href="#clients">Opportunities</a>
                    </li>
                </ul>
            </div>

            <!-- Topbar Navbar -->
            <div class="dropdown ml-auto ">
                <a class="btn btn-outline-light " type="button" data-toggle="dropdown">
                    <span class="fa fa-user fa-2x fa-fade" style="color:#E8D5C4"></span></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-item-text text-white" style="background-color: #3C4B64">Student</div>
                    <a class="dropdown-item" href="StudentLogin.php">
                        <span class="fas fa-sign-in-alt "></span>&nbsp;&nbsp;<B>Login</B></a>
                    <!-- <a class="dropdown-item" href="./StudentRegistration.php">
                        <span class="fas fa-sign-out-alt"></span>&nbsp;&nbsp;Sign Up</a> -->
                    <div class="dropdown-item-text text-white " style="background-color: #3C4B64">Company</div>
                    <a class="dropdown-item" href="CompanyLogin.php">
                        <span class="fas fa-sign-in-alt"></span>&nbsp;&nbsp;<B>Login</B></a>
                    <a class="dropdown-item" href="CompanyRegistration.php">
                        <span class="fas fa-sign-out-alt"></span>&nbsp;&nbsp;<B>Sign Up</B></a>
                    <div class="dropdown-item-text text-white" style="background-color: #3C4B64">Placement Officer</div>
                    <a class="dropdown-item" href="PlacementOfficerLogin.php">
                        <span class="fas fa-sign-in-alt"></span>&nbsp;&nbsp;<B>Login</B></a>
                    <div class="dropdown-item-text text-white" style="background-color: #3C4B64">Admin</div>
                    <a class="dropdown-item" href="Admin_Login.php">
                        <span class="fas fa-sign-in-alt"></span>&nbsp;&nbsp;<B>Login</B></a>
                </div>
            </div>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->

        <!-- Scroll-behavior For Page Content -->
        <!-- <script>
            const btn = document.getElementById('elem');

            btn.addEventListener('click', () => window.scrollTo({
                top: 400,
                behavior: 'smooth',
            }));
        </script> -->