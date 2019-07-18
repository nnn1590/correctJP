<html>
<head>
<meta property="og:url" content="https://correctjp.work" /> 
<meta property="og:title" content="怪レぃ日本語ジェネレーター" /> 
<meta property="og:image" content="https://correctjp.work/ogp.png" /> 
<meta property="og:description" content="ここては怪レぃ日本語を作ゑこどがてきゑ！贵樣も使う(レなちぃ)。" /> 

<meta name="twitter:card" content="summary_large_image" /> 
<meta name="twitter:site" content="@orange_linux2" /> 

<meta property="fb:app_id" content="AppID" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

<link rel="stylesheet" href="main.css">
<title>怪レぃ日本語ジェネレーター</title>
</head>
<body>
<h1>怪レぃ日本語ジェネレーター</h1>
<h3>ここては怪レぃ日本語を作ゑこどがてきゑ！贵樣も使う(レなちぃ)。</h3>
<textarea class="copyform" id="copy">
<?php
$output = "ここに結果が表示ちねまず。";
$inpt = $_POST["main"];
$search = array('しなさい','悪','来','語','の','ぬ','Xperia','メ','る','貴様','し','さ','寛','で','れ','険','XPERIA','xperia','NHK','huawei','マクドナルド','マック','マクド','い','見','ン','エ','楽','華','と','す','頼','ル','偉','め','気','風','ス','飛');
$replace = array('(しなさい)','恶','來','语','ゐ','ゐ','HUAWEI','〆','ゑ','贵樣','レ','ち','宽','て','ね','險','HUAWEI','HUAWEI','CCTV','华为技术有限公司','沙県小吃','沙県小吃','沙県小吃','ぃ','见','ソ','工','樂','华','ど','ず','赖','儿','伟','〆','汽','风','ヌ','飞');
$output = str_replace($search,$replace,$inpt);
echo $output;
?>

</textarea>
<div class="formain">
<form method="POST" class="sender">
<input type="text" placeholder="ここに正レぃ日本語を入力ずゑ。"name="main" class="sendtxt">
<button type="submit" class="sendsubmit">怪レぃ日本語にずゑ</button>
</form>
<btn>
<button class="cp" Onclick="Clipboard()">コピー</button>
<noscript>
   <a id="twitter-share-button-noscript" href='https://twitter.com/intent/tweet?hashtags=%E6%80%AA%E3%83%AC%E3%81%84%E6%97%A5%E6%9C%AC%E8%AA%9EWeb&original_referer=<?php echo urlencode((empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);?>&ref_src=twsrc%5Etfw&text=<?php echo htmlspecialchars($output, ENT_QUOTES, "UTF-8");?>&tw_p=tweetbutton&url=<?php echo urlencode((empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);?>'>Tweet</a>
   <style>.twitter-share-button { display:none; }</style>
</noscript>
<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" id="twitter-share-button" data-text="" data-hashtags="怪レい日本語Web" data-show-count="false">Tweet</a>
<script type="text/javascript" src="twitter-text-3.0.1.min.js"></script>
<script type="text/javascript">
var phpOutput = <?php echo json_encode("$output");?>;
var tweetText = (phpOutput + " <?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];?> #怪レい日本語Web");
if ((twttr.txt.parseTweet(tweetText).weightedLength) > 280) {
  while ((twttr.txt.parseTweet(tweetText).weightedLength) > 278) {
    phpOutput = phpOutput.slice(0, -1);
    tweetText = (phpOutput + " <?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];?> #怪レい日本語Web");
  }
  phpOutput = phpOutput + "…";
}
shareButton = document.getElementById("twitter-share-button");
shareButton.setAttribute("data-text", phpOutput);
</script>
<script async="" src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</btn>
</div>
<script>
        function Clipboard() {
            
            var copyTarget = document.getElementById("copy");
            
            copyTarget.select();
            
            document.execCommand("Copy");
            
            alert("コピーできました！ : " + copyTarget.value);
        }
</script>
</body>
</html>
