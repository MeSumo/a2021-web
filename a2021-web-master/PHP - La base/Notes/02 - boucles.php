<?php
	$tab = []; // array()
	$tab[] = "Hello"; // push
	$tab[] = "World";

	foreach($tab as $element) {
		echo $element;
	}
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Boucles</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Champs radio</h1>
		<?php
			for ($i = 0; $i < 10; $i++) {
				// phpr = contraire de phpt
				?>
				<div>
					<input type="radio" name=""> <?= $i ?>
				</div>
				<?php
			}
		?>
	</body>
</html>







