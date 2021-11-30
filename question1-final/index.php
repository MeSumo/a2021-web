<?php
	require_once("action/IndexAction.php");

	$action = new IndexAction();
	$data = $action->execute();

	$pageTitle = "Accueil";
	require_once("partial/header.php");
?>
	<div class="container">
		<h1>Incident 101</h1>
		<div class="map">
			<div class="city" id="no-1" onclick="fixIncident(this)">Montréal</div>
			<div class="city" id="no-2" onclick="fixIncident(this)">Québec</div>
			<div class="city" id="no-3" onclick="fixIncident(this)">Kuujjuaq</div>
			<div class="city" id="no-4" onclick="fixIncident(this)">Rimouski</div>
			<div class="city" id="no-5" onclick="fixIncident(this)">Gatineau</div>
			<div class="city" id="no-6" onclick="fixIncident(this)">Gaspé</div>
			<div class="city" id="no-7" onclick="fixIncident(this)">Chicoutimi</div>
			<div class="city" id="no-8" onclick="fixIncident(this)">Sherbrooke</div>
		</div>
		<div id="cursor-info"></div>
		<div><small>API : https://notes-de-cours.com/dev/exam-api.php</small></div>
	</div>
<?php
	require_once("partial/footer.php");