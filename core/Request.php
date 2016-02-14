
<?php
	
	class Request {

		// public $post;
		public $req_uri;

		public function __construct(){
			// $this->post = $this->get_post();
			$this->req_uri = $this->get_request_uri();
		}

		// postデータを格納する
		public function get_post($name, $default = null) {
			// var_dump($_POST);
			if(isset($_POST[$name])){
				return $_POST[$name];
			}
			return $default;
		}

		public function get_host(){
			if(!empty($_SERVER['HTTP_HOST'])){
				return $_SERVER['HTTP_HOST'];
			}
			return $_SERVER['SERVER_NAME'];
		}

		// リクエストuri取得
		// TODO エスケープ 正規表現のがいいかも？
		public function get_request_uri(){
			$uri = $_SERVER["REQUEST_URI"];
			$result_uri = str_ireplace('/', '', $uri);
			return $result_uri;
		}

	}