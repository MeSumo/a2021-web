<?php
    require_once("action/DAO/SpyDAO.php");
    require_once("action/CommonAction.php");

    class IndexAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction(){
            $result = [];
            $counter = 0;
            if(isset($_POST["searchBox"])){
                $result = SpyDAO::searchSpyList($_POST["searchBox"]);
            }

            if(!empty($_SESSION["count"])){
                $counter = $_SESSION["count"];
            }
            $counter++;
            $_SESSION["count"] = $counter;

            return compact("result", "counter");
        }
    }