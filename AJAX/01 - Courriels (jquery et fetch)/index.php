<?php
	require_once("action/IndexAction.php");

	$action = new IndexAction();
	$data = $action->execute();
?>
<!DOCTYPE html>
<html>
	<head>
			<title>Mon engin de courriels</title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="css/global.css">
			<script src="js/jquery.min.js"></script>
			<script>
				const checkEmails = () => {
					let user = "ken";
					let pwd = "AAAaaa111";
					console.log(1)
					$.ajax({
						type : "POST",
						url: "ajax.php",
						data: {
							username : user, // $_POST["username"]
							password : pwd
						}
					}).done(response => {
						response = JSON.parse(response);
						console.log(3)
						console.log(response)
						document.getElementById("contenantCourriels").innerHTML = response
						//document.querySelector(".container");
					})
					console.log(2)
				}

				const fetchEmails = () => {
					let formData = new FormData();
					formData.append("username", "ken");
					formData.append("password", "AAAaaa111");

					fetch("ajax.php", {
						method : "POST",
						credentials : 'include',
						body : formData
					})
					.then(response => response.json())
					.then(response => {
						document.getElementById("contenantCourriels").innerHTML = response
					})
				}
			</script>
	</head>
	<body>
		<div class="container">
			<h1>Mes courriels</h1>

			<p>Vous avez actuellement</p>
			<div id="contenantCourriels">--</div>
			<p>nouveaux courriels.</p>

			<div class="refresh-section">
				<button onclick="fetchEmails()">
					<img src="images/refresh.png" alt="Rafraîchir">
				</button>
			</div>
		</div>
	</body>
</html>
