<?php
	require_once("action/CommonAction.php");

	class LoginAction extends CommonAction{

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {
			$hasConnectionError = false;

			if (isset($_POST["username"]) && isset($_POST["pwd"])) {
				if($_POST["username"] === "john" && $_POST["pwd"] === "qwerty"){
					$_SESSION["username"] = $_POST["username"];
					$_SESSION["visibility"] = 1;
					header("location:admin-index.php");
					exit;
				}
				else {
					$hasConnectionError = true;
				}
			}

			return compact("hasConnectionError");
		}
	}