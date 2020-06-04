<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
    <title>アンケート</title>
</head>
<body>
<!-- 飲食店のアンケートフォームを作ってみました -->
<h1>アンケートフォーム</h1>
<form method="post" action="write.php">
<p>Q１、性別を教えてください</p>
    <label><input type="radio" name="sex" value="男性">男性</label>
    <label><input type="radio" name="sex" value="女性">女性</label>
    <label><input type="radio" name="sex" value="どちらでもない">どちらでもない</label>

<p>Q２、年齢を教えてください</p>
    <label><input type="radio" name="age" value="10代">10代</label>
    <label><input type="radio" name="age" value="20代">20代</label>
    <label><input type="radio" name="age" value="30代">30代</label>
    <label><input type="radio" name="age" value="40代">40代</label>
    <label><input type="radio" name="age" value="50代">50代</label>
    <label><input type="radio" name="age" value="60代">60代</label>
      
<p>Q３、当店を何で知りましたか（複数回答可）</p>
    <label><input type="checkbox" name="media[]" value="テレビ">テレビ</label>
    <label><input type="checkbox" name="media[]" value="新聞">新聞</label>
    <label><input type="checkbox" name="media[]" value="雑誌">雑誌</label>
    <label><input type="checkbox" name="media[]" value="検索サイト">検索サイト</label>
    <label><input type="checkbox" name="media[]" value="SNS・ブログ">SNS・ブログ</label>
    <label><input type="checkbox" name="media[]" value="家族・知人">家族・知人</label>
    <label><input type="checkbox" name="media[]" value="その他">その他</label>

<p>Q４、料理の満足度を教えてください</p>
    <label><input type="radio" name="good" value="満足">満足</label>
    <label><input type="radio" name="good" value="やや満足">やや満足</label>
    <label><input type="radio" name="good" value="普通">普通</label>
    <label><input type="radio" name="good" value="やや不満">やや不満</label>
    <label><input type="radio" name="good" value="不満">不満</label>

<p>Q5、好きな料理のジャンルを教えてください</p>   
    <select id="select" name="like" style="height: 30px;">
                <option value="0"></option>
                <option value="和食">和食</option>
                <option value="洋食">洋食</option>
                <option value="中華料理">中華料理</option>
                <option value="イタリアン">イタリアン</option>
                <option value="エスニック料理">エスニック料理</option>
    </select>

<p>Q6、感想を自由に書いてください</p>
    <textarea name="free" id="" cols="50" rows="5"></textarea><br><br>

<input type="submit" value="送信">

</form>
    
</body>
</html>