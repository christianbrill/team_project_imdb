<p>Eodem tempore etiam Hymetii praeclarae indolis viri negotium est actitatum, cuius hunc novimus esse textum. cum Africam pro consule regeret Carthaginiensibus victus inopia iam lassatis, ex horreis Romano populo destinatis frumentum dedit, pauloque postea cum provenisset segetum copia, integre sine ulla restituit mora.
</p>
<form action="catalog.php" method="get">
	<input type="search" name="search" placeholder="Recherche" value="<?= isset($search) ? $search : '' ?>">
	<input type="submit" value="Ok">
</form>
<ul>
	<!-- We're using a foreach loop to populate the unordered list -->
	<?php foreach($infoCategories as $category) : ?>
		<li>
			<a href="catalog.php"><?= $category['cat_title'] ?> (
				<?php foreach($totalCategories as $number){ 
					echo $number;
				} ?>
			)
			</a>
		</li>
	<?php endforeach; ?>
</ul>
