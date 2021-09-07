<?php
    function execute(){
        if(!empty($_POST["pointage"])){
            $info = "\n" . date("Y-m-d H:i:s", time()) . " - ";
            $info .= ($_POST["pointage"]) . "seconds";
            file_put_contents("data/results.txt", $info, FILE_APPEND);
        }

        return [];
    }
?>