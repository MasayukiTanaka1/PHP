<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>POST練習</title>
    <style>
        .menu {
            background-color: #2FA6E9;
            padding: 20px;
        }
        .menu h3 {
            margin: 0;
            color: #FFFFFF;
        }
        form {
            margin: 20px 0;
        }
        form label {
            display: block;
            margin-bottom: 10px;
        }
        form input[type="submit"] {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="menu">
        <h3>アンケート</h3>
    </div>

    <p>アンケート回答後、お名前とメールアドレスを送信してください。</p>

    <form action="post_confirm.php" method="post">
        <label>
            Q1. お気に入りの色は何ですか?
            <input type="text" name="question1">
        </label>
        <label>
            Q2. ペットは飼っていますか?
            <select name="question2">
                <option value="">選択してください</option>
                <option value="yes">はい</option>
                <option value="no">いいえ</option>
            </select>
        </label>
        <label>
            お名前:
            <input type="text" name="name">
        </label>
        <label>
            EMAIL:
            <input type="text" name="email">
        </label>
        <input type="submit" value="送信">
    </form>
</body>

</html>
