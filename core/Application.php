
<?php

	abstract class Application {

		public $request;
		public $router;
		public $render;
		public $view;
		// protected $request;

		public function __construct(){
			$this->initialize();
		}

		protected function initialize() {
			$this->request = new Request();
			$this->router = new Router();
			$this->render = new Render();
			$this->session = new Session();
			$this->view = new View();
		}

		// echoするコンテンツを設定
		public function set_content($file) {
			ob_start();
			include $file;
			// echo '<h2>Input</h2>';
			$content = ob_get_contents();
			// $test_buff = str_replace('Input', $test_buff);
			ob_end_clean();
			// var_dump($test_buff);
			return $content;
		}

	}