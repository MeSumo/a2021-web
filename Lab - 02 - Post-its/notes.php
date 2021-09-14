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
    <div><H2>List Memos:</H2></div>
    <?php
        foreach($data["notes"] as $memos) {
        ?>
            <div><?= $memos ?></div>
        <?php
        }
        /*foreach($_SESSION["note"] as $memos) {
            ?>
                <div><?= $memos ?></div>
            <?php
        }*/
    ?>
    <div><a href="index.php">Acceuil</a></div>
</body>
</html>