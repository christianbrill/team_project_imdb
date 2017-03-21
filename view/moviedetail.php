<main>
    <div id="flexbox">
        <div id="imageSection">
            <img id="poster" src="<?= $movieInfo['mov_poster']?>" alt="<?= $movieInfo['mov_title']?> Poster">
            <p id="releaseYear">Released: <?= $movieInfo['mov_year']?></p>
            <p id="support">Support: <?= $movieInfo['sup_title']?></p>
        </div>

        <div id="movieInfo">
            <h2><?= $movieInfo['mov_title']?></h2>
            <h3><?= $movieInfo['cat_title']?></h3>
            <p id="synopsis"><?= $movieInfo['mov_info']?></p>
            <p id="actors">Actors: <?= $movieInfo['mov_actors']?></p>
            <p id="path">Path: <?= $movieInfo['mov_path']?></p>
        </div>
    </div>
</main>
