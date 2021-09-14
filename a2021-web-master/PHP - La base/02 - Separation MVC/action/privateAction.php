<?php
    function execute() {
        $spyList = [];

        $spyList[] = "Austin Powers";
        $spyList[] = "Ethan Hunt";
        $spyList[] = "James Bond";

        return compact("spyList");
    }