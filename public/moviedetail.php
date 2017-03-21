<?php

// access to config file
require dirname(dirname(__FILE__)).'/inc/config.php';


// I'm getting the movieId which was sent over from catalog via the URL
$movieId = isset($_GET['movieId']) ? intval($_GET['movieId']) : 0;

// Via the already established function "getInfo", we're making an SQL request to get all the movie information we need
$thisMovieInfo = infoOneMovie($movieId);


//=====================================
// FILE INCLUSION
//=====================================
include dirname(dirname(__FILE__)).'/view/header.php';
include dirname(dirname(__FILE__)).'/view/moviedetail.php';
include dirname(dirname(__FILE__)).'/view/footer.php';
