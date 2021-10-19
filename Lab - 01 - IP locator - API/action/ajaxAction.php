<?php
    require_once("action/CommonAction.php");

    class AjaxAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            $result = "";
            if(!empty($_POST["adresseip"])){
                $result = file_get_contents("http://ip-api.com/json/" . $_POST["adresseip"]);
            }
            else{
                $result = "IT NO WORK";
            }

            return compact("result");
        }
    }