<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>フォーム入力</title>
</head>
<body>
    <form action="save_data.php" method="POST">
        <label for="name">名前:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="message">メッセージ:</label>
        <textarea id="message" name="message" required></textarea>
        <br>
        <button type="submit">送信</button>
    </form>
</body>
</html>
