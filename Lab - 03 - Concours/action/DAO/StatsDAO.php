<?php
    class StatsDAO{
        public static function save($name, $roomType){
            $inscrit = null;
            $stats = "\n" . $name . ";" . $roomType;
            file_put_contents("data/stats.txt", $stats, FILE_APPEND);
            $inscrit = 1;

            return $inscrit;
        }

        public static function count(){
            $nblines = 0;
            $data = file_get_contents("data/stats.txt");
            $lines = explode("\n", $data);

            foreach($lines as $content){
                $nblines++;
            }

            return $nblines-1;
        }

        public static function countPerRoomType(){
            $countperroomtype = [];
            $nbsimple = 0;
            $nbdouble = 0;
            $nbsuite = 0;
            $data = file_get_contents("data/stats.txt");
            $lines = explode("\n", $data);

            foreach($lines as $content){
                $types = strstr($content, ';');
                if($types == ";Simple"){
                    $nbsimple++;
                }
                else if($types == ";Double"){
                    $nbdouble++;
                }
                else if($types == ";Suite"){
                    $nbsuite++;
                }
            }
            $countperroomtype[] = $nbsimple;
            $countperroomtype[] = $nbdouble;
            $countperroomtype[] = $nbsuite;
            return $countperroomtype;
        }
    }
