<?php
session_start();
if (!isset($_SESSION['userid'])) {
    header("Location: ./CompanyLogin.php");
}
?>

<?php


$id = $_SESSION['userid'];
$conn = mysqli_connect("localhost", "root", "", "minor_project");
$query = "select * from company where c_id=$id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
$name = $row['c_name'];
$phn = $row['c_contact'];
$email = $row['c_email'];
$addr = $row['c_address'];
$city = $row['c_city'];
$pincode = $row['c_pincode'];


mysqli_query($conn, $query);
mysqli_close($conn);


?>




    <?php
    include "com_header.php";
    ?>
    

       

            <section class="main-content ">
                <div class=" ">
                <h1 class=" text-center mb-4 text-gray-800">Profile</h1>
                    <form action="#">

                        <div class="row d-flex justify-content-center alert">

                            <div class="profile-card rounded-1g shadow p-4 p-xl-5 mb-4 text-center" style="background-color:#7388AB">

                                <div class="d-flex justify-content-end mb-3">

                                    <a class="btn btn-primary" href="com_profile_edit.php" role="button">EDIT</a>

                                </div>
                           
                                

                                <div class="text-left mb-4">

                                    <div class="form-group p-1">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-white">
                                                    <span class="fa fa-user mr-2 text-primary"></span>Company Name
                                                </span>
                                            </div>
                                            <input type="text" name="txtName" value="<?php echo $name; ?>"
                                                class="form-control" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group p-1">
                                        <div class="input-group">

                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-white">
                                                    <span class="fa fa-phone mr-2 text-primary"></span>Phone Number
                                                </span>
                                            </div>
                                            <input type="text" name="txtPhone" value="<?php echo $phn; ?>"
                                                class="form-control" disabled>

                                        </div>
                                    </div>

                                    <div class="form-group p-1">
                                        <div class="input-group">

                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-white">
                                                    <span class="fa fa-id-card mr-2 text-primary"></span>Email ID
                                                </span>
                                            </div>
                                            <input type="email" name="email" value="<?php echo $email; ?>"
                                                class="form-control" disabled>

                                        </div>
                                    </div>


                                    <div class="form-group p-1">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-white">
                                                    <i class="fa-solid fa-address-book mr-2 text-primary"></i>Address
                                                </span>
                                            </div>
                                            <input type="text" name="Address" value="<?php echo $addr; ?>"
                                                class="form-control" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group p-1">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-white">
                                                    <i class="fa-solid fa-address-book mr-2 text-primary"></i>City
                                                </span>
                                            </div>
                                            <input type="text" name="city" value="<?php echo $city; ?>"
                                                class="form-control" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group p-1">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-white">
                                                    <i class="fa-solid fa-address-book mr-2 text-primary"></i>Pin Code
                                                </span>
                                            </div>
                                            <input type="text" name="pincode" value="<?php echo $pincode; ?>"
                                                class="form-control" disabled>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>



      
    <?php
    include "footer.php";
    ?>
