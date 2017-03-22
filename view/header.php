<!-- Ici on détermine à quoi ressemblera le header qui se répétera sur toutes les pages -->
<!DOCTYPE html>
<html>
	<head>
		<title>Team Projet IMDb</title>
		<!-- Le meta charset permet de visualiser les accents, charactères spéciaux, etc. -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Latest compiled and minified CSS for Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Stylesheet -->
		<link rel="stylesheet" href="./css/reset.css">
		<link rel="stylesheet" href="./css/normalize.css">
		<link rel="stylesheet" href="./css/main.css">

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Roboto" rel="stylesheet">
	</head>
	<!-- Début du body (ce qui est "visible" sur la page) -->
	<body>
		<!-- Nous ouvrons une balise nav pour y mettre notre navigation (une liste de liens non-ordonnés, unordened list) ainsi que la barre de recherche -->
		<nav>
			<ul>
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="categories.php">Categories</a>
				</li>
				<li>
					<a href="addmovie.php">Add a Movie</a>
				</li>

				<li id="searchbox">
					<form action="catalog.php" method="get">
						<input type="search" name="search" placeholder="Search" value="<?= isset($search) ? $search : '' ?>">
						<input type="submit" value="OK">
					</form>
				</li>
			</ul>
		</nav>
