<?php
// データベースファイルへのパス
$db_file = 'my_database.db';

try {
    // SQLiteデータベースに接続
    $pdo = new PDO('sqlite:' . $db_file);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // メッセージを取得するSQLコマンド
    $sql = "SELECT * FROM messages";
    $stmt = $pdo->query($sql);

    // 結果をループで出力
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "名前: " . htmlspecialchars($row['name']) . "<br>";
        echo "メッセージ: " . htmlspecialchars($row['message']) . "<br>";
        echo "日時: " . $row['created_at'] . "<br><br>";
    }
} catch (PDOException $e) {
    echo "データベースエラー: " . $e->getMessage();
}
?>
