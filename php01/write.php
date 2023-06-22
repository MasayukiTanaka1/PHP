<?php
// inputをチェックする
if (isset($_POST['name']) && isset($_POST['birthPlace']) && isset($_POST['favoriteColor']) && isset($_POST['hobby'])) {
    // inputから受け取る
    $name = $_POST['name'];
    $birthPlace = $_POST['birthPlace'];
    $favoriteColor = $_POST['favoriteColor'];
    $hobby = $_POST['hobby'];

    // データを整形する
    $data = $name . ', ' . $birthPlace . ', ' . $favoriteColor . ', ' . $hobby . "\n";

    // データを保存する
    $result = file_put_contents('data/data.txt', $data, FILE_APPEND);

    // ファイル書き込みチェック
    if ($result === false) {
        $message = 'ファイルへの書き込みに失敗しました。';
    } else {
        $message = '以下の内容で書き込みました: ' . htmlspecialchars($data);
    }
} else {
    $message = 'すべての項目を入力してください。';
}

// データを読み込む
$fileData = file('data/data.txt');
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>File書き込み</title>
    <style>
        table {
            width: 100%;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
    </style>
</head>

<body>

    <h1>書き込み結果</h1>
    <p><?php echo $message; ?></p>

    <h2>登録データ</h2>
    <table>
        <tr>
            <th>名前</th>
            <th>出身地</th>
            <th>好きな色</th>
            <th>趣味</th>
        </tr>
        <?php foreach ($fileData as $line): ?>
        <?php list($name, $birthPlace, $favoriteColor, $hobby) = explode(', ', trim($line)); ?>
        <tr>
            <td><?php echo htmlspecialchars($name); ?></td>
            <td><?php echo htmlspecialchars($birthPlace); ?></td>
            <td><?php echo htmlspecialchars($favoriteColor); ?></td>
            <td><?php echo htmlspecialchars($hobby); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
