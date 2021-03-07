<?php

include_once './views/partials/header.php';
?>

<div class="container mt-5 col-lg-4">
    <form method="POST" action="">
        <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Mot de pass</label>
            <input type="password" name="password" class="form-control" placeholder="Mot de pass">
        </div>

        <button type="submit" name="submit" value="submit" class="btn btn-primary">Connexion</button>
    </form>


<?php
include_once './views/partials/footer.php';