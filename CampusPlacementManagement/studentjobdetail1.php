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

$degree = $_SESSION['degree'];
$id = $_SESSION['sid'];
$conn = mysqli_connect("localhost", "root", "", "minor_project");
$count = 0;
$query = "select company.c_name, jobdetails.j_type,j_title,skill,j_dis,sal,j_id,joba_status,s_date, student.s_id,student.selected_status from company INNER JOIN jobdetails ON company.c_id = jobdetails.userid INNER JOIN student where student.s_id='$id' and jobdetails.j_type like ('%$degree%') and jobdetails.joba_status=1";
$records = mysqli_query($conn, $query);
?>
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Student Job Details</h1>

<div class="">
<div class="table-responsive">
<table id="employee_data" class="table table-striped table-bordered  table-hover " >
    <thead>
        <tr>
            <th>Index no</th>
            <th>Job Title</th>
            <th>Skill</th>
            <th>Job Require Degree</th>
            <th>Discription</th>
            <th>Salary</th>
            <th>Company Name</th>
            <th>Schedule Date</th>
            <th>Student Status</th>
            <th>Apply For Job</th>

        </tr>
    </thead>

    <?php
    while (($row = mysqli_fetch_array($records)) == true) {


        echo "<tr style='text-align: center;'>";
        echo "<td>" . ++$count . "</td>";
        echo "<td>" . $row['j_title'] . "</td>";
        echo "<td>" . $row['skill'] . "</td>";
        echo "<td>" . $row['j_type'] . "</td>";
        echo "<td>" . $row['j_dis'] . "</td>";
        echo "<td>" . $row['sal'] . "</td>";
        echo "<td>" . $row['c_name'] . "</td>";
        echo "<td>" . $row['s_date'] . "</td>";

        ?>
        <?php $tj_id = $row['j_id']; ?>

        <td>

            <?php
            $sid = $_SESSION['sid'];
            $conn = mysqli_connect("localhost", "root", "", "minor_project");
            $query = "select * from student where s_id=$sid and selected_status=2";
            $result = mysqli_query($conn, $query);
            $cnt = mysqli_num_rows($result);

            $query = "select * from apply where student_id='$sid'and jobdetail_id=$row[j_id]";
            $result = mysqli_query($conn, $query);
            $count1 = mysqli_num_rows($result);

            //echo $count . "<br>";
            if ($count1 == 1) {
                while (($row = mysqli_fetch_array($result)) == true) {
                    if ($row['status'] == "1")
                        echo "Applied";
                    else if ($row['status'] == "2")
                        echo "<h5 style=color:green>Selected</h5>";
                        else if ($row['status'] == "3")
                        echo "<h5 style=color:red>Reject</h5>";
                }
            } else {
                echo "Not applied";
            }

            mysqli_close($conn);
            $sid = $_SESSION['sid'];
            $conn = mysqli_connect("localhost", "root", "", "minor_project");
            $query = "select * from apply where student_id='$sid'and jobdetail_id=$tj_id";
            //echo $query;
            $result = mysqli_query($conn, $query);
            $count2 = mysqli_num_rows($result);
            //echo $count2;
            $row2 = mysqli_fetch_array($result)
            
            ?>
        </td>
        <td>

            <?php if ($cnt == "1") { ?>
                <p>---</p>
            <?php } else if ($count2 == "0") { ?>
                    <form action="ApplyBtnSJB.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $tj_id; ?>" />
                        <button type="submit" name="apply" class="btn btn-success">Apply</button>
                    </form>

            <?php } else if ($row2['status'] == "3") { ?>
                        <form action="NotApplySJB.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $tj_id; ?>" />
                            <button type="submit" name="notapply" class="btn btn-danger" disabled>---</button> 
                        </form>
           

                 <?php } else  { ?>
                        <form action="NotApplySJB.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $tj_id; ?>" />
                            <button type="submit" name="notapply" class="btn btn-danger">Not&nbsp;Apply</button> 
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