<?php
 include("auth.php");
 if (isset($_POST['btndel'])) {
    $seanceid=$_POST['btndel'];
    $sqldel="DELETE FROM `seances` WHERE id='$seanceid'";
    $querydel=mysqli_query($connect,$sqldel);
    if($querydel){
        $_SESSION['message']="suppression avec succès";
        header("Location:listeSeances.php");
        exit(0);
    }else{
        $_SESSION['message']="Echec suppression";
        header("Location:listeSeances.php");
        exit(0);
    }
 }
 if (isset($_POST['btnAdd'])) {
    $cours=$_POST['cours'];
    $salle=$_POST['salle'];
    $HD=$_POST['HD'];
    $HF=$_POST['HF'];
    $ens=$_POST['ens'];
    
    $sqlInsert="INSERT INTO `seances` (`cours`, `salle`, `HDebut`, `HFin`, `enseignant`) VALUES ('$cours', '$salle', '$HD', '$HF', '$ens')
    ";
    $query=mysqli_query($connect,$sqlInsert);
    if($query){
        $_SESSION['message']="Nouveau element inseré";
        header("Location:listeSeances.php");
        exit(0);
    }else{
        $_SESSION['message']="Echec insertion";
        header("Location:listeSeances.php");
        exit(0);
    }
 }

 if (isset($_POST['btnedit'])) {
    $seanceid=$_POST['idseance'];
    $cours=$_POST['cours'];
    $salle=$_POST['salle'];
    $HD=$_POST['HD'];
    $HF=$_POST['HF'];
    $ens=$_POST['ens'];

    $sql="UPDATE seances SET cours='$cours',salle='$salle',HDebut='$HD',HFin='$HF',enseignant='$ens' WHERE `id`='$seanceid'";
    $query=mysqli_query($connect,$sql);
        if($query){
            $_SESSION['message']="Modification avec succès";
            header("Location:listeSeances.php");
            exit(0);
        }
 }
?>