
<?php

	// ここからすべてを割り振り
	include 'boot.php';
	include 'config.php';
	include 'Tappitsu.php';

	$app = new Tappitsu;

	// var_dump($app->request->req_uri);
	$result_uri = $app->request->req_uri;
	// var_dump($result_uri);


	$param = $app->router->compile_routes($result_uri);
	// var_dump('<br>$param→', $param);

	// uriからvalue取得してサーチ判定 // TODO
	$search_word = STARTBUTTON;
	if(strpos($param, $search_word)){
		// echo 'match';
		$strpos_result = true;
	} else {
		// echo 'not match';
		$strpos_result = false;
	}

	$file_name = $app->render->render($param);
	// var_dump($file_name);
	$file = $app->render->inc_file($file_name);
	// var_dump($file);

	$test = $app->request->get_post('start');

	// TODO だいぶ強引に書いてるので調整

	// 文字数のバリデーションとインクファイル設定
	if($_POST){
		$strlen_class = mb_strlen($_POST['gakunen']);
		$strlen_name = mb_strlen($_POST['name']);
		$strlen = mb_strlen($_POST['text']);
		// var_dump($strlen);
		if ($strlen <= 30){
			if($strlen === 0){
				echo '<div class="valid wrap"><p>文字を入力して下さい。</p></div>';
			} else if($strlen_class > 15){
				echo '<div class="valid wrap"><p>5文字以内で入力して下さい。</p></div>';
			} else if($strlen_name > 15){
				echo '<div class="valid wrap"><p>5文字以内で入力して下さい。</p></div>';
			} else if($test === 'START'){
				$file = RESULTPAGE;
			}
		} else {
			echo '<div class="valid wrap"><p>10文字以内で入力して下さい。</p></div>';
		}
	}
	// var_dump('<br>$strlen→', $strlen);
	// 出力位置調整

	// ビュー呼び込み
	include 'view/base.php';


