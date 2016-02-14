
<?php

	class Session {

		public $session;

		public function __construct(){
			// $this->session = $this->session_set();
		}

		public function session_set(){
			session_start();
			echo 'session start';
			// return $_SESSION;
		}

	}