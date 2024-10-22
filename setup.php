<?php
// 新しいデータベースファイルを作成
$db_file = 'my_database.db';

try {
    // SQLiteデータベースに接続
    $pdo = new PDO('sqlite:' . $db_file);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // テーブル作成のSQLコマンド
    $sql = "CREATE TABLE IF NOT EXISTS messages (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT NOT NULL,
        message TEXT NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )";

    // テーブルを作成
    $pdo->exec($sql);
    echo "データベースとテーブルが正常に作成されました。";
} catch (PDOException $e) {
    echo "データベースエラー: " . $e->getMessage();
}
?>
