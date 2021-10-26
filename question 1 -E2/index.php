<?php
	require_once("action/indexAction.php");

	$action = new IndexAction();
	$data = $action->execute();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Match CVM</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/global.css">
	<script src="js/jquery-2.1.0.min.js"></script>
	<script src="js/javascript.js"></script>
</head>
<body>
	<header>
		<h1 class="title">Match CVM, ça vaut ce que ça vaut!</h1>
		<div class="logo"></div>
	</header>
	<div class="container">

		<div class="match-picture">
			<img src="" id="image">
		</div>
		<div class="match-name">--</div>

		<div class="field-section">
			<div>Entrez un champ d'intérêt et appuyez sur la touche &lt;&lt;entrée&gt;&gt;</div>
			<input type="text" id="field" onkeyup="checkField(event)" />
		</div>

	</div>
</body>
</html>