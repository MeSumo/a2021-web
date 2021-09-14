<?php
    function execute() {
        $hasConnectionError = false;
        $email = "";

        if (!empty($_POST["champCourriel"])) {
            $email = $_POST["champCourriel"];

            if ($email == "test@test.com" && $_POST["champMotDePasse"] == "test") {
                // yé!
                header("location: private.php");
                exit;
            }
            else {
                // oh no...
                $hasConnectionError = true;
            }
        }

        return compact("hasConnectionError", "email");
    }
