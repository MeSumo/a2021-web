<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/ContentDAO.php");

	class AdminIndexAction extends CommonAction{

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_MEMBER);
		}

        protected function executeAction() {
			$content = ContentDAO::getContent();

			if(!empty($_POST["contentadmin"])){
				ContentDAO::setContent($_POST["contentadmin"]);
				header("location:index.php");
				exit;
			}

            return compact("content");
        }
    }