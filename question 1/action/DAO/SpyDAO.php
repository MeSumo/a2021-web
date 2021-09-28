<?php

	class SpyDAO {
		public static function searchSpyList($search) {
			$spyList = array();
			$spyfound = [];

			$spyList[] = "Ethan Hawk";
			$spyList[] = "James Bond";
			$spyList[] = "Kevin Sarah";
			$spyList[] = "Inspecteur Gadget";
			$spyList[] = "Chuck CarMichael";

			foreach($spyList as $spy){
				if(strpos($spy, $search) !== FALSE){
					$spyfound[] = $spy;
				}
			}

			return $spyfound;
		}
	}