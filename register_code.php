<?php
session_start();
include('admin/config/dbconfig.php');
if (isset($_POST['btnInsc'])) {
    $nom=mysqli_real_escape_string($connect, $_POST['nom']);
    $prenom=mysqli_real_escape_string($connect, $_POST['prenom']);
    $email=mysqli_real_escape_string($connect,$_POST['email']);
    $pass=mysqli_real_escape_string($connect,$_POST['pass']);
    $Cpass=mysqli_real_escape_string($connect,$_POST['Cpass']);
                if($pass==$Cpass){
                    // check email 
                    $sqlemail="SELECT email FROM users WHERE email='$email'";
                    $queryemail=mysqli_query($connect,$sqlemail);
                    if (mysqli_num_rows($queryemail) >0) {
                        // email déjà utilisé
                        $_SESSION['message']="email déjà utilisé";
                        header("Location:register.php");
                        exit(0);
                    } else {
                    $insertSql="INSERT INTO users(nom,prenom,email,password) VALUES('$nom','$prenom','$email','$pass')";
                    $queryInsert=mysqli_query($connect,$insertSql);
                    if($queryInsert){
                        $_SESSION['message']="inscription avec succés";
                        header("Location:login.php");
                        exit(0);
                    }
                    else{
                        $_SESSION['message']="vérifier vos coordonnées";
                        header("Location:register.php");
                        exit(0);
                    }
                    
                }

                }else{
                    $_SESSION['message']="saisir des mots de passe identiques";
                    header("Location:register.php");
                    exit(0);
                }
            }else   {
                        header("Location:register.php");
                        exit(0);
                    }

?>