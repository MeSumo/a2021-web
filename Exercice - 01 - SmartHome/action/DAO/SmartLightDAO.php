<?php

    require_once("action/DAO/Connection.php");

    class SmartLightDAO {

        public static function getLightsStatus() {
            $connection = Connection::getConnection();
            $result = [];

            $statement = $connection->prepare("SELECT * FROM lights");
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $statement->execute();

            while ($row = $statement->fetch()){
                $result[] = [$row["name"], $row["status"]];
            }

            return $result;
            # return $statement->fetchAll();
        }

    }