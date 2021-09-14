<?php
	session_start();

	function execute() {
        $notes = [];

        if (!empty($_SESSION["note"])) {
			foreach($_SESSION["note"] as $oldnotes){
                $notes[] = $oldnotes;
            }
		}
        /*else{
            $_SESSION["note"] = [];
        }*/

        return compact("notes");
    }