<!-- CONTROLEUR -->
<?php
    function execute(){
        $hasConnectionError = false;
        $email = "";

        if(!empty($_POST["champCourriel"])){
            $email = $_POST["champCourriel"];
            if($email == "test@test.com" && $_POST["champMotDePasse"] == "test"){
                header("location: private.php");
                exit;
            }
            else {
                $hasConnectionError = true;
            }
        }

        // envoie un dictionnaire des variables pour la vue
        return compact("hasConnectionError", "email");
    }
