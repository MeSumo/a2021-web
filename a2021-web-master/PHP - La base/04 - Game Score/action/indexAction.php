<?php
    function execute() {
        if (!empty($_POST["time"])) {
            $line = "\n" . date("Y-m-d H:i:s", time()) . " - ";
            $line .= $_POST["time"] . " secondes";

            file_put_contents("data/results.txt", $line, FILE_APPEND);
        }

        return [];
    }