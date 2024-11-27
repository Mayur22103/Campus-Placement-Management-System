<?php
    session_start();
    unset($_SESSION['roleid']);
    header("Location: ./Admin_Login.php");
?>