<?php

include_once './views/partials/header.php';
require './Models/GitesModels.php';
$gite = new GitesModels();

?>

    <div class="container mt-5 col-lg-4">
        <form action="ajouter_gite.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="Nom du gite">Nom Du Gite</label>
                <input type="text" class="form-control" name="nom_gite">
            </div>
            <div class="form-group">
                <label for="Description" class="form-label">Description</label>
                <textarea class="form-control" name="description_gite" rows="3"></textarea>
            </div>
            <div>
                <label for="image">Ajouter Image</label>
                <br>
                <input type="file" name="img_gite">
            </div>
            <div class="form-group">
                <label for="prix" class="form-label">Prix</label>
                <input type="number" class="form-control" name="prix">
            </div>
            <div class="form-group">
                <label for="nbr_chambre" class="form-label">Nbr de chambre</label>
                <select class="form-control" name="nbr_chambre">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nbr_sdb" class="form-label">Nbr de sdb</label>
                <select class="form-control" name="nbr_sdb">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
                <div class="form-group">
                    <label for="disponible">Disponibilit√©</label>
                    <select name="disponible" class="form-control" id="disponible">
                        <option value="0">OUI</option>
                        <option value="1">NON</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="zone_geo">Zone</label>
                    <select name="zone_geo" class="form-control" id="zone_ge">
                        <option>01 - Ain - Bourg-en-bresse</option>
                        <option></option>
                        <option>02 - Aisne - Laon</option>
                        <option></option>
                        <option>03 - Allier - Moulins</option>
                        <option></option>
                        <option>04 - Alpes-de-Haute-Provence - Digne-les-bains</option>
                        <option></option>
                        <option>05 - Hautes-alpes - Gap</option>
                        <option></option>
                        <option>06 - Alpes-maritimes - Nice</option>
                        <option></option>
                        <option>07 - Ard√®che - Privas</option>
                        <option></option>
                        <option>08 - Ardennes - Charleville-m√©zi√®res</option>
                        <option></option>
                        <option>09 - Ari√®ge - Foix</option>
                        <option></option>
                        <option>10 - Aube - Troyes</option>
                        <option></option>
                        <option>11 - Aude - Carcassonne</option>
                        <option></option>
                        <option>12 - Aveyron - Rodez</option>
                        <option></option>
                        <option>13 - Bouches-du-Rh√īne - Marseille</option>
                        <option></option>
                        <option>14 - Calvados - Caen</option>
                        <option></option>
                        <option>15 - Cantal - Aurillac</option>
                        <option></option>
                        <option>16 - Charente - Angoul√™me</option>
                        <option></option>
                        <option>17 - Charente-maritime - La rochelle</option>
                        <option></option>
                        <option>18 - Cher - Bourges</option>
                        <option></option>
                        <option>19 - Corr√®ze - Tulle</option>
                        <option></option>
                        <option>2A - Corse-du-sud - Ajaccio</option>
                        <option></option>
                        <option>2B - Haute-Corse - Bastia</option>
                        <option></option>
                        <option>21 - C√īte-d'Or - Dijon</option>
                        <option></option>
                        <option>22 - C√ītes-d'Armor - Saint-brieuc</option>
                        <option></option>
                        <option>23 - Creuse - Gu√©ret</option>
                        <option></option>
                        <option>24 - Dordogne - P√©rigueux</option>
                        <option></option>
                        <option>25 - Doubs - Besan√ßon</option>
                        <option></option>
                        <option>26 - Dr√īme - Valence</option>
                        <option></option>
                        <option>27 - Eure - √Čvreux</option>
                        <option></option>
                        <option>28 - Eure-et-loir - Chartres</option>
                        <option></option>
                        <option>29 - Finist√®re - Quimper</option>
                        <option></option>
                        <option>30 - Gard - N√ģmes</option>
                        <option></option>
                        <option>31 - Haute-garonne - Toulouse</option>
                        <option></option>
                        <option>32 - Gers - Auch</option>
                        <option></option>
                        <option>33 - Gironde - Bordeaux</option>
                        <option></option>
                        <option>34 - H√©rault - Montpellier</option>
                        <option></option>
                        <option>35 - Ille-et-vilaine - Rennes</option>
                        <option></option>
                        <option>36 - Indre - Ch√Ęteauroux</option>
                        <option></option>
                        <option>37 - Indre-et-loire - Tours</option>
                        <option></option>
                        <option>38 - Is√®re - Grenoble</option>
                        <option></option>
                        <option>39 - Jura - Lons-le-saunier</option>
                        <option></option>
                        <option>40 - Landes - Mont-de-marsan</option>
                        <option></option>
                        <option>41 - Loir-et-cher - Blois</option>
                        <option></option>
                        <option>42 - Loire - Saint-√©tienne</option>
                        <option></option>
                        <option>43 - Haute-loire - Le puy-en-velay</option>
                        <option></option>
                        <option>44 - Loire-atlantique - Nantes</option>
                        <option></option>
                        <option>45 - Loiret - Orl√©ans</option>
                        <option></option>
                        <option>46 - Lot - Cahors</option>
                        <option></option>
                        <option>47 - Lot-et-garonne - Agen</option>
                        <option></option>
                        <option>48 - Loz√®re - Mende</option>
                        <option></option>
                        <option>49 - Maine-et-loire - Angers</option>
                        <option></option>
                        <option>50 - Manche - Saint-l√ī</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="date_arrivee">Date d'arriv√©e : </label>
                    <input type="date" id="date_arrivee" name="date_arrivee">
                </div>

                <div class="form-group">
                    <label for="date_depart">Date de d√©part : </label>
                    <input type="date" id="date_depart" name="date_depart">
                </div>

                <div class="form-group">
                    <label for="type_gite" class="form-label">Type gite</label>
                    <select class="form-control" name="type_gite">
                        <option value="1">Maison</option>
                        <option value="2">Villa</option>
                        <option value="3">Appartement</option>
                        <option value="4">Chalet</option>
                        <option value="5">Camping</option>
                        <option value="6">Hotel</option>
                        <option value="7">Igloo</option>
                        <option value="8">Yourt</option>
                    </select>
                </div>
                <button name="validateadd" type="submit" class="btn btn-primary">Ajouter</button>

        </form>
    </div>


<?php



if(isset($_FILES['img_gite'])){
    $uploaddir = 'assets/img/';
    $img_gite = $uploaddir . basename($_FILES['img_gite']['name']);
    $_POST['img_gite'] = $img_gite;
    if(move_uploaded_file($_FILES['img_gite']['tmp_name'], $img_gite)){

        echo '<p class="alert-success">Le fichier est valide et √† √©t√© t√©l√©charg√© avec succ√®s !</p>';
    }else{
        echo '<p class="alert-danger">Une erreur s\'est produite, le fichier n\'est pas valide !</p>';
    }
}else{
    echo "<p class='alert-warning p-2'>Merci de respecter le format d'image valide : png, svg, jpg, jpeg, webp !</p>";
}

if(isset($_POST['validateadd'])){
    $gite->createGite();
    echo 'button pushed';
}

include_once './views/partials/footer.php';

?>