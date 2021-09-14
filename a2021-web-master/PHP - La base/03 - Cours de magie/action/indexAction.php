<?php
    function execute() {
        // prendre la valeur actuelle du compteur
        // incrémenter de 1
        // sauvegarder le nouveau compteur
        $counter = file_get_contents("data/counter.txt");
        $counter++;
        file_put_contents("data/counter.txt", $counter);

        return compact("counter");
    }