<?php 
    include('auth.php');
    include('includes/header.php');
?>

<div class="container-fluid px-4">
<h4 class="mt-4">Elèves</h4>
<ol class="breadcrumb mb-4">
<li class="breadcrumb-item active">Dashboard</li>
<li class="breadcrumb-item active">Elèves</li>
</ol>
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4>Ajouter Elève
<a href="listeEleve.php" class="btn btn-danger float-end">Retour</a>

</h4>
</div>
<div class="card-body">
<?php
                                     if (isset($_GET['id'])) {
                                        $eleveid=$_GET['id'];
                                        $sql="SELECT * FROM `eleve` WHERE id='$eleveid'";
                                        $query=mysqli_query($connect,$sql);
                                        //var_dump($query);
                                        if(mysqli_num_rows($query)> 0){
                                            foreach($query as $eleve){
                                                ?>
<form action="codeEleve.php" method="POST">
<input type="hidden" name="idelev" value="<?=$eleve['id']?>">

            <div class="row">
        <div class="col-md-6 mb-3">
        <label>Nom</label>
        <input type="text" name="nom" value="<?= $eleve['Nom']?>" class="form-control">
    </div>
    <div class="col-md-6 mb-3">
        <label>Prenom</label>
        <input type="text" name="prenom" value="<?= $eleve['Prenom']?>" class="form-control">
    </div>
    <div class="col-md-6 mb-3">
        <label>date naissance</label>
        <input type="date" name="date" value="<?= $eleve['datenaiss']?>" class="form-control">
    </div>
    <div class="col-md-6 mb-3">
        <label>Niveau</label>
        <select name="niveau" id="niveau" required class="form-control">
                            <option value="0">Choisir niveau</option>
                            <option value="1" >7B</option>
                            <option value="2" >8B</option>   
                            <option value="3" >9B</option>                                                  
        </select>
    </div>
    <div class="col-md-6 mb-3">
        <label>Cours</label>
        <input type="text" name="id_cours" value="<?= $eleve['id_cours']?>" class="form-control">
    </div>
    <div class="col-md-5 mb-3">
        <br>                                                
        <button type="submit" name="btnedit" class="btn btn-primary">Modifier Elève</button>
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