<?php
	$tab = ["Crayon", "Feuille", "Ordi", "type" => "asdf"];
	$tab = json_encode($tab); // structure à string
	echo $tab;
?>
<!DOCTYPE html>
<html>
	<head>
		<title>JSON</title>
		<meta charset="utf-8">
	</head>
	<body>
		<div>
			<script>
				let tmp = '<?= $tab ?>';
				console.log(tmp);
				tmp = JSON.parse(tmp); // decode le JSON
				console.log(tmp);
				let user = {
					username : "Arthax",
					firstName : "Fred",
					lastName : "Thériault",
					teaches : ["DBA", "WEB2", "WEB3"],
					showInfo : function () {
						return this.firstName
					}
				}
				console.log(user.username)
				console.log(user.showInfo())
			</script>
		</div>
	</body>
</html>
