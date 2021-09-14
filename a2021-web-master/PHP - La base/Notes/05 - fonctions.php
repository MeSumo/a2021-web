<?php
	function hasher($mot, $mot2 = null) {
		$resultat = "";

		if (!empty($mot2)) {
			$mot .= $mot2;
		}

		$resultat = sha1($mot);

		return $resultat;
	}
	// hasher("sadf");
	// hasher("sadf", "asdfsadff");
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Les fonctions</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Création d'un hash</h1>
		<?= hasher("John", "pass123") ?>
	</body>
</html>







