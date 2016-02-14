<?php

	// ダウンロード
	// public function download(){

		include_once '../config.php';

		$download_file = FILENAME;

		if (file_exists('../' . $download_file)){
			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename="tappitsu.png"'); // TODO
			header('Expires: 0');
			header('Cache-Control:must-revalidate');
			header('Pragma: public');
			header('Content-Length: ' . filesize('../' . $download_file));
			ob_end_clean();
			readfile('../' . $download_file);
			// echo file_get_contents('../' . $download_file);
			exit;
		} else {
			echo '先に達筆を作成して下さい。';
		}
		
	// }