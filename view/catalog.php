<main>
    <!-- <nav>
        <ul>
            <li>
                <select>
                <?php foreach(): ?>
                    <option><?=  ?></option>                
                </select>
                <?php  ?>
            </li>
            <li></li>
        </ul>
    </nav> -->
    <!-- Displays a movie for each matching result -->
    <?php foreach($movieInfo as $movie) : ?>
    <div id="flexboxCat">

        <div id="posterCat">
            <!-- Links poster to detail page -->
            <a href="moviedetail.php?movieId=<?=$movie['mov_id'] ?>">
                <!-- Grabs poster -->
                <img src="<?= $movie['mov_poster'] ?>" alt="<?= $movie['mov_title']?> Poster">
            </a>
        </div>

        <div id="movieInfoCat">
            <!-- Links title to detail page -->
            <a href="moviedetail.php?movieId=<?=$movie['mov_id'] ?>">
                <h3><?= $movie['mov_title'] ?></h3>
            </a>

            <!-- Grabs movie info -->
            <p><?= $movie['mov_info'] ?></p>
        </div>

        <div id="buttonsCat">
            <!-- Links button to detail page -->
            <button type="button" name="details" id="details">
                <a href="moviedetail.php?movieId=<?=$movie['mov_id'] ?>">Details</a>
            </button>
            <!-- Links button to edit page -->
            <button type="button" name="edit" id="edit">
                <!-- Sends movie id to edit page -->
                <a href="editmovie.php?movieId=<?=$movie['mov_id'] ?>">Edit</a>
            </button>
        </div>
    </div>
    <?php endforeach; ?>


<!--     <?php if($page>1): ?>
        <button>
            <a href="?search=<?=$search?>&page=<?= $page-1?>">Previous</a>
        </button>
    <?php endif; ?>

    <?php if ($page*$nbPerPage<totalMovies()): ?>
        <button>
            <a href="?page=<?= $page+1?>">Next</a>
        </button>
    <?php endif; ?> -->

</main>
