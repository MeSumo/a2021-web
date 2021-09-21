<?php
	require_once("action/loginAction.php");

    $action = new LoginAction();
	$data = $action->execute();
    $data["pageName"] = "Log in";

	require_once("partial/header.php");
?>
<div>
    <form action="login.php" method="post">
        <?php
            if ($data["hasConnectionError"]) {
                ?>
                <div style="color:red;background-color:pink;">Erreur: Connexion erronée</div>
                <?php
            }
        ?>
        <div>
            <label for="username">Nom d'usager : </label>
        </div>
        <div>
            <input type="text" name="username" id="username" />
        </div>
        <div>
            <label for="password">Mot de passe : </label>
        </div>
        <div>
            <input type="password" name="pwd" id="password" />
        </div>
        <div>
            &nbsp;
        </div>
        <div>
            <button type="submit">Connexion</button>
        </div>
    </form>
</div>
<?php
	require_once("partial/footer.php");