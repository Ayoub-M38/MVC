<?php

include_once './views/partials/header.php';
require './Models/GitesModels.php';

$allGites = new GitesModels();
$allGites->getAllGites();



include_once './views/partials/footer.php';