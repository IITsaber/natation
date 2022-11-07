<?php 
    include('auth.php');
    include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h4 class="mt-4">Enseignants</h4>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active">Enseignants</li>
        </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Ajouter Enseignant
                    <a href="listeEnseignant.php" class="btn btn-danger float-end">Retour</a>
                    </h4>
                </div>
    <div class="card-body">
        <form action="codeEnseignant.php" method="POST">

            <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Nom</label>
                        <input type="text" name="nom"  class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Prenom</label>
                        <input type="text" name="prenom"  class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Téléphone</label>
                        <input type="text" name="tel"  class="form-control">
                    </div>
                
                    <div class="col-md-5 mb-3">
                        <br>                                                
                        <button type="submit" name="btnAdd" class="btn btn-primary">Ajouter Enseignant</button>
                    </div>
            </div>

        </form>
    </div>
</div>
</div>

</div>
</div>

<?php
 include('includes/footer.php');
 include('includes/scripts.php');
?>