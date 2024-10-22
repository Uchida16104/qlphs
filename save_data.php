<?php
// データベースファイルへのパス
$db_file = 'my_database.db';

// フォームデータを取得
$name = $_POST['name'];
$message = $_POST['message'];

try {
    // SQLiteデータベースに接続
    $pdo = new PDO('sqlite:' . $db_file);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // データを挿入するSQLコマンド
    $sql = "INSERT INTO messages (name, message) VALUES (:name, :message)";
    $stmt = $pdo->prepare($sql);

    // プレースホルダに値をバインド
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':message', $message);

    // クエリを実行
    $stmt->execute();
    echo "データが正常に保存されました。";
} catch (PDOException $e) {
    echo "データベースエラー: " . $e->getMessage();
}
?>
