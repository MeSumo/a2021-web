<?php
    require_once("action/CommonAction.php");

    class LogoutAction extends CommonAction{

        public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_MEMBER);
		}

        protected function executeAction() {

            return [];
        }
    }

    /*function execute() {
        session_unset();
        session_destroy();
        $email = null;

        return compact("email");
    }*/