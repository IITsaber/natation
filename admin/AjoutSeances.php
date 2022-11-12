<?php 
    include('auth.php');
    include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h4 class="mt-4">Séances</h4>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active">Séances</li>
        </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Ajouter Séance
                    <a href="listeSeances.php" class="btn btn-danger float-end">Retour</a>
                    </h4>
                </div>
    <div class="card-body">
        <form action="codeSeance.php" method="POST">

            <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Cours</label>
                        <input type="text" name="cours"  class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Salle</label>
                        <input type="text" name="salle"  class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Heure Debut</label>
                        <input type="time" name="HD"  class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Heure Fin</label>
                        <input type="time" name="HF"  class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Enseignant</label>
                        <input type="text" name="ens"  class="form-control">
                    </div>
                
                    <div class="col-md-5 mb-3">
                        <br>                                                
                        <button type="submit" name="btnAdd" class="btn btn-primary">Ajouter Séances</button>
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