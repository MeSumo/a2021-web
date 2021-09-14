<?php
    require_once("action/deleteAction.php");

    $data = execute();

    header("location:index.php");
    exit;
