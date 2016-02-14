
<?php

	// 文字変換した物をここで表示
	// var_dump($_POST);
	$view = new View;
	$app = new Tappitsu;
	// $text = $view->escape($_POST['text']);

?>
<section>
<h3>Result / 達筆</h3>
<div class="m-content tappitsu">
	<?php // echo $view->escape($_POST['text']); ?><br>
	<?php // echo $view->escape($_POST['gakunen']); ?><br>
	<?php // echo $view->escape($_POST['name']); ?><br>

	<?php
		$text = $view->escape($_POST['text']);
		$class = $view->escape($_POST['gakunen']);
		$name = $view->escape($_POST['name']);

		// $app->text_to_image($text, $class, $name);

		// include 'debug.php';

		$app->text_on_image($text, $class, $name);
	?>

	<?php if($text !== ''): ?>
	<br><br>
	<p>画像をダウンロードする。</p>
	<form action="../include/download.php" method="post">
		<button class="button" type="submit" name="download" value="download">DOWNLOAD</button>
	</form>
	<?php else: ?>
		<p style="font-size:18px; color:#ff0000;">文字を打ち込んでからSTARTを押してください。</p>
	<?php endif; ?>


	<br><br>
	<a class="return" href="../">戻る</a>

</div>
</section>