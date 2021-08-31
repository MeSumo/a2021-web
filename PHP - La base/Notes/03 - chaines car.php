<?php
	$mot = "Lorem ipsum sin dolori";
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Les chaînes</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Mot : <?= $mot ?> </h1>
		<div>Longueur : <?= strlen($mot) ?> </div>
		<div>Position orem : <?= strpos($mot, "orem") ?> </div>
		<!-- str_replace(old word, new word, from variable) -->
		<div>Remplacer : <?= str_replace("orem", "ogique", $mot) ?> </div>
		<!-- a partir de l'index 1, t'en prend 4 -->
		<div>Substring : <?= substr($mot, 1, 4) ?> </div>
	</body>
</html>







