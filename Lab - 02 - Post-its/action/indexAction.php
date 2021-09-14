<?php
	session_start();

	function execute() {
        $notes = [];

        if(!empty($_SESSION["note"])){
            foreach($_SESSION["note"] as $oldnotes){
                $notes[] = $oldnotes;
            }
        }
        else{
            $_SESSION["note"] = [];
        }

        if(!empty($_POST["memo"])){
            $notes[] = ($_POST["memo"]);
            $_SESSION["note"][] = ($_POST["memo"]);
        }

        return compact("notes");
    }