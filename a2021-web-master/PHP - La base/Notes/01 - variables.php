<?php 
	echo '123';
	// ctrl+é
	// phpt = php tags
	#
	// 
	/* */

	$username = 3;
	$username = 0; //"John";

	if ($username === "John") {
		$username = $username . " Smith";
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
			<!-- phpe -->
			<?= $username ?>
		</h1>
		Nom : <?php
			echo $username;
		?>
	</body>
</html>







