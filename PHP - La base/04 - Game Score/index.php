<?php
    require_once("action/indexAction.php");
    $data = execute();
    require_once("partial/header.php");
?>
    <div class="game-container">
        <canvas width="960" height="576"></canvas>

        <div class="save-form-section" id="btn">
            <form action="" method="post" >
                <button>Enregistrer</button>
                <input type="hidden" name="pointage" id="pointage" value=""/>
            </form>
        </div>
    </div>
<?php
    require_once("partial/footer.php");
?>