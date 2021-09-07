<?php
    function execute(){
        $spylist = [];
        $spylist[] = "Austin Powers"; // push
        $spylist[] = "Ethan Hunt";
        $spylist[] = "James Bond";

        return compact("spylist");
    }