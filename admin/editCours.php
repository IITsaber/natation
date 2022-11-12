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
<?php
                                     if (isset($_GET['id'])) {
                                        $courid=$_GET['id'];
                                        $sql="SELECT * FROM `cours` WHERE id='$courid'";
                                        $query=mysqli_query($connect,$sql);
                                        //var_dump($query);
                                        if(mysqli_num_rows($query)> 0){
                                            foreach($query as $cours){
                                                ?>
<form action="codeCours.php" method="POST">
<input type="hidden" name="coursid" value="<?=$cours['id']?>">

            <div class="row">
        <div class="col-md-6 mb-3">
        <label>Titre</label>
        <input type="text" name="titre" value="<?= $cours['Titre']?>" class="form-control">
    </div>
   
   
    <div class="col-md-5 mb-3">
        <br>                                                
        <button type="submit" name="btnedit" class="btn btn-primary">Modifier Cours</button>
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