<?php
session_start();
if (isset($_POST['auth'])) {
    $_SESSION['message']="vous êtes déjà connecté";
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
          <div class="card-header">
            <h4>Inscription</h4>
          </div>
            <div class="card-body">
             <form method="POST" action="register_code.php">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" name="nom" id="inputFirstName" type="text" placeholder="saisir votre nom" required>
                            <label for="inputFirstName">Nom</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control" name="prenom" id="inputLastName" type="text" placeholder="saisir votre prénom" required>
                            <label for="inputLastName">Prénom</label>
                        </div>
                    </div>
                </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" name="email" id="inputEmail" type="email" placeholder="name@example.com" required>
                        <label for="inputEmail">Adresse Email</label>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" name="pass" id="inputPassword" type="password"  autocomplete  placeholder="Creer mot de passe" required >
                                <label for="inputPassword">Mot de passe</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" name="Cpass" id="inputPasswordConfirm" type="password"  autocomplete  placeholder="Confirmer mot de passe" required/>
                                <label for="inputPasswordConfirm">Confirmer Mot de passe</label>
                            </div>
                        
                        </div>
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid"><button type="submit" class="btn btn-primary" name="btnInsc">Créer un compte</button></div>
                        </div>
                     </form>
                      
    
                    </div>
                </div>
            </div>
        </div>
     </div>
</div>




<?php include('includes/footer.php');?>