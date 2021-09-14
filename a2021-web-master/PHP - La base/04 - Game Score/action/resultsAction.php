<?php
    function execute() {
        $results =  explode("\n", file_get_contents("data/results.txt"));

        return compact("results");
    }