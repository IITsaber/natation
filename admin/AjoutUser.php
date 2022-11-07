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
<h4>Ajouter utilistateur
<a href="users_list.php" class="btn btn-danger float-end">Retour</a>

</h4>
</div>
<div class="card-body">
<form action="code.php" method="POST">

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
        <label>Email</label>
        <input type="email" name="email"  class="form-control">
    </div>
    <div class="col-md-6 mb-3">
        <label>Mot de passe</label>
        <input type="password" name="password"class="form-control">
    </div>
    <div class="col-md-6 mb-3">
        <label>Role</label>
        <select name="role" id="role" required class="form-control">
            <option value="">Choisir role</option>
            <option value="1" >Admin</option>
            <option value="0" >user</option>                                                    
        </select>
    </div>
    <div class="col-md-5 mb-3">
        <br>                                                
        <button type="submit" name="btnAdd" class="btn btn-primary">Ajouter Admin/User</button>
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