<main>
    <div id="flexboxCat">
        <div id="posterCat">
            <img src="<?= $movieInfo['mov_poster'] ?>" alt="<?= $movieInfo['mov_title']?> Poster">
        </div>

        <div id="movieInfoCat">
            <h3><?= $movieInfo['mov_title'] ?></h3>
            <p><?= $movieInfo['mov_info'] ?></p>
        </div>

        <div id="buttonsCat">
            <button type="button" name="details" id="details"><a href="#">Details</a></button>
            <button type="button" name="edit" id="edit"><a href="#">Edit</a></button>
        </div>
    </div>
</main>
