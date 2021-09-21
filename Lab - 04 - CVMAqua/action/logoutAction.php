<?php
    require_once("action/CommonAction.php");
    // require_once("action/DAO/UserDAO.php");

    class LogoutAction extends CommonAction{

        public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
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