<?php
    function execute(){
        $data = file_get_contents("data/results.txt");
        $lines = explode("\n", $data); // tableau de lignes

        return compact("lines");
    }
?>