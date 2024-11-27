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
                    <form action="DB_stud_profile_edit.php" method="post" enctype="multipart/form-data">
                        <div class="row d-flex justify-content-center alert">

                            <div class="profile-card rounded-1g shadow p-4 p-xl-5 mb-4 text-center" style="background-color:#7388AB">

                                <div class="banner"></div>
                                <img src="<?php echo $image; ?>" alt="" class="image-circle mx-auto mb-4">
                                <div class="input-group input-group-sm">
                                    <div class="row d-flex justify-content-center no-gutters">
                                        <div class="col-5">
                                            <input type="file" class="mb-3 form-control" name="fileupload"
                                                accept=".jpg,.jpeg,.png">
                                            <input type="hidden" name="old_image" value="<?php echo $image; ?>">
                                        </div>
                                        <div class="col-3">
                                        <button class="btn btn-primary" name="btnimg" type="submit">Upload</button>
                                        </div>
                                    </div>
                                </div>




                                <div class="form-group p-1">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="fa fa-user mr-2 text-primary"></span>Name
                                            </span>
                                        </div>
                                        <input type="text" name="txtName" value="<?php echo $name; ?>"
                                            class="form-control">
                                       
                                    </div>
                                </div>

                                <div class="form-group p-1">
                                    <div class="input-group">

                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="fa fa-phone mr-2 text-primary"></span>Phone Number
                                            </span>
                                        </div>
                                        <input type="text" name="txtPhone" value="<?php echo $phn; ?>"
                                            class="form-control">

                                    </div>
                                </div>

                                <div class="form-group p-1">
                                    <div class="input-group">

                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <span class="fa fa-id-card mr-2 text-primary"></span>Email ID
                                            </span>
                                        </div>
                                        <input type="email" name="email" value="<?php echo $email; ?>"
                                            class="form-control">

                                    </div>
                                </div>

                                <div class="form-group p-1">
                                    <div class="input-group">
                                        <div class="input-group-prepend ">
                                            <span class="input-group-text">
                                                <span class="fa fa-dot-circle mr-2 text-primary "></span>BirthDate
                                            </span>
                                        </div>
                                        <input type="date" name="birthdate" value="<?php echo $bdate; ?>"
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="form-group p-1">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-address-book mr-2 text-primary"></i>Address
                                            </span>
                                        </div>
                                        <input type="text" name="Address" value="<?php echo $addr; ?>"
                                            class="form-control">
                                    </div>
                                </div>

                                <div class=" p-1 d-flex  justify-content-end" >

                                    <button class="btn btn-primary" style="width:120px"   name="btnAdd" type="submit">Submit</button>

                                </div>



                            </div>
                        </div>
                    </form>
              
            </section>

      

   

    <?php
    include "footer.php";
    ?>
