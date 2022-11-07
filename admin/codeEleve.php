<?php
 include("auth.php");
 if (isset($_POST['btndel'])) {
    $eleveid=$_POST['btndel'];
    $sqldel="DELETE FROM `eleve` WHERE id='$eleveid'";
    $querydel=mysqli_query($connect,$sqldel);
    if($querydel){
        $_SESSION['message']="suppression avec succès";
        header("Location:listeELeve.php");
        exit(0);
    }else{
        $_SESSION['message']="Echec suppression";
        header("Location:listeEleve.php");
        exit(0);
    }
 }
 if (isset($_POST['btnAdd'])) {
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $dateN=$_POST['date'];
    $niveau=$_POST['niveau'];
    $cours=$_POST['id_cours'];
    
    $sqlInsert="INSERT INTO `eleve`(`Nom`, `Prenom`, `datenaiss`, `niveau`, `id_cours`) VALUES ('$nom','$prenom','$dateN','$niveau','$cours')";
    $query=mysqli_query($connect,$sqlInsert);
    if($query){
        $_SESSION['message']="Nouveau element inseré";
        header("Location:listeELeve.php");
        exit(0);
    }else{
        $_SESSION['message']="Echec insertion";
        header("Location:listeEleve.php");
        exit(0);
    }
 }

 if (isset($_POST['btnedit'])) {
    $eleveid=$_POST['idelev'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $dateN=$_POST['date'];
    $niveau=$_POST['niveau'];
    $cours=$_POST['id_cours'];
    
    $sql="UPDATE `eleve` SET `Nom`='$nom',`Prenom`='$prenom',`datenaiss`='$dateN',`niveau`='$niveau',`id_cours`='$cours' WHERE `id`=' $eleveid'";
    $query=mysqli_query($connect,$sql);
        if($query){
            $_SESSION['message']="Modification avec succès";
            header("Location:listeELeve.php");
            exit(0);
        }
 }
?>