
<?php

	class ClassLoader {

		// かなりはしょった。

		public function load_class($dir){
			// echo 'load_classスタート';
			$files = scandir($dir);
			// var_dump($files);
			foreach ($files as $file) {
				if($file === '.' || $file === '..') {
					$load_class = null;
				} else {
					$load_class =  $dir . '/' . $file;
					if (is_readable($load_class)){
						include_once $load_class;
						// echo '<br /><pre>' . $load_class . 'を読み込みました';
					}
				}
			}
			// return $files;
		}


	}