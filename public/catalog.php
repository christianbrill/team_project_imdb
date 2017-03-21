<?php

// access to config file
require dirname(dirname(__FILE__)).'/inc/config.php';


//creates the page offset
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$nbPerPage = 2;
$offset = ($page - 1) * $nbPerPage;

//get the searched value
$searchWord = isset($_GET['search']) ? trim($_GET['search']) : '';

//function to get sql result
$movieInfo = infoAllMovies($searchWord, $nbPerPage, $offset);


//=====================================
// FILE INCLUSION
//=====================================
include dirname(dirname(__FILE__)).'/view/header.php';
include dirname(dirname(__FILE__)).'/view/catalog.php';
include dirname(dirname(__FILE__)).'/view/footer.php';
