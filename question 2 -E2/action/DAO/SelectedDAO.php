<?php
        require_once("action/DAO/Connection.php");

        class SelectedDAO {
            public static function getDate(){
                $connection = Connection::getConnection();

                $statement = $connection->prepare("SELECT NOW()");
                $statement->setFetchMode(PDO::FETCH_ASSOC);
                $statement->execute();

                if($row = $statement->fetch()){
                    $result = $row;
                }

                return $result;
            }

            public static function getNum(){
                $connection = Connection::getConnection();

                $statement = $connection->prepare("SELECT COUNT(*) as num FROM information_schema.tables WHERE table_schema = 'exam_db'");
                $statement->setFetchMode(PDO::FETCH_ASSOC);
                $statement->execute();

                if($row = $statement->fetch()){
                    $result = $row;
                }

                return $result;
            }
        }