<?php
    require_once("action/privateAction.php");
    $data = execute();
    //var_dump($data); // comme echo, mais peut afficher meme les trucs difficile

    $data["pageName"] = "Page privée";
    require_once("partial/header.php");
?>
<ul>
    <?php
        foreach($data["spylist"] as $spy){
            ?>
                <li>
                    <?= $spy ?>
                </li>
            <?php
        }
    ?>
</ul>
<?php
    require_once("partial/footer.php");