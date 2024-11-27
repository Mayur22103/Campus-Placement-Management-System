<?php
session_start();
if (!isset($_SESSION['fid'])) {
    header("Location: ./Admin_Login.php");
}
?>


<?php
include('Admin_header.php');
?>

<?php
$conn = mysqli_connect("localhost", "root", "", "minor_project");
$count = 0;
$query = "select f_id,f_name,f_designation,f_dob,f_email,f_gender,f_contactnumber,role from faculty ";
$records = mysqli_query($conn, $query);
mysqli_close($conn);
?>
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">ALL FACULTY LIST</h1>

<div class="">
    <div class="table-responsive">
        <table id="employee_data" class="table table-striped table-bordered  table-hover ">
            <thead>
                <tr>
                    <th scope="col">Index no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Date of birth</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">role</th>
                    <th scope="col">Upgrade Status</th>

                </tr>
            </thead>

            <?php
            while (($row = mysqli_fetch_array($records)) == true) {


                echo "<tr style='text-align: center;'>";
                echo "<td>" . ++$count . "</td>";
                echo "<td>" . $row['f_name'] . "</td>";
                echo "<td>" . $row['f_designation'] . "</td>";
                echo "<td>" . $row['f_dob'] . "</td>";
                echo "<td>" . $row['f_email'] . "</td>";
                echo "<td>" . $row['f_gender'] . "</td>";
                echo "<td>" . $row['f_contactnumber'] . "</td>";


                ?>

                <td>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "minor_project");
                    $query = "select role from faculty where f_id=$row[f_id]";
                    $result = mysqli_query($conn, $query);
                    while (($row1 = mysqli_fetch_array($result)) == true) {
                        if ($row1['role'] == 1)
                            echo "Placement Officer";
                        else if ($row1['role'] == 0)
                            echo "Principal";
                        else if ($row1['role'] == 2)
                            echo "Faculty";
                    }

                    ?>

                </td>
                <td>
                    <?php if ($row['role'] == "0") { ?>
                        <button type="submit" name="apply" class="btn btn-primary" disabled>Principal</button>
                    <?php } else if ($row['role'] == "1") { ?>
                            <form action="Admin_-statusBTN.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $row['f_id']; ?>" />
                                <button type="submit" name="apply" class="btn btn-primary">Faculty</button>
                            </form>
                    <?php } else { ?>
                            <form action="Admin_+statusBTN.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $row['f_id']; ?>" />
                                <button type="submit" name="apply" class="btn btn-success">PlacementOfficer</button>
                            </form>
                    <?php }
                    ?>

                </td>

                <?php
                echo "</tr>";

            } ?>
        </table>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#employee_data').DataTable();
    });  
</script>


<?php
include('footer.php');
?>