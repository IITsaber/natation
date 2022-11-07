<?php 
include('auth.php');
include('includes/header.php');
?>

  <div class="container-fluid px-4">
        <h4 class="mt-4">Elèves</h4>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active">Elève</li>
        </ol>
        <div class="row">
            <div class="col-md-12">
                <?php include("message.php"); ?>
                <div class="card">
                    <div class="card-header">
                        <h4>Liste des élèves
                            <a href="AjoutEleve.php" class="btn btn-primary float-end">Ajouter Elève</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>date naissance</th>   
                                    <th>Niveau</th> 
                                    <th>Cours</th>                                 
                                    <th colspan="2" style="text-align: center;">Actions</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                 $req="SELECT * FROM eleve";
                                 $query=mysqli_query($connect,$req);
                                 if (mysqli_num_rows($query) > 0) {
                                     foreach($query as $row){?>
                                      <tr>
                                        <td><?= $row['id'];  ?></td>
                                        <td><?= $row['Nom'];  ?></td>
                                        <td><?= $row['Prenom'];  ?></td>
                                        <td><?= $row['datenaiss'];  ?></td>
                                        <td><?= $row['niveau'];  ?></td>
                                        <td><?= $row['id_cours'];  ?></td>
                                        <td><a href="editEleve.php?id=<?= $row['id'];?>" class="btn btn-warning">Modifier</a> 
                                        </td>
                                        <td><form method="POST" action="codeEleve.php">
                                         <button type="submit" name="btndel" value="<?=$row['id'];?>" class="btn btn-danger">Supprimer</button>
                                         </form>                                       
                                        </td>
                                    </tr>

                                     <?php }
                                 } else {?>
                                    <tr>
                                        <td colspan="5">pas d'enregistrement</td>
                                    </tr>
                                 <?php }?>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
 </div>

<?php
 include('includes/footer.php');
 include('includes/scripts.php');
?>