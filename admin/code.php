<?php
 include("auth.php");
 if (isset($_POST['btndel'])) {
    $userid=$_POST['btndel'];
    $sqldel="DELETE FROM `users` WHERE id='$userid'";
    $querydel=mysqli_query($connect,$sqldel);
    if($querydel){
        $_SESSION['message']="Suppression avec succés";
        header("Location:users_list.php");
        exit(0);
    }else{
        $_SESSION['message']="Echec de suppression";
        header("Location:users_list.php");
        exit(0);
    }
 }
 if (isset($_POST['btnAdd'])) {
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $role=$_POST['role'];
    $sqlInsert="INSERT INTO users(nom,prenom,email,password,role) VALUES('$nom','$prenom','$email','$password','$role')";
    $query=mysqli_query($connect,$sqlInsert);
    if($query){
        $_SESSION['message']="Nouveau element inseré";
        header("Location:users_list.php");
        exit(0);
    }else{
        $_SESSION['message']="Echec insertion";
        header("Location:users_list.php");
        exit(0);
    }
 }

 if (isset($_POST['btnedit'])) {
    $userid=$_POST['userid'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $role=$_POST['role'];

    $sql="UPDATE users SET nom='$nom',prenom='$prenom',email='$email',password='$password',role='$role' WHERE `id`='$userid'";
    $query=mysqli_query($connect,$sql);
        if($query){
            $_SESSION['message']="Modification avec succès";
            header("Location:users_list.php");
            exit(0);
        }
 }
?>