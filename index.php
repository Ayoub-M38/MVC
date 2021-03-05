<?php

require_once './template/header.php';
require 'GitesModels.php';

$allGites = new GitesModels();
$allGites->getAllGites();


