<?php
	// -> require et include ne peuvent pas appeler le meme fichier deux fois
	// require(); -> require cause erreur si trouve pas le fichier
	// include(); -> include continue le script meme si trouve pas fichier
	// -> once voit une fois et ignore les autres
	// include_once();
	require_once("lib/Utils.php"); // fait un copier-coller du fichier
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Fichiers externes</title>
		<meta charset="utf-8" />
	</head>
	<body>
		Résultat :
	</body>
</html>
