<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/UserDAO.php");

	class IndexAction extends CommonAction {

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {
			$errorMessage = null;

			if (!empty($_POST["username"]) && !empty($_POST["password"])) {
				$success = UserDAO::authenticate($_POST["username"], $_POST["password"]);

				if(!empty($_SESSION["verrouille"])){
					$errorMessage = "Désolé, le compte est verrouillé";
				}
				else if ($success === true) {
					// Succès de l'authentification.
					// Ne pas modifier cette section.
					header('location:http://www.perdu.com');
					exit;
				}
				else {
					$error = "\n" . $_POST["username"];
					file_put_contents("db/failed.txt", $error, FILE_APPEND);
					$attemps = UserDAO::failedattemps($_POST["username"]);
					if ($attemps === true){
						$errorMessage = "Authentification erronée:le compte est verrouillé";
						$_SESSION["verrouille"] = 1;
					}
					else{
						$errorMessage = "Authentification erronée";
					}
				}
			}

			return compact("errorMessage");
		}

	}
