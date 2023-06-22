<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>課題テンプレート</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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
    <form action="write.php" method="post">
        <label>
            お名前:
            <input type="text" name="name">
        </label>
        <label>
            出身:
            <input type="text" name="birthPlace">
        </label>
        <label>
            好きな色:
            <input type="text" name="favoriteColor">
        </label>
        <label>
            趣味:
            <input type="text" name="hobby">
        </label>
        <input type="submit" value="送信">
    </form>
</body>

</html>
