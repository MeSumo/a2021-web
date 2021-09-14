<?php
	session_start();

	function execute() {
		$email = null;
		$connectionError = false;

		if (!empty($_SESSION["email"])) {
			$email = $_SESSION["email"];
		}

		if (isset($_POST["courriel"]) && isset($_POST["motDePasse"])) {
			if ($_POST["courriel"] === "test@test.com" &&
				$_POST["motDePasse"] === "test") {

				$email = $_POST["courriel"];
				$_SESSION["email"] = $_POST["courriel"];
			}
			else {
				$connectionError = true;
			}
		}

		return compact("email", "connectionError");
	}