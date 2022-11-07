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
<?php
                                     if (isset($_GET['id'])) {
                                        $userid=$_GET['id'];
                                        $sql="SELECT * FROM enseignant WHERE id='$userid'";
                                        $query=mysqli_query($connect,$sql);
                                        if(mysqli_num_rows($query)> 0){
                                            foreach($query as $enseignant){
                                                ?>
<form action="codeEnseignant.php" method="POST">
<input type="hidden" name="idens" value="<?=$enseignant['id']?>">

            <div class="row">
        <div class="col-md-6 mb-3">
        <label>Nom</label>
        <input type="text" name="nom" value="<?= $enseignant['nom']?>" class="form-control">
    </div>
    <div class="col-md-6 mb-3">
        <label>Prenom</label>
        <input type="text" name="prenom" value="<?= $enseignant['prenom']?>" class="form-control">
    </div>
    <div class="col-md-6 mb-3">
        <label>Téléphone</label>
        <input type="text" name="tel" value="<?= $enseignant['tel']?>" class="form-control">
    </div>
    
    <div class="col-md-5 mb-3">
        <br>                                                
        <button type="submit" name="btnedit" class="btn btn-primary">Modifier Enseignant</button>
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