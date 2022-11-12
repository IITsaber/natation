<?php 
    include('auth.php');
    include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h4 class="mt-4">Cours</h4>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active">Cours</li>
        </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Ajouter Cours
                    <a href="listeCours.php" class="btn btn-danger float-end">Retour</a>
                    </h4>
                </div>
    <div class="card-body">
        <form action="codeCours.php" method="POST">

            <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Titre</label>
                        <input type="text" name="titre"  class="form-control">
                    </div>
                   
                    
                    
                    <div class="col-md-5 mb-3">
                        <br>                                                
                        <button type="submit" name="btnAdd" class="btn btn-primary">Ajouter Cours</button>
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