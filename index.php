<!DOCTYPE html>
<html>
	<head>
		<meta property="og:url" content="https://nnn1590.org/correctJP" />
		<meta property="og:title" content="怪レぃ日本語ジェネレーター" />
		<meta property="og:image" content="https://nnn1590.org/correctJP/ogp.png" />
		<meta property="og:description" content="ここては怪レぃ日本語を作ゑこどがてきゑ！贵樣も使う(レなちぃ)。" />

		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@nnn1590">
		<meta name="twitter:site:id" content="829183176727810049">
		<meta name="twitter:creator" content="@0_a_e" />
		<meta name="twitter:creator:id" content="1188833290947444737" />

		<meta property="fb:app_id" content="AppID" />
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" href="main.css">
		<link rel="shortcut icon" href="favicon.ico">
		<title>怪レぃ日本語ジェネレーター</title>
	</head>
	<body>
		<script>
			var copyButtonTimeout;
			function Clipboard() {
				var copyTarget = document.getElementById("copy");
				var copyButton = document.getElementById("copybutton");
				copyTarget.select();
				document.execCommand("Copy");
				if (copyButton.innerText == "コピーしました！") {
					copyButton.innerText = "ユピ一レまレた！";
				} else {
					copyButton.innerText = "コピーしました！";
				}
				clearTimeout(copyButtonTimeout);
				copyButtonTimeout = setTimeout(function(){copyButton.innerText = "コピー";}, 3000);
			}
		</script>
		<h1>怪レぃ日本語ジェネレーター</h1>
		<h2>ここては怪レぃ日本語を作ゑこどがてきゑ！贵樣も使う(レなちぃ)。</h2>
		<textarea class="copyform" id="copy" readonly>
<?php
	$output = "ここに結果が表示ちねまず。";
	$inpt = $_POST["main"];
	if ($inpt != "" ) {
		$search = array('しなさい','悪','来','語','の','ぬ','Xperia','メ','る','貴様','し','さ','寛','で','れ','険','XPERIA','xperia','NHK','huawei','マクドナルド','マック','マクド','い','見','ン','エ','楽','華','と','す','頼','ル','偉','め','気','風','ス','飛','コ','ー');
		$replace = array('(しなさい)','恶','來','语','ゐ','ゐ','HUAWEI','〆','ゑ','贵樣','レ','ち','宽','て','ね','險','HUAWEI','HUAWEI','CCTV','华为技术有限公司','沙県小吃','沙県小吃','沙県小吃','ぃ','见','ソ','工','樂','华','ど','ず','赖','儿','伟','〆','汽','风','ヌ','飞','ユ','一');
		$output = str_replace($search, $replace, $inpt);
	}
	echo htmlspecialchars($output);
?></textarea>
		<br>
		<span class="txt">変換結果を</span><button id="copybutton" class="cp" Onclick="Clipboard()">コピー</button>
		<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count=true data-size="large" data-text="<?php if ($_POST["main"] != "") echo htmlspecialchars("$output", ENT_QUOTES, "UTF-8"); ?>" data-hashtags="怪レい日本語Web" data-show-count="false">Tweet</a><script async="" src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		<div class="formain">
			<form method="POST" class="sender">
				<input type="text" placeholder="ここに正レぃ日本語を入力ずゑ。"name="main" class="sendtxt">
				<button type="submit" class="sendsubmit" value="怪レぃ日本語にずゑ"><span class="sendbuttontext sendbuttontext-short">変換</span><span class="sendbuttontext sendbuttontext-long">怪レぃ日本語にずゑ</span></button>
			</form>
		</div>
		<div class="paddingforform"></div>
	</body>
</html>
