<?php

include_once './views/partials/header.php';
include_once './views/partials/navbar.php';
require './Models/GitesModels.php';

?>
    <div class="">
        <div class="jumbotron jumbotron-fluid big-banner text-white">
            <div class="m-4" >
            <h1 class="display-3 font-weight-bold text-warning">Gîtes de France </h1>
            <p class="display-4">Gîtes et Chambres d'hôtes dans le Vercors.</p>

            <p class="text-capitalize text-lg font-weight-bold">Les routes vertigineuses dans le massif du Vercors en Isère, ouvrent la voie vers la plus
                grande réserve naturelle de France métropolitaine, celle des Hauts Plateaux</p>
                <!-- <p>
                <div class="container input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
                </div>
                </p> -->
            </div>
            <form class="container mt-5 rounded" style="margin: 150px; max-width: 420px; padding: 30px 30px 60px 30px; background-color: white; font-family: Helvetica; font-weight: 600; color: #484848;">
                <h1 style="font-size: 2em; font-weight: bold; margin-bottom: 15px;">Gîtes, villas, chalets, appartements, résidences et campings en France</h1>

                <div class="input-group-prepend" style=" font-size: small;">
                    <label>Arrivée</label> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
                    <label>Départ</label><br>
                </div>
                <div class="input-group" style=" font-size: small;">
                    <input class="form-control" type="date" placeholder="Quand ?" name="date_arrivee" />
                    <input class="form-control" type="date" placeholder="Quand ?" name="date_depart" />
                </div>
                <br>
                    <div class="form-group">
                        <label for="nbr_chambre">Nombre de chambre</label>
                        <select class="form-control" name="nbr_chambre" id="nbr_chambre">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                        </select>
                    <br />
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg" style="float: right;">Rechercher</button>
                </div>
            </form>
        </div>
        <?php
       ?>
    </div>
<?php
$allGites = new GitesModels();
$allGites->getAllGites();




