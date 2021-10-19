<?php
    require_once("action/ajaxAction.php");

    $action = new AjaxAction();
    $data = $action->execute();


    echo $data["result"];