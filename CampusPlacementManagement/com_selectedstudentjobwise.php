<?php
session_start();
if (!isset($_SESSION['userid'])) {
    header("Location: ./CompanyLogin.php");
}
?>

<?php

include('com_header.php');
?>

<?php
                    $count = 0;
                    $conn = mysqli_connect("localhost", "root", "", "minor_project");
                    $id = $_SESSION['userid'];
                    $query = "SELECT j_title,j_id from jobdetails where userid=$id";
                    $records = mysqli_query($conn, $query);
                    mysqli_close($conn);
?>
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">SELECTED STUDENT LIST</h1>

<div class="">
<div class="table-responsive">
<table id="employee_data" class="table table-striped table-bordered  table-hover " >
    <thead>
        <tr>
            <th>Index no</th>
            <th>Job Title</th>
            <th>Student</th>
            <th>PDF</th>
        </tr>
    </thead>

    <?php
    while (($row = mysqli_fetch_array($records)) == true) {


        echo "<tr style='text-align: center;'>";
        echo "<td>" . ++$count . "</td>";
        echo "<td>" . $row['j_title'] . "</td>";
        ?>

        <td>
                                   <form action="com_seljobwisestudlistbtn.php" method="POST">
                                        <input type="hidden" name="jid" value="<?php echo $row['j_id']; ?>" />
                                        <button type="submit" name="apply" class="btn btn-success"><i class="fa-solid fa-eye"></i>&nbsp;View</button>
                                    </form>
            
        </td>
        <td>
                                    <form action="com_seljobwisestudlistreport.php" method="POST">
                                        <input type="hidden" name="jid" value="<?php echo $row['j_id']; ?>" />
                                        <button type="submit" name="apply" class="btn btn-danger"><i class="fa-solid fa-file-pdf"></i>&nbsp;Download</button>
                                    </form>
      
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