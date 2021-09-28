<?php

class UserDAO {

	/**
	 * Fonction qui retourne true si l'authentification est valide
	 * et false si elle est invalide.
	 */
	public static function authenticate($username, $password) {
		$success = false;

		$adminUsers = file_get_contents("db/user.txt");
		$adminUsers = explode("\n", $adminUsers);

		foreach ($adminUsers as $user) {
			$data = explode(":", $user);

			if ($username === $data[0] && $password === $data[1]) {
				$success = true;
			}
		}

		return $success;
	}

	public static function failedattemps($username){
		$tooMany = false;
		$nb = 0;
		$data = file_get_contents("db/failed.txt");
		$lines = explode("\n", $data);

		foreach($lines as $attemps){
			if($attemps == $username){
				$nb++;
			}
		}

		if($nb >= 5){
			$tooMany = true;
		}

		return $tooMany;
	}
}