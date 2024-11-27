<?php
session_start();
if (!isset($_SESSION['sid'])) {
    header("Location: ./StudentLogin.php");
}
?>


<?php
include('header.php');
?>



<section class="main-content ">

    <h1 class=" text-center mb-4 text-gray-800">Change Password</h1>
    <form method="POST" action="student_changepassdb.php" onsubmit="return matchPassword()">
        <div class="row d-flex justify-content-center alert">

            <div class="profile-card rounded-1g shadow p-4 p-xl-5 mb-4 text-center" style="background-color:#7388AB">




                <div class="text-left ">

                    <div class="form-group p-1">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <span class="fa-solid fa-key mr-2 text-primary"></span>New Password
                                </span>
                            </div>
                            <input type="password" name="txtNewPass" id="txtNewPass" class="form-control">
                        </div>
                    </div>

                    <div class="form-group p-1">
                        <div class="input-group">

                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                <i class="fa-solid fa-key mr-2 text-primary"></i>Re-Enter Password
                                </span>
                            </div>
                            <input type="password" name="txtRePass" id="txtRePass" class="form-control">

                        </div>
                    </div>

                    <div class=" p-1 d-flex  justify-content-end">

                        <button class="btn btn-primary" style="width:120px" name="btnAdd" type="submit">Submit</button>

                    </div>





                </div>
            </div>
        </div>
    </form>

</section>


<script>
    function matchPassword() {
        var pw1 = document.getElementById("txtNewPass").value;
        var pw2 = document.getElementById("txtRePass").value;

        if (pw1 != pw2) {
            alert("Passwords did not match");
            return false;
        } else {
            alert("Password Changed successfully");
            return true;
        }
        return false;
    }  
</script>







<?php
include "footer.php";
?>