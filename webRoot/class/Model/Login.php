<?php

	if( !class_exists('Utility') ) {
		include(dirname(__FILE__) . '/../Utility.php');
		$Utility = new Utility;
	}
	
	class Login extends Utility {
		
		private $isLoggedIn = false;
		private $userIndex = null;
		
		function __construct() {
			$this->isLoggedIn = false;
			$this->userIndex = null;		
		}		
		
		public function getLoginStatus() {
			return $this->isLoggedIn;
		}
		
		public function getUserIndex() {
			if( $this->isLoggedIn != true ) {
				return false;
			}
			return $this->userIndex;
		}
		
		public function setLoginStatus($loginStatus = false) {
			$this->$loginStatus = $loginStatus;
		}
		
		public function setUserIndex($userIndex = false) {
			$this->$userIndex = $userIndex;
		}
		
	}

?>