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

$id = $_SESSION['fid'];
$conn = mysqli_connect("localhost", "root", "", "minor_project");
$query = "select * from faculty where f_id=$id ";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

$name = $row['f_name'];
$dob = $row['f_dob'];
$email = $row['f_email'];
$cont = $row['f_contactnumber'];


mysqli_query($conn, $query);
mysqli_close($conn);


?>


<section class="main-content ">

    <h1 class=" text-center mb-4 text-gray-800">Profile</h1>
    <form action="DB_po_profile_edit.php" method="post">
        <div class="row d-flex justify-content-center alert">

            <div class="profile-card rounded-1g shadow p-4 p-xl-5 mb-4 text-center" style="background-color:#7388AB">
                <div class="banner"></div>

                <div class="text-left">

                    <div class="form-group p-1">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white">
                                    <span class="fa fa-user mr-2 text-primary"></span>Name
                                </span>
                            </div>
                            <input type="text" name="txtName" value="<?php echo $name; ?>" class="form-control">
                        </div>
                    </div>

                    <div class="form-group p-1">
                        <div class="input-group">

                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white">
                                    <span class="fa fa-phone mr-2 text-primary"></span>Phone Number
                                </span>
                            </div>
                            <input type="text" name="txtPhone" value="<?php echo $cont; ?>" class="form-control">

                        </div>
                    </div>

                    <div class="form-group p-1">
                        <div class="input-group">

                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white">
                                    <span class="fa fa-id-card mr-2 text-primary"></span>Email ID
                                </span>
                            </div>
                            <input type="email" name="email" value="<?php echo $email; ?>" class="form-control">

                        </div>
                    </div>

                    <div class="form-group p-1">
                        <div class="input-group">
                            <div class="input-group-prepend ">
                                <span class="input-group-text bg-white">
                                    <span class="fa fa-dot-circle mr-2 text-primary "></span>BirthDate
                                </span>
                            </div>
                            <input type="date" name="birthdate" value="<?php echo $dob; ?>" class="form-control">
                        </div>
                    </div>

                    <div class="p-1 d-flex  justify-content-end">

                    <button class="btn btn-primary" style="width:120px"   name="btnAdd" type="submit">Submit</button>

                    </div>
                </div>
            </div>
        </div>
    </form>

</section>




<?php
include "footer.php";
?>