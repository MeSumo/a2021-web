<!--Format pour php 
	faire phpt pour faire forme php-->
<?php
	echo "123";
	//  ctrl + é -> fait commentaire tout seul 
	# php prend toute forme de commentaire

	$username = 3; // $ -> variable
	$username = "John"; // change type selon valeur

	// si comparaison est de deux types different, transforme valeur
	// pour les rendre meme type
	if ($username === "John"){ // === verifie valeur et le type! 
		// do . instead of + to put together
		// + pour additioner
		$username = $username . " Smith"; // concactoner
	}
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Variables</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>
			<!-- faire phpe pour faire affichage d'une variable -->
			<?= $username ?>
		</h1>
		Nom : <?php
			echo $username;
		?>
	</body>
</html>







