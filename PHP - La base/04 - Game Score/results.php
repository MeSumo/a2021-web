<?php
    require_once("action/resultsAction.php");
    $data = execute();
    require_once("partial/header.php");
?>
    <div class="results-container">
        <h1>
            Résultats
        </h1>
        <?php
            foreach($data["lines"] as $line) {
            ?>
                <li><?= $line ?></li>
            <?php
        }
        ?>

    </div>
<?php
    require_once("partial/footer.php");
?>