<?php
    session_start();

    function execute() {
        session_unset();
        session_destroy();
        $notes = [];

        return compact("notes");
    }