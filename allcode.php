<?php
session_start();
if (isset($_POST['btndec'])) {
    // destroy session
    unset($_SESSION['auth']);
    unset($_SESSION['auth_role']);
    unset($_SESSION['auth_user']);
    $_SESSION['message']="déconnexion avec succés";
    header("Location:login.php");
    exit(0);
}
 
?>