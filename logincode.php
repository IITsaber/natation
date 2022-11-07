<?php
session_start();
 include('admin/config/dbconfig.php');
 if (isset($_POST['btnCnx'])) {
        $email=mysqli_real_escape_string($connect,$_POST['email']);
        $password=mysqli_real_escape_string($connect,$_POST['password']);
        $sqllogin="SELECT * FROM `users` WHERE email='$email' AND password='$password' LIMIT 1";
        $querylogin=mysqli_query($connect,$sqllogin);
        if (mysqli_num_rows($querylogin) > 0) {
           foreach ($querylogin as $data) {
            $user_id=$data['id'];
            $user_name=$data['nom'].' '.$data['prenom'];
            $user_email=$data['email'];
            $user_role=$data['role'];
           }
           $_SESSION['auth']=true;
           $_SESSION['auth_role']="$user_role";// 1= admin,0=user
           $_SESSION['auth_user']=[
              'user_id'=>$user_id,
              'user_name'=>$user_name,
              'user_email'=>$user_email
           ];
           if ($_SESSION['auth_role']=="1") {// admin access
            $_SESSION['message']="Bienvenu au dashboard";
                    header("Location:admin/index.php");
                    exit(0);
           } elseif ($_SESSION['auth_role']=='0') {// user access
            $_SESSION['message']="vous êtes connecté";
                    header("Location:index.php");
                    exit(0);
           }
           } else {
                    $_SESSION['message']="vérifier vos coordonnées";
                    header("Location:login.php");
                    exit(0);
        }
} else {
    $_SESSION['message']="vous n'êtes pas authorisé pour acceder cette page";
    header("Location:login.php");
    exit(0);
 }?>