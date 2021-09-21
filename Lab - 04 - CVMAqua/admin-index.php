<?php
	require_once("action/adminIndexAction.php");

    $action = new AdminIndexAction();
	$data = $action->execute();
    $data["pageName"] = "Accueil Admin";

	require_once("partial/header.php");
?>
<div>
    <form action="" method="post">
        <textarea name="contentadmin" id="contentmodif" cols="120" rows="25">
            <?php
                foreach($data["content"] as $lines){
                    ?>
                        <?= $lines ?>
                    <?php
                }
            ?>
        </textarea>
        <div>
            <button type="submit">Modifier</button>
        </div>
    </form>
</div>
<?php
	require_once("partial/footer.php");