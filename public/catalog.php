<?php

// access to config file
require dirname(dirname(__FILE__)).'/inc/config.php';

$searchWord = isset($_GET['search']) ? trim($_GET['search']) : '';

$movieInfo = getInfo($searchWord);


//=====================================
// FILE INCLUSION
//=====================================
include dirname(dirname(__FILE__)).'/view/header.php';
include dirname(dirname(__FILE__)).'/view/catalog.php';
include dirname(dirname(__FILE__)).'/view/footer.php';
