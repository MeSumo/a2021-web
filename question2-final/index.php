<?php
	require_once("action/IndexAction.php");

	$action = new IndexAction();
	$data = $action->execute();

	$pageTitle = "Accueil";
	require_once("partial/header.php");
?>
	<div class="container">
		<table id="table">
			<tr>
				<th>Date</th>
				<th>Gagnant</th>
				<th>Perdant</th>
			</tr>

		</table>
		<div class="btn-container">
			<button id="suivant" onclick="changePage()">
				Suivant &gt;&gt;
			</button>
		</div>
	</div>
<?php
	require_once("partial/footer.php");