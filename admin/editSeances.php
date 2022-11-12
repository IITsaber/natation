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
<h4>Modifier Séance
<a href="listeSeances.php" class="btn btn-danger float-end">Retour</a>

</h4>
</div>
<div class="card-body">
<?php
                                     if (isset($_GET['id'])) {
                                        $seanceid=$_GET['id'];
                                        $sql="SELECT * FROM seances WHERE id='$seanceid'";
                                        $query=mysqli_query($connect,$sql);
                                        if(mysqli_num_rows($query)> 0){
                                            foreach($query as $seance){
                                                ?>
<form action="codeSeance.php" method="POST">
<input type="hidden" name="idseance" value="<?=$seance['id']?>">

            <div class="row">
        <div class="col-md-6 mb-3">
        <label>Cours</label>
        <input type="text" name="cours" value="<?= $seance['cours']?>" class="form-control">
    </div>
    <div class="col-md-6 mb-3">
        <label>Salle</label>
        <input type="text" name="salle" value="<?= $seance['salle']?>" class="form-control">
    </div>
    <div class="col-md-6 mb-3">
        <label>H_Début</label>
        <input type="time" name="HD" value="<?= $seance['HDebut']?>" class="form-control">
    </div>
    <div class="col-md-6 mb-3">
        <label>H_Fin</label>
        <input type="time" name="HF" value="<?= $seance['HFin']?>" class="form-control">
    </div>
    <div class="col-md-6 mb-3">
        <label>Enseignant</label>
        <input type="text" name="ens" value="<?= $seance['enseignant']?>" class="form-control">
    </div>
    
    
    <div class="col-md-5 mb-3">
        <br>                                                
        <button type="submit" name="btnedit" class="btn btn-primary">Modifier Séance</button>
    </div>
</div>

</form>
<?php
                                            }
                                        }
                                     } else {
                                       echo "pas d'enregistrement trouvé";   
                                     }
                                     
                                    ?>
</div>
</div>
</div>

</div>
</div>

<?php
 include('includes/footer.php');
 include('includes/scripts.php');
?>