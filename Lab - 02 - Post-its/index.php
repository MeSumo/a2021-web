<?php
	require_once("action/indexAction.php");

	$data = execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Post-its</title>
	<script src="https://notes-de-cours.com/dev/toggle-lab-info.js"></script>
</head>
<body>

	<div>
		<form action="" method="POST">
			<div>New memo : </div>
			<div><input name="memo" /></div>
			<div>X : </div>
			<div><input name="champx" /></div>
			<div>Y : </div>
			<div><input name="champy" /></div>
			<div><button>ADD</button></div>
			<a href="notes.php">List memos</a>
			<a href="delete.php">Delete</a>
		</form>

	</div>
	<footer>
		<div>
			<h3>Post-its (les sessions en PHP)</h3>
			<div>
				Faire un formulaire qui permet de sauvegarder des petites notes. Celes-ci seront affichées sur des <a href="images/result1.png">post-its</a>. Il doit être possible aussi de :
			</div>
			<ul>
				<li>Effacer la liste de notes</li>
				<li>Afficher les notes sous forme de <a href="images/result2.png">liste</a></li>
			</ul>
			<div>Étapes:</div>
			<ol>
				<li>Faire un formulaire avec 3 champs: texte, x et y</li>
				<li>
					Lorsque le formulaire est envoyé, faire en sorte que PHP sauvegarde les informations dans une variable de session (un tableau)<br><br>
					Pseudocode de l'action:
					<code class="footer-code-block">
						1- Si le tableau de post-its n'existe pas en session, le créer

						2- S'il y a des données de formulaire, alors
						2.1- Créer un tableau de 3 éléments (pour le texte, le x et le y spécifiés dans le formulaire)
						2.2- Ajouter ce tableau dans le tableau de post-its (voir étape 1)
					</code>
				</li>
				<li>Faire afficher les post-its qui sont sauvegardés en session via une boucle</li>
				<li>Faire l'autre affichage (dans une autre page Web), puis la fonctionnalité de suppression</li>
			</ol>
		</div>
	</footer>
</body>
</html>