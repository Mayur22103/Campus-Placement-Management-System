<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  

    <!-- Title Page-->
    <title>Student login</title>

     <!-- Font special for pages-->
     <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">


        <!-- Main CSS-->
    <link href="VCSS/login.css" rel="stylesheet" media="all">

    
    <!-- Icons font CSS-->
    <!-- <link href="vendor1/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all"> -->
    <!-- <link href="vendor1/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all"> -->
    
    
   

    <!-- Vendor CSS-->
    <!-- <link href="vendor1/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor1/datepicker/daterangepicker.css" rel="stylesheet" media="all"> -->

    
</head>

<body>
    <form method="post" action="StudentLogindb.php">
        <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
            <div class="wrapper wrapper--w680">
                <div class="card card-4">
                    <div class="card-body">
                        <h2 class="title">Student login</h2>
                        <form method="POST" action="StudentLogindb.php">

                            <div class="input-group">
                                <label class="label">Email</label>
                                <input class="input--style-4" type="email" name="txtEmail" required>
                            </div>
                            <div class="input-group">
                                <label class="label"> Password:</label>
                                <input class="input--style-4" name="txtPassword" type="password" required>
                            </div>
                            <div class="p-t-15">
                                <button class="btn btn--radius-2 btn--blue" type="submit" name="ssubmit">Login</button>
                                <a style="display: flex; justify-content: flex-end;" href="home_page.php">Back to home</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Jquery JS-->
    <!-- <script src="vendor1/jquery/jquery.min.js"></script> -->
    <!-- Vendor JS-->
    <!-- <script src="vendor1/select2/select2.min.js"></script>
    <script src="vendor1/datepicker/moment.min.js"></script>
    <script src="vendor1/datepicker/daterangepicker.js"></script> -->

    <!-- Main JS-->
    <!-- <script src="js1/global.js"></script> -->

</body>
</html>
<!-- end document-->