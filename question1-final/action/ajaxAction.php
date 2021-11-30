<?php
    require_once("action/CommonAction.php");

    class AjaxAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {
            $result = "";
            $result = file_get_contents("https://notes-de-cours.com/dev/exam-api.php");


            return compact("result");
        }
    }