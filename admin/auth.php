<?php
session_start();
include('config/dbconfig.php');
if (!isset($_SESSION['auth'])) {
    $_SESSION['message']="connecter pour acceder au dashboard";
    header("Location:../login.php");
    exit(0);
} else {
    if($_SESSION['auth_role']!="1"){
        $_SESSION['message']="vous n'êtes pas authorisé en tant qu'Admin";
        header("Location:../login.php");
        exit(0);

    }
}




?>