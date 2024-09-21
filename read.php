<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>アンケート一覧</title>
</head>
<body>
    <h1>アンケート一覧</h1>
    <table border="1">
        <tr>
            <th>日時</th>
            <th>名前</th>
            <th>メールアドレス</th>
            <th>被害内容</th>
        </tr>

        <?php
        // ファイルからデータを読み込む
        $file = fopen('data.txt', 'r');
        $lines = array();

        // データを配列に格納
        while ($line = fgets($file)) {
            $lines[] = $line;
        }
        fclose($file);

        // データを逆順で表示
        foreach (array_reverse($lines) as $line) {
            list($date, $name, $email, $damage) = explode(' | ', $line);
            echo "<tr>";
            echo "<td>" . htmlspecialchars($date) . "</td>";
            echo "<td>" . htmlspecialchars($name) . "</td>";
            echo "<td>" . htmlspecialchars($email) . "</td>";
            echo "<td>" . htmlspecialchars($damage) . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <br><br>
    <a href="index.php">アンケートフォームに戻る</a>
</body>
</html>
