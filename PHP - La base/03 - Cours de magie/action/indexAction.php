<?php
    function execute(){
        // prendre la valeur actuelle du compteur
        $counter = file_get_contents("data/counter.txt");
        // incrémenter de 1
        $counter++;
        // sauvegarder le nouveau compteur
        file_put_contents("data/counter.txt", $counter);

        return compact("counter");
    }
?>