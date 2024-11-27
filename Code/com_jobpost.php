<?php
session_start();
if (!isset($_SESSION['userid'])) {
    header("Location: ./CompanyLogin.php");
}
?>

<?php
include "com_header.php";
?>



<div>
    <section class="main-content ">

        <h1 class=" text-center mb-4 text-gray-800">Job Post</h1>
        <form method="post" action="JobApplicationFormdb.php" class="needs-validation">
            <div class="mt-5 row d-flex justify-content-center">

                <div class="profile-card rounded-1g shadow p-4 p-xl-5 mb-4 text-center">

                    <div class="text-left mb-4">

                        <div class="form-group p-1">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text ">
                                        <span class="fa fa-user mr-2 text-primary"></span>Job Title
                                    </span>
                                </div>
                                <input type="text" autocomplete="off" class="form-control" placeholder="Enter Job Title" id="txttitle"
                                    name="txttitle" required>
                            </div>
                        </div>

                        <div class="form-group p-1">
                            <div class="input-group">

                                <div class="input-group-prepend">
                                    <span class="input-group-text ">
                                        <span class="fas fa-laptop-code mr-2 text-primary"></span>Skill
                                    </span>
                                </div>
                                <input type="text" placeholder="Enter Require Skill" id="txtskill" name="txtskill"
                                    class="form-control" required>

                            </div>
                        </div>

                        <div class="form-group p-1">
                            <div class="input-group">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text">
                                        <span class="fa-solid fa-user-graduate mr-2 text-primary"></span> Job Require
                                        degree
                                    </span>
                                </div>
                                <select id="degree" name="degree" class="form-control" required>
                                    <option disabled="disabled" selected="selected">Choose Option</option>
                                    <option value="BCA">BCA</option>
                                    <option value="MCA">MCA</option>
                                    <option value="Bscit">B.Sc(IT)</option>
                                    <option value="Mscit">M.Sc(IT)</option>
                                    <option value="Ph.D">Ph.D</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group p-1">
                            <div class="input-group">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text ">
                                        <span class="fa fa-dot-circle mr-2 text-primary "></span>Discription
                                    </span>
                                </div>
                                <textarea type="text" rows="4" cols="50" id="txtdis" name="txtdis" class="form-control"
                                    required> </textarea>
                            </div>
                        </div>

                        <div class="form-group p-1">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa-solid fa-money-bill mr-2  text-primary"></i>Salary
                                    </span>
                                </div>
                                <input type="number" placeholder="Enter salary" id="txtsal" name="txtsal"
                                    class="form-control" required>
                            </div>
                        </div>


                        <div class="form-group p-1">
                            <div class="input-group">
                                <button type="submit" id="submit"  name="btnJadd" 
                                     class="form-control btn-primary ">Add Job Details</button>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </form>

    </section>
</div>

<!-- <script>
    const submitButton = document.getElementById("submit");
    const input = document.getElementById("txtsal");
    input.addEventListener("keyup", (e) => {
    const value = e.currentTarget.value;
    submitButton.disabled =  false;
    if (value === ""){
            submitButton.disabled = true;
    }


    });

   

    function myFunction() {
        alert("Job Status Is Pending Waiting For Approvel");
    }
</script> -->


<?php
include "footer.php";
?>