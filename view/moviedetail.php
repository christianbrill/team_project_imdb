<main>
    <div id="flexbox">
        <div id="imageSection">
            <img id="poster" src="<?= $thisMovieInfo['mov_poster']?>" alt="<?= $thisMovieInfo['mov_title']?> Poster">
            <p id="releaseYear">Released: <?= $thisMovieInfo['mov_year']?></p>
            <p id="support">Support: <?= $thisMovieInfo['sup_name']?></p>
        </div>

        <div id="movieInfo">
            <a href="<?= $thisMovieInfo['mov_path']?>">
                <h2><?= $thisMovieInfo['mov_title']?></h2>
            </a>
            <h3><?= $thisMovieInfo['cat_title']?></h3>
            <p id="synopsis"><?= $thisMovieInfo['mov_info']?></p>
            <p id="actors">Actors: <?= $thisMovieInfo['mov_actors']?></p>
            <p id="path">Path: <?= $thisMovieInfo['mov_path']?></p>
        </div>
    </div>
</main>
