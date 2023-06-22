<?php
// inputをチェックする
if (
    isset($_POST['name']) && $_POST['name'] != '' &&
    isset($_POST['email']) && $_POST['email'] != '' &&
    isset($_POST['question1']) && $_POST['question1'] != '' &&
    isset($_POST['question2']) && $_POST['question2'] != ''
) {
    // inputから受け取る
    $name = $_POST['name'];
    $email = $_POST['email'];
    $question1 = $_POST['question1'];
    $question2 = $_POST['question2'];

    // 問2の選択肢を日本語に変換
    if($question2 == "yes"){
        $question2 = "はい";
    } else {
        $question2 = "いいえ";
    }

    // メッセージを整形する
    $message = "お名前: " . htmlspecialchars($name) . "\n" .
        "Email: " . htmlspecialchars($email) . "\n" .
        "Q1. お気に入りの色は何ですか? " . htmlspecialchars($question1) . "\n" .
        "Q2. ペットは飼っていますか? " . htmlspecialchars($question2) . "\n";

} else {
    $message = 'すべての項目を入力してください。';
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>アンケート結果</title>
    <style>
        .message {
            white-space: pre-wrap;
            font-family: monospace;
        }
    </style>
</head>

<body>

    <h1>アンケート結果</h1>

    <div class="message">
        <?php echo $message; ?>
    </div>

    <ul>
        <li><a href="input.php">戻る</a></li>
    </ul>

</body>

</html>
