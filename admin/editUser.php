<?php 
    include('auth.php');
    include('includes/header.php');
?>

            <div class="container-fluid px-4">
                <h4 class="mt-4">Utilisateurs</h4>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                        <li class="breadcrumb-item active">Utilisateurs</li>
                    </ol>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Modifier utilistateur
                                    <a href="users_list.php" class="btn btn-danger float-end">Retour</a>
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <?php
                                     if (isset($_GET['id'])) {
                                        $userid=$_GET['id'];
                                        $sql="SELECT * FROM users WHERE id='$userid'";
                                        $query=mysqli_query($connect,$sql);
                                        if(mysqli_num_rows($query)> 0){
                                            foreach($query as $user){
                                                ?>
                                                    <form action="code.php" method="POST">
                                                                    <input type="hidden" name="userid" value="<?=$user['id']?>">
                                                                    <div class="row">
                                                                <div class="col-md-6 mb-3">
                                                                <label>Nom</label>
                                                                <input type="text" name="nom"  value="<?= $user['nom'];?>" class="form-control">
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label>Prenom</label>
                                                                <input type="text" name="prenom" value="<?= $user['prenom'];?>" class="form-control">
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label>Email</label>
                                                                <input type="email" name="email" value="<?= $user['email'];?>" class="form-control">
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label>Mot de passe</label>
                                                                <input type="password" name="password" value="" class="form-control">
                                                            </div>
                                                            <div class="col-md-6 mb-3">
                                                                <label>Role</label>
                                                                <select name="role" id="role" required class="form-control">
                                                                    <option value="">Choisir role</option>
                                                                    <option value="1" <?= $user['role']=='1'?'selected':'';?>>Admin</option>
                                                                    <option value="0" <?= $user['role']=='0'?'selected':'';?>>user</option>                                                    
                                                                </select>
                                                            </div>
                                                            <div class="col-md-5 mb-3">
                                                                <br>                                                
                                                                <button type="submit" name="btnedit" class="btn btn-primary">Modifier Utilisateur</button>
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

<?php
 include('includes/footer.php');
 include('includes/scripts.php');
?>