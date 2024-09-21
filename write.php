<?php
// データの取得
$name = $_POST['name'];
$email = $_POST['email'];
$damage = $_POST['damage'];

// 日時を取得
$date = date('Y-m-d H:i:s');

// 保存する内容を整形
$entry = $date . ' | ' . $name . ' | ' . $email . ' | ' . $damage . "\n";

// データをファイルに書き込む
$file = fopen('data.txt', 'a'); // 追記モード
fwrite($file, $entry);
fclose($file);

// 完了メッセージとリンク
echo "データが登録されました。<br>";
echo "<a href='index.php'>アンケートフォームに戻る</a><br>";
echo "<a href='read.php'>アンケート一覧を見る</a>";
?>
