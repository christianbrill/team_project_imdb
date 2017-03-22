<main>
    <div id="flexbox">
        <div id="imageSection">
            <img id="poster" src="<?= $thisMovieInfo['mov_poster']?>" alt="<?= $thisMovieInfo['mov_title']?> Poster">

            <p id="releaseYear"><span class="spantrait">Released:</span> <?= $thisMovieInfo['mov_year']?></p>
            <p id="support"><span class="spantrait">Support:</span> <?= $thisMovieInfo['sup_name']?></p>
        </div>

        <div id="movieInfo">
            <a href="<?= $thisMovieInfo['mov_path']?>">
                <h2><?= $thisMovieInfo['mov_title']?></h2>
            </a>

            <h3 id="genre"><?= $thisMovieInfo['cat_title']?></h3>

            <p id="synopsis"><?= $thisMovieInfo['mov_info']?></p>
            <p id="actors">
                <span class="spantrait">Actors:</span> <?= $thisMovieInfo['mov_actors']?>
            </p>
            <p id="path">
                <span class="spantrait">Path:</span> <?= $thisMovieInfo['mov_path']?>
            </p>
        </div>
    </div>
</main>
