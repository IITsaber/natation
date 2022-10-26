<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        <h4>Connexion</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                           
                            <input type="text" placeholder="saisir votre nom utilisateur "class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            
                            <input type="password" placeholder="saisir votre mot de passe" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Se connecter</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php');?>