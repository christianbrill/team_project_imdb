<?php
require dirname(dirname(__FILE__)).'/inc/config.php';

$infoCategories = infoCategories();

$totalCategories = totalCategories();


var_dump($totalCategories);

//=====================================
// FILE INCLUSION
//=====================================
include dirname(dirname(__FILE__)).'/view/header.php';
include dirname(dirname(__FILE__)).'/view/home.php';
include dirname(dirname(__FILE__)).'/view/footer.php';
