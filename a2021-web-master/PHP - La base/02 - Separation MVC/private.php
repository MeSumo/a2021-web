<?php
    require_once("action/privateAction.php");
    $data = execute();
    // var_dump($data);

    $data["pageName"] = "Page privée";
    require_once("partial/header.php");
?>
	<ul>
        <?php
            foreach($data["spyList"] as $spy) {
                ?>
                <li><?= $spy ?></li>
                <?php
            }
        ?>
    </ul>
<?php
    require_once("partial/footer.php");