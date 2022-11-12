<?php
include("auth.php");

/// script delete cours from database
if (isset($_POST['btndel'])) {
    $courid=$_POST['btndel'];
    $sqldel="DELETE FROM `cours` WHERE id='$courid'";
    $querydel=mysqli_query($connect,$sqldel);
    if($querydel){
        $_SESSION['message']="suppression avec succès";
        header("Location:listeCours.php");
        exit(0);
    }else{
        $_SESSION['message']="Echec suppression";
        header("Location:listeCours.php");
        exit(0);
    }
 }
// script insert element in the database
if (isset($_POST['btnAdd'])) {
    $titre=$_POST['titre'];
    
   
    
    $sqlInsert="INSERT INTO `cours`(`Titre`) VALUES ('$titre')";
    $query=mysqli_query($connect,$sqlInsert);
    if($query){
        $_SESSION['message']="Nouveau element inseré";
        header("Location:listeCours.php");
        exit(0);
    }else{
        $_SESSION['message']="Echec insertion";
        header("Location:listeCours.php");
        exit(0);
    }
 }

 // edit an exist  element in the  database 
 if (isset($_POST['btnedit'])) {
    $courid=$_POST['coursid'];
    $titre=$_POST['titre'];
 
    
    
    $sql="UPDATE cours SET Titre='$titre' WHERE `id`='$courid'";
    $query=mysqli_query($connect,$sql);
        if($query){
            $_SESSION['message']="Modification avec succès";
            header("Location:listeCours.php");
            exit(0);
        }
 }
?>