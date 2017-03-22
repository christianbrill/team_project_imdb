<?php

// ==============================================
// this function will allow us to select all the
// available movie information in the database
// ==============================================
function infoAllMovies($search='', $nbPerPage=0, $offset=0) {
    global $pdo;

    $movieInfoSelect = '
        SELECT *
        FROM movie
        INNER JOIN categories ON categories.cat_id = movie.categories_cat_id
    ';

    //displaying the search
    if (!empty($search)) {
        $movieInfoSelect .= '
            WHERE mov_title LIKE :search
            OR cat_title LIKE :search
            OR mov_info LIKE :search
            OR mov_path LIKE :search
        ';
    }

    if ($nbPerPage > 0) {
        $movieInfoSelect .= '
            LIMIT '.$nbPerPage.' OFFSET '.$offset.'
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

}


// ==============================================
// All information about one movie
// ==============================================
function infoOneMovie ($movieId){
    global $pdo;

    $oneMovieInfoSelect = '
        SELECT *
        FROM movie
        INNER JOIN categories ON categories.cat_id = movie.categories_cat_id
        INNER JOIN support ON support.sup_id = movie.support_cat_id
    ';


    if (!empty($movieId)) {
        $oneMovieInfoSelect .= ' WHERE mov_id = :movieId';
    }

    $request = $pdo->prepare($oneMovieInfoSelect);

    if (!empty($movieId)) {
        $request->bindValue(':movieId', $movieId, PDO::PARAM_INT);
    }

    if ($request->execute() === false ) {
        print_r( $request->errorInfo() );
    } else {
        $oneMovieInfo = $request->fetch(PDO::FETCH_ASSOC);
        return $oneMovieInfo;
    }

    return false;
}


// ==============================================
// this function counts the available movies
// in the database to calculate the page count
// ==============================================
function totalMovies(){
    global $pdo;
    $oneMovieInfoSelect = '
        SELECT *
        FROM movie
    ';

    $request = $pdo->prepare($oneMovieInfoSelect);

    if ($request->execute() === false ) {
        print_r( $request->errorInfo() );
    }else {
        return $request->rowCount();
    }
    return false;
}



// ==============================================
// this function selects the categories
// ==============================================
function infoCategories() {
    global $pdo;

    $categoryRequest = '
    SELECT *
    FROM category
    LIMIT 4
    ';

    $request = $pdo->prepare($categoryRequest);

    if ($request->execute() === false ) {
        print_r( $pdo->errorInfo() );
    } else {
        $categoryInfo = $request->fetchAll(PDO::FETCH_ASSOC);
        return $categoryInfo;
    }

    return false;
}


// ==============================================
// this function counts the number of categories
// in the database to show on homepage
// ==============================================
function totalCategories(){
    global $pdo;
    $categorySelect = '
        SELECT *
        FROM category
    ';

    $request = $pdo->prepare($categorySelect);

    if ($request->execute() === false ) {
        print_r( $request->errorInfo() );
    }else {
        return $request->rowCount();
    }
    return false;
}
