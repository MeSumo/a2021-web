<?php
	require_once("action/indexAction.php");

	$action = new IndexAction();
    $data = $action->execute();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Spy Lookup Service</title>
        <meta charset="utf-8" />
		<link href="css/global.css" rel="stylesheet" />
	</head>
	<body>
		<div>
			<div class="search-line">
				<form action="" method="post">
					<div class="form-left">
						<input type="text" name="searchBox" value="" />
					</div>
					<div class="form-right">
						<input type="image" src="images/search-btn.png" />
					</div>
					<div class="clear"></div>

					<div>
						<?php
							foreach($data["result"] as $spy){
								?>
									<ul><?= $spy ?></ul>
								<?php
							}
						?>
					</div>
				</form>

			</div>
		</div>
		<footer>
			Nombre de visites : <?= $data["counter"] ?>
		</footer>
	</body>
</html>