<?php
    require_once("action/CommonAction.php");

    class AjaxAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            $result = "";
            $result = file_get_contents("http://magix.apps-de-cours.com/api/games/log/" . $_POST["page"]);

            return compact("result");
        }
    }