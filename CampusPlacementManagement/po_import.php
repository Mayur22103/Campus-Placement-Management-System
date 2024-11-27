<?php
$conn = mysqli_connect("localhost", "root", "", "minor_project");
if (isset($_POST["Import"])) {

    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    echo $filename = $_FILES["file"]["tmp_name"];


    if (!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)) {

        $file = fopen($filename, "r");
        while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE) {
            $d = explode("/", $emapData[8]);
            $password = md5($emapData[2]);
          
            $sql = "INSERT into student (`s_id`, `s_name`, `s_email`, `s_pass`,`s_phn`, `s_adr`, `s_city`,`s_pincode`,`s_state`,`s_dob`,`s_m1`,`s_m2`,`s_m3`,`s_degname`,`time`,`ip`,`status`,`selected_status`,`filepath`,`m_status`) 
                values(NULL,'$emapData[0]','$emapData[1]','$password','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]',STR_TO_DATE('$d[2],$d[0],$d[1]','%Y,%m,%d'),'$emapData[9]','$emapData[10]','$emapData[11]','$emapData[12]',NULL,1,1,1,'$emapData[13]',0)";
           
            $result = mysqli_query($conn, $sql);
            if (!$result) {
                echo "<script type=\"text/javascript\">
                        alert(\"Invalid File:Please Upload CSV File.\");
                        window.location = \"po_uploadstudent.php\"
                    </script>";

            }

        }


        fclose($file);
     
        include "mail.php";
        echo "<script type=\"text/javascript\">
        alert(\"CSV File has been successfully Imported.\");
        window.location = \"po_uploadstudent.php\"
    </script>";



    
        mysqli_close($conn);



    }

}



?>