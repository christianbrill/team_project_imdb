<?php

// this function will allow us to select all the available movie information in the database
function getInfo($search='') {
    global $pdo;

    $movieInfoSelect = '
        SELECT mov_title, mov_info, mov_path, cat_title, mov_poster
        FROM movie
        INNER JOIN categories ON categories.cat_id = movie.categories_cat_id
        /*INNER JOIN support ON support.sup_id = movie.support_cat_id*/
    ';

    //displaying the search
    if (!empty($search)) {
        //$displayPagination = false;
        $movieInfoSelect .= '
            WHERE mov_title LIKE :search
            OR cat_title LIKE :search
            OR mov_info LIKE :search
            OR mov_path LIKE :search
        ';
    }

    $request = $pdo->prepare($movieInfoSelect);

    if (!empty($search)) {
        $request->bindValue(':search', '%'.$search.'%', PDO::PARAM_STR);
    }

    if ($request->execute() === false ) {
        print_r( $pdo->errorInfo() );
    } else {
        $movieInfo = $request->fetchAll(PDO::FETCH_ASSOC);
        return $movieInfo;
    }

    return false;
   
} // function selectMovieInfo end
