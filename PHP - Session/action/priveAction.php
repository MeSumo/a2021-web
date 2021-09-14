<?php
	session_start();

	function execute() {
		$cc = "4540 1233 5645 3453";
		$email = null;

		if (!empty($_SESSION["email"])) {
			$email = $_SESSION["email"];
		}
		else {
			header("location:index.php");
			exit();
		}

		return compact("cc", "email");
	}