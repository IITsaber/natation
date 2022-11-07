<?php
 include("auth.php");
 if (isset($_POST['btndel'])) {
    $enseignantid=$_POST['btndel'];
    $sqldel="DELETE FROM `enseignant` WHERE id='$enseignantid'";
    $querydel=mysqli_query($connect,$sqldel);
    if($querydel){
        $_SESSION['message']="suppression avec succès";
        header("Location:listeEnseignant.php");
        exit(0);
    }else{
        $_SESSION['message']="Echec suppression";
        header("Location:listeEnseignant.php");
        exit(0);
    }
 }
 if (isset($_POST['btnAdd'])) {
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $tel=$_POST['tel'];
    
    $sqlInsert="INSERT INTO enseignant(nom,prenom,tel) VALUES('$nom','$prenom','$tel')";
    $query=mysqli_query($connect,$sqlInsert);
    if($query){
        $_SESSION['message']="Nouveau element inseré";
        header("Location:listeEnseignant.php");
        exit(0);
    }else{
        $_SESSION['message']="Echec insertion";
        header("Location:listeEnseignant.php");
        exit(0);
    }
 }

 if (isset($_POST['btnedit'])) {
    $ensid=$_POST['idens'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $tel=$_POST['tel'];
    

    $sql="UPDATE enseignant SET nom='$nom',prenom='$prenom',tel='$tel' WHERE `id`='$ensid'";
    $query=mysqli_query($connect,$sql);
        if($query){
            $_SESSION['message']="Modification avec succès";
            header("Location:listeEnseignant.php");
            exit(0);
        }
 }
?>