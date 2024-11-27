<?php
if (!isset($_SESSION['sid'])) {
    header("Location: ./StudentLogin.php");
}
if (isset($_POST['btnAdd'])) {

    session_start();
    $oldimg = $_POST['old_image'];
    $id = $_SESSION['sid'];
    $name = $_POST['txtName'];
    $phn = $_POST['txtPhone'];
    $email = $_POST['email'];
    $bdate = $_POST['birthdate'];
    $addr = $_POST['Address'];


    $conn = mysqli_connect("localhost", "root", "", "minor_project");
    $query = "update student set s_name='$name',s_phn='$phn',s_email='$email',s_dob='$bdate',s_adr='$addr' where s_id=$id";
    mysqli_query($conn, $query);
    mysqli_close($conn);
    header("Location: ./student_profile.php");

}
?>

<?php
if (isset($_POST['btnimg'])) {
    $oldimg = $_POST['old_image'];
    $newimg = $_FILES['fileupload']['name'];

    if ($newimg !== '') {
        $extension = strtolower(pathinfo($_FILES['fileupload']['name'], PATHINFO_EXTENSION));
        $uploadfile = "upload/" . time() . ".$extension";
        if ($extension == "jpg" || $extension == "jpeg" || $extension == "png") {
            if (move_uploaded_file($_FILES['fileupload']['tmp_name'], $uploadfile)) {
                echo "<h1> file uploaded</h1>";

            } else
                echo "<h1> error in file upload</h1>" . $_FILES['fileupload']['error'];
        } else {
            echo "<h1> only image file allowed ";
        }
    } 
    else 
    {
        $uploadfile = $oldimg;
    }
    session_start();
    $oldimg = $_POST['old_image'];
    $id = $_SESSION['sid'];
    $conn = mysqli_connect("localhost", "root", "", "minor_project");
    $query = "update student set filepath='$uploadfile' where s_id=$id";
    mysqli_query($conn, $query);
    mysqli_close($conn);
    header("Location: ./stud_profile_edit.php");

}
?>