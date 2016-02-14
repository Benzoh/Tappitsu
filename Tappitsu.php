
<?php
	
	// 独自の処理はここに書く
	class Tappitsu extends Application {

		// 画像にテキストを埋め込む
		public function text_on_image($hoge, $fuga, $piyo){
			$img_path = '_assets/bg.png'; // TODO置き換え
			// $img_path = '_assets/bg_image.png';

			// 一時ごとに改行で縦書きに変更
			$text_len = mb_strlen($hoge, 'UTF-8');
			// var_dump($text_len);
			$chunked = array();
			for ($i = 0; $i < $text_len; $i ++){
				$chunked[] = mb_substr($hoge, $i, 1, 'UTF-8');
			}
			// var_dump($chunked);

			// もし5文字以上だった場合、配列を2つに分ける
			if(isset($chunked[5])){
				// echo 'ある';
				$test = array_chunk($chunked, 5, true);
				// var_dump($test[0]);
				$chunked = $test[0];
				// var_dump($chunked);
				$chunked_right = $test[0];
				$chunked_left = $test[1];

				$hoge_right = join(PHP_EOL, $chunked_right);
				$hoge_left = join(PHP_EOL, $chunked_left);
			} else {
				$hoge = join(PHP_EOL, $chunked);
			}

			// ネタ <br>では駄目！！ http://neoinspire.net/archives/305#.VoBuDpOLSEI
			// var_dump($hoge);


			// ---
			$text_len = mb_strlen($fuga, 'UTF-8');
			$chunked = array();
			for ($i = 0; $i < $text_len; $i ++){
				$chunked[] = mb_substr($fuga, $i, 1, 'UTF-8');
			}
			$fuga = join(PHP_EOL, $chunked);
			// ---

			// ---
			$text_len = mb_strlen($piyo, 'UTF-8');
			$chunked = array();
			for ($i = 0; $i < $text_len; $i ++){
				$chunked[] = mb_substr($piyo, $i, 1, 'UTF-8');
			}
			$piyo = join(PHP_EOL, $chunked);
			// ---

			// TODO メインの文字以外の設置

			$add_image = imagecreatefrompng($img_path);
			// $text_color = ImageColorAllocate($add_image, 0, 0, 0);

			$font = '_assets/fonts/_hiragana.ttf';
			// $font = '_assets/okuribito.ttf';
			$white = imagecolorallocate($add_image, 10, 10, 10);

			// TODO 文字の位置 分岐かけて調整
			if(isset($chunked_right)){
				imagettftext($add_image, 120, 0, 510, 180, $white, $font, $hoge_right);
				imagettftext($add_image, 120, 0, 250, 260, $white, $font, $hoge_left);
			} else {
				imagettftext($add_image, 120, 0, 300, 200, $white, $font, $hoge);
			}
			imagettftext($add_image, 48, 0, 20, 420, $white, $font, $fuga);
			imagettftext($add_image, 48, 0, 20, 770, $white, $font, $piyo);

			imagepng($add_image, FILENAME);
			echo '<img src="' . FILENAME . '">';
			imagedestroy($add_image);
		}

		// エージェント判定

		public function is_smaho(){
			$ua = $_SERVER['HTTP_USER_AGENT'];
			if (strpos($ua, 'iphone')){
				// echo '!!!';
				$sp_flg = true;
			} else {
				$sp_flg = false;
				// echo '???';
			}
			return $sp_flg;
		}


	}


























