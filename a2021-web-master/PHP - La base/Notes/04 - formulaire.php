<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Les formulaires</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			// ou $_POST["..."] si on est en method="post"
			// if (isset($_GET["info"]) && strlen($_GET["info"]) > 0) {
			if (!empty($_GET["info"])) {
				?>
				<div style="color:blue">Bonjour toi!</div>
				<?php
			}
		?>
		<form action="" method="get">
			<div>
				Info : <input type="text" name="info" />
			</div>
			<div>
				<input type="submit" value="Go!" />
			</div>
		</form>
	</body>
</html>







