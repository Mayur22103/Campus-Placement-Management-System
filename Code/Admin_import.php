<?php
$conn = mysqli_connect("localhost", "root", "", "minor_project");
if (isset($_POST["Import"])) {

    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    echo $filename = $_FILES["file"]["tmp_name"];


    if (!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)) {

        $file = fopen($filename, "r");
        while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE) {
            $d = explode("/", $emapData[2]);
            $password = md5($emapData[7]);
          
            $sql = "INSERT into faculty (`f_id`, `f_name`,`f_designation`,`f_dob`, `f_email`, `f_gender`,`f_contactnumber`, `role`, `f_password`,`l_status`) 
                values(NULL,'$emapData[0]','$emapData[1]',STR_TO_DATE('$d[2],$d[0],$d[1]','%Y,%m,%d'),'$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$password',0)";
           
            $result = mysqli_query($conn, $sql);
            if (!$result) {
                echo "<script type=\"text/javascript\">
                        alert(\"Invalid File:Please Upload CSV File.\");
                        window.location = \"Admin_upload_faculty.php\"
                    </script>";

            }

        }


        fclose($file);
     
       // include "Admin_mail.php";
        echo "<script type=\"text/javascript\">
        alert(\"CSV File has been successfully Imported.\");
        window.location = \"Admin_upload_faculty.php\"
    </script>";



    
        mysqli_close($conn);



    }

}



?>