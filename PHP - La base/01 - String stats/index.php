<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>String stats</title>
        <meta charset="utf-8" />
		<link href="css/global.css" rel="stylesheet" />
	</head>
	<body>
		<div>
			<div id="analyze-icon">

			</div>
			<div id="analyze-result">
				<?php
					if(!empty($_GET["searchBox"])){
						echo strlen($_GET["searchBox"]);
					}
					else{
						?>
							Entrez une chaîne de caractères et appuyez sur analyser
						<?php
					}
				?>
			</div>
			<div id="search-line">
				<form action="" method="get">
						<div>
							<input type="text" name="searchBox" placeholder="Texte à analyser" />
						</div>
						<div class="btn">
							<button>Analyser</button>
						</div>
				</form>
			</div>

		</div>
	</body>
</html>