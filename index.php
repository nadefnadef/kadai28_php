<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>アンケート入力</title>
</head>
<body>
    <h1>アンケート登録フォーム</h1>
    <form action="write.php" method="post">
        <label>名前：</label><br>
        <input type="text" name="name" required><br><br>

        <label>メールアドレス：</label><br>
        <input type="email" name="email" required><br><br>

        <label>被害内容：</label><br>
        <textarea name="damage" rows="4" cols="40" required></textarea><br><br>

        <input type="submit" value="送信">
    </form>

    <br><br>
    <a href="read.php">アンケート一覧を見る</a>
</body>
</html>
