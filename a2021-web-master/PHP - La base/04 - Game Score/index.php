<?php
    require_once("action/indexAction.php");
    $data = execute();

    require_once("partial/header.php");
?>
<div class="game-container">
    <canvas width="960" height="576"></canvas>

    <div class="save-form-section">
        <form action="" method="post">
            <input type="hidden" name="time" id="time-field" value="">
            <button>Enregistrer</button>
        </form>
    </div>
</div>
<?php
    require_once("partial/footer.php");