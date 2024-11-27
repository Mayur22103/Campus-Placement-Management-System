<?php
session_start();
if (!isset($_SESSION['sid'])) {
    header("Location: ./StudentLogin.php");
}
?>


<?php
include('header.php');
?>

<?php

$id = $_SESSION['sid'];
$conn = mysqli_connect("localhost", "root", "", "minor_project");
$query = "select * from student where s_id=$id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
$name = $row['s_name'];
$phn = $row['s_phn'];
$email = $row['s_email'];
$bdate = $row['s_dob'];
$addr = $row['s_adr'];
$image = $row['filepath'];

mysqli_query($conn, $query);
mysqli_close($conn);


?>


<section class="main-content ">

    <h1 class=" text-center mb-4 text-gray-800">Profile</h1>
    <form action="#">
        <div class="row d-flex justify-content-center alert">

            <div class="profile-card rounded-1g shadow p-4 p-xl-5 mb-4 text-center" style="background-color:#7388AB">
                <div class="d-flex justify-content-end">

                    <a class="btn btn-primary" href="stud_profile_edit.php" role="button"><i class="fas fa-edit"></i> EDIT</a>

                </div>

                <div class="banner"></div>
                <img src="<?php echo $image; ?>" alt="" class="image-circle mb-3">

                <div class="text-left mb-4">

                    <div class="form-group p-1">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white">
                                    <span class="fa fa-user mr-2 text-primary"></span>Name
                                </span>
                            </div>
                            <input type="text" name="txtName" value="<?php echo $name; ?>" class="form-control"
                                disabled>
                        </div>
                    </div>

                    <div class="form-group p-1">
                        <div class="input-group">

                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white">
                                    <span class="fa fa-phone mr-2 text-primary"></span>Phone Number
                                </span>
                            </div>
                            <input type="text" name="txtPhone" value="<?php echo $phn; ?>" class="form-control"
                                disabled>

                        </div>
                    </div>

                    <div class="form-group p-1">
                        <div class="input-group">

                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white">
                                    <span class="fa fa-id-card mr-2 text-primary"></span>Email ID
                                </span>
                            </div>
                            <input type="email" name="email" value="<?php echo $email; ?>" class="form-control"
                                disabled>

                        </div>
                    </div>

                    <div class="form-group p-1">
                        <div class="input-group">
                            <div class="input-group-prepend ">
                                <span class="input-group-text bg-white">
                                    <span class="fa fa-dot-circle mr-2 text-primary "></span>BirthDate
                                </span>
                            </div>
                            <input type="date" name="birthdate" value="<?php echo $bdate; ?>" class="form-control"
                                disabled>
                        </div>
                    </div>

                    <div class="form-group p-1">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white">
                                    <i class="fas fa-address-book mr-2 text-primary"></i>Address
                                </span>
                            </div>
                            <input type="text" name="Address" value="<?php echo $addr; ?>" class="form-control"
                                disabled>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </form>

</section>




<?php
include "footer.php";
?>
