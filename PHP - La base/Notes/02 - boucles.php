<?php
	$tab = []; // ou array()
	$tab[] = "Hello"; // push
	$tab[] = "World";

	// affiche "Hello World"
	foreach($tab as $element){
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
			for($i = 0; $i < 10; $i++){
				// fait phpr = contraire de php
				// -> pour sortir du php pour un moment pour faire html
				?>
					<div>
						<input type="radio" name=""> <?= $i ?>
					</div>
				<?php
				/*echo "<div>";
				echo "<input type='radio'>" . $i;
				echo "</div>";*/
			}
		?>
	</body>
</html>







