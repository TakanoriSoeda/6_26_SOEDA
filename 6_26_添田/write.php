<?php
// 手順は授業で習った通りです。POSTでデータを順次受け取ります
// 性別
if (isset($_POST['sex'])) {
    $sex = $_POST['sex'];
}
// 年齢層
if (isset($_POST['age'])) {
    $age = $_POST['age'];
}
// 店を知ったきっかけ。複数回答は「、」で区切り
if (isset($_POST['media'])) {
    $media = implode(",",$_POST["media"]);
}
// 満足度
if (isset($_POST['good'])) {
    $good = $_POST['good'];
}
// 好きな料理のジャンル
if (isset($_POST['like'])) {
    $like = $_POST['like'];
}
// 感想欄
$free = $_POST["free"];
// ページ開いたらデータ読み込み。各項目は番号で区切りました
$file = fopen("data/data.txt","a");
fwrite($file,"①".$sex." "."②".$age." "."③".$media." "."④".$good." "."⑤".$like." "."⑥".$free."\n");
fclose($file);
?>

<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>アンケート</title>
</head>
<body>
<h2>ご協力ありがとうございました</h2>
<h3><a href="read.php">集計結果を見る</h3>
<h3><a href="index.php">戻る</h3>
    
</body>
</html>