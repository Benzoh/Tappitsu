
<?php

	class View {

		public function escape($string){
			// echo 'check!!!!!!!';
			return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
		}

	}