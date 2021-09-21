<?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/StatsDAO.php");

    class IndexAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            $hasConnectionError = false;

            /*if(!empty($_SESSION["inscrit"])){
                $hasConnectionError = true;
            }*/
            if(isset($_POST["name"]) && isset($_POST["type"])){
                $result = StatsDAO::save($_POST["name"], $_POST["type"]);

                if(!empty($result)){
                    $_SESSION["inscrit"] = $result;
                }
                else{
                $hasConnectionError = true;
                }
            }

            return compact("hasConnectionError");
        }
    }