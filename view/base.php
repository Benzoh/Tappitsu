
<?php
	// レイアウトをここで設定
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>TAPPITSU.jp(仮) | 入力したテキストを習字っぽい画像に変換します</title>
	<meta name="viewport" content="width=device-width">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script type="text/javascript" src="../_assets/js/common.js"></script>
	<link rel="stylesheet" href="../_assets/css/common.css" media="screen">
	<link rel="stylesheet" href="../_assets/css/font_style.css" media="screen">
</head>
<body>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-42430007-3', 'auto');
	  ga('send', 'pageview');

	</script>
	<div class="wrap">

		<header>
			<h1><a href="/">TAPPITSU.jp(仮)</a></h1>
			<h2><a href="/">入力したテキストを習字っぽい画像に変換します</a></h2>
			<nav>
				<ul class="m-gnavi">
					<li><a href="http://www.start30blog.com/about/" target="_blank">ABOUT</a></li>
					<li><a href="http://www.start30blog.com/contact/" target="_blank">CONTACT</a></li>
				</ul>
			</nav>
		</header>
		<?php
			// コンテンツを表示
			// var_dump($file);
			echo $app->set_content($file);

			// テスト用のコードのインクルード
			// include 'debug.php';

			// include '../include/shere_btn.php';
		?>
		<div class="m-attention">
			<p>仮で：ここで使っているフォントは縦書き用に設定してあるフォントです。</p>
		</div>
		<br>

		<?php if ($app->is_smaho() === false): ?>

		<div class="ads">
	
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- 達筆で使用 -->
			<ins class="adsbygoogle"
			     style="display:inline-block;width:728px;height:90px"
			     data-ad-client="ca-pub-7815961604338808"
			     data-ad-slot="9150074171"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>

		</div>

		<?php else: ?>
		
		<div class="ads">
		
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- 達筆 スマホで使用 -->
			<ins class="adsbygoogle"
			     style="display:inline-block;width:300px;height:250px"
			     data-ad-client="ca-pub-7815961604338808"
			     data-ad-slot="1487206579"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>

		</div>

		<?php endif; ?>

		<?php
			// シェアボタン設置
			// 参考:https://syncer.jp/how-to-setting-share-button
		?>
		<h3>このサイトをシェアする</h3>
		<!-- <p>横幅を狭めると、2行になり、LINEボタンが出現します。LINEボタンの画像は、<a href="https://media.line.me/howto/ja/" target="_blank">公式ウェブサイト</a>よりダウンロードする必要があります。</p> -->

		<!-- シェアボタン [ここからコピー] -->

		<?php
			// URL調整必要
			// $share_url_syncer = "http://192.168.33.111"; //シェア対象のURLアドレスを指定する (HTML部分は変更不要)
			$share_url_syncer = "http://tappitsu.start30blog.com"; //シェア対象のURLアドレスを指定する (HTML部分は変更不要)
		?>

		<div class="social-area-syncer">
			<ul class="social-button-syncer">
				<!-- Twitter [Tweet]の部分を[ツイート]に変更することで日本語仕様になります。 -->
				<li class="sc-tw"><a data-url="<?php echo $share_url_syncer ; ?>" href="https://twitter.com/share" class="twitter-share-button" data-lang="ja" data-count="vertical" data-dnt="true" target="_blank"><svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.375-1.337.648-2.085.795-.598-.638-1.45-1.036-2.396-1.036-1.812 0-3.282 1.468-3.282 3.28 0 .258.03.51.085.75C5.152 5.39 2.733 4.084 1.114 2.1.83 2.583.67 3.147.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.416-.02-.617-.058.418 1.304 1.63 2.253 3.067 2.28-1.124.88-2.54 1.404-4.077 1.404-.265 0-.526-.015-.783-.045 1.453.93 3.178 1.474 5.032 1.474 6.038 0 9.34-5 9.34-9.338 0-.143-.004-.284-.01-.425.64-.463 1.198-1.04 1.638-1.7z" fill="#fff" fill-rule="nonzero"/></svg><span>Tweet</span></a></li>

				<!-- Facebook -->
				<li class="sc-fb"><div class="fb-like" data-href="<?php echo $share_url_syncer ; ?>" data-layout="box_count" data-action="like" data-show-faces="true" data-share="false"></div></li>

				<!-- Google+ -->
				<li><div data-href="<?php echo $share_url_syncer ; ?>" class="g-plusone" data-size="tall"></div></li>

				<!-- はてなブックマーク -->
				<li><a href="http://b.hatena.ne.jp/entry/<?php echo $share_url_syncer ; ?>" class="hatena-bookmark-button" data-hatena-bookmark-layout="vertical-balloon" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><syncer src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border:none;" /></a></li>

				<!-- pocket -->
				<li><a data-save-url="<?php echo $share_url_syncer ; ?>" data-pocket-label="pocket" data-pocket-count="vertical" class="pocket-btn" data-lang="en"></a></li>

				<!-- LINE [画像は公式ウェブサイトからダウンロードして下さい] -->
				<!-- <li class="sc-li"><a href="http://line.me/R/msg/text/?<?php // echo rawurlencode($share_url_syncer); ?>"><img src="./linebutton_36x60.png" width="36" height="60" alt="LINEに送る" class="sc-li-img"></a></li> -->
			</ul>

		<!-- Facebook用 -->
		<div id="fb-root"></div>

		</div>
		<!-- シェアボタン [ここまでコピー] -->
		<!--
			// ブラウザに[$html]の内容を出力
			// 運用時はHTMLのヘッダーとフッターを付けましょう。
			echo $html ;
		-->

		<section class="m-list">
			<h4>ギャラリー</h4>
			<ul>
				<li>
					<div class="img">
						<img src="../_assets/ex-tappitsu.png">
					</div>
					<div class="text">
						<ul>
							<li>いろは<br>いろは</li>
							<li>いろは</li>
							<li>いろは</li>
						</ul>
					</div>
				</li>
				<li>
					<div class="img">
						<img src="../_assets/ex-tappitsu.png">
					</div>
					<div class="text">
						<ul>
							<li>いろは</li>
							<li>いろは</li>
							<li>いろは</li>
						</ul>
					</div>
				</li>
				<li>
					<div class="img">
						<img src="../_assets/ex-tappitsu.png">
					</div>
					<div class="text">
						<ul>
							<li>いろは</li>
							<li>いろは</li>
							<li>いろは</li>
						</ul>
					</div>
				</li>
				<li>
					<div class="img">
						<img src="../_assets/ex-tappitsu.png">
					</div>
					<div class="text">
						<ul>
							<li>いろは</li>
							<li>いろは</li>
							<li>いろは<br>いろは</li>
						</ul>
					</div>
				</li>
			</ul>
		</section>


		<div class="ads">
		</div>
	</div>
	<footer>
		©START30 BLOG All Rights Reserved.
	</footer>
	<script type="text/javascript" src="../_assets/js/after.js"></script>
</body>
</html>