
<?php

	// パラメータから次のページを指定
	class Render {

		// public $file;
		// public $file_name;

		// public function __construct(){
		// 	$this->file_name = $this->render($param);
		// 	$this->file = $this->inc($this->file_name);
		// }

		// 読み込むファイルを指定する
		public function render($param = '/'){
			// echo 'check';
			$file_name = $param;
			// var_dump('$file_name→' . $file_name);
			return $file_name;
		}

		// インクルードするファイルを指定する
		public function inc_file($file_name){
			// var_dump($file_name);
			if ($file_name === '/' || $file_name !== 'tappitsu'){
				$file = FIRSTPAGE;
			} else {
				// $file = RESULTPAGE;
				$file = 'view/' . $file_name . '.php';
				// $file = $file_name . '.php';
			}
			// var_dump($file);
			return $file;
		}

	}