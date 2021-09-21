<?php
    class ContentDAO{
        public static function setContent($data){
            file_put_contents("data/content.txt", $data);
        }

        public static function getContent(){
            $content = file_get_contents("data/content.txt");
            $lines = explode("\n", $content);
            return $lines;
        }
    }