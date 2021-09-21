<?php
	require_once("action/indexAction.php");

	$action = new IndexAction();
	$data = $action->execute();
	$data["pageName"] = "Accueil";

	require_once("partial/header.php");
?>
	<div id="page-index">
		<img src="images/water-drop.png" alt= ""/>

		<?php
			foreach($data["content"] as $lines){
				?>
					<?= $lines ?>
				<?php
			}
		?>
	</div>
<?php
	require_once("partial/footer.php");