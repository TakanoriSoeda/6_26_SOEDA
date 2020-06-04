<?php
// 授業の手順通りにファイルの読み込みをしています
$filename = 'data/data.txt';
$fp = fopen($filename,'r');
while(!feof($fp)){
    $txt = fgets($fp);
    echo  $txt.'<br>';
}
fclose($fp);
?>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート</title>
</head>
<body>
<a href="index.php">アンケートに戻る    
</body>
</html>