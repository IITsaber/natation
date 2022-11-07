<?php
session_start();
if (isset($_POST['auth'])) {
    if(!isset($_SESSION['message'])){  
        $_SESSION['message']="vous êtes déjà connecté";
        
}
header("Location:index.php");
        exit(0);
  
} 
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
            <?php include('message.php'); ?>
                 <div class="card">
                    <form action="logincode.php" method="POST">
                            <div class="card-header">
                                <h4>Connexion</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-3">
                                
                                    <input type="email" name="email" placeholder="votre email" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    
                                    <input type="password" name="password" placeholder="votre mot de passe" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary" name="btnCnx">Se connecter</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php');?>