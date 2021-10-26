<?php
	require_once("action/indexAction.php");

	$action = new IndexAction();
	$data = $action->execute();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Question exam</title>
        <meta charset="utf-8">
        <link href="css/global.css" rel="stylesheet" />
    </head>
    <body>
        <div class="clock">
			<h1>
				Base de données
			</h1>
			<div class="result">
				<!-- Mettre le résultat ici -->
				<?php
					if(!empty($data["red"])){
						?>
							<div style="color:red;">
								<?= $data["red"] ?>
							</div>
						<?php
					}
					else {
						echo $data["result"];
					}
				?>
			</div>
			<div class="info">
				<!-- Compléter la balise form -->
				<form action="" method="post">
					<div class="form-line">
						<div>Choix : </div>
						<div>
							<select name="choice">
								<?php
									$tab = ["--", "Nombre de tables", "Date", "Sauvegarder"];
									for($i = 0; $i < 4; $i++){
										if($i == $data["choice"]){
											?>
												<option value=<?= $i ?> selected><?= $tab[$i] ?></option>
											<?php
										}
										else{
											?>
												<option value=<?= $i ?>><?= $tab[$i] ?></option>
											<?php
										}
									}
								?>
							</select>
						</div>
					</div>
					<div class="btn-section">
						<button>Afficher</button>
					</div>
				</form>
			</div>
		</div>
    </body>
</html>