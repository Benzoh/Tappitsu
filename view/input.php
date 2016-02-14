<?php
	// 生成済み画像の消去
	if (file_exists(FILENAME)) {
		unlink(FILENAME);
	}
?>

<section>
<h3 class="js-point">Input / 入力</h3>
<div class="m-attention">
	<p style="color:red; font-size:2.0rem;">現在使える字は、ひらがなの濁点なしのみです。すみません。<br>きっとそのうち徐々に追加していくかもしれません。</p>
</div>
<div class="m-content">
	<div class="m-form">
		<form action="" method="post">
			<ul>
				<li>
					TEXT: <input type="text" name="text" size="40" value="<?php if($_POST) { echo $_POST['text']; } ?>"><br />
					<!-- TEXT: <br>
					<textarea name="text" size="40"><?php // if($_POST) { echo $_POST['text']; } ?></textarea><br /> -->
					※10文字まで（五文字で改行が入ります）
				</li>
				<li>
					CLASS: <input type="text" name="gakunen" value="<?php if($_POST) { echo $_POST['gakunen']; } ?>"><br>
					※5文字まで
				</li>
				<li>
					NAME: <input type="text" name="name" value="<?php if($_POST) { echo $_POST['name']; } ?>"><br>
					※5文字まで
				</li>
			</ul>
			<p>STARTを押して達筆を作成</p>
			<input class="button" type="submit" name="start" value="<?php echo STARTBUTTON; ?>">
			<!-- <a href="/tappitsu">TAPPITSU</a> -->
		</form>
	</div>
	<div class="m-layout">
		<h4>レイアウト例</h4>
		<img src="../_assets/ex-tappitsu.png" alt="レイアウト例画像">
		<div class="m-layout_text">
			<ul>
				<li>TEXTに本文</li>
				<li>CLASSに○年○組とか</li>
				<li>NAMEに名前など</li>
				<!-- <li>レイアウトの説明イレ</li> -->
			</ul>
		</div>
	</div>
</div>
</section>
