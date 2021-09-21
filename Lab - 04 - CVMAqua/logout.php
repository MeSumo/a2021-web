<?php
	require_once("action/loginAction.php");

    $action = new LogoutAction();
	$data = $action->execute();
    $data["pageName"] = "Log out";

	require_once("partial/header.php");

    ?>
    Vous êtes déconnecté.
    <?php

    require_once("partial/footer.php");
