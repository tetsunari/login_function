<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ユーザー登録画面</title>
</head>
<body>
<h2>ユーザー登録フォーム</h2>
  <form action="register.php" methoda="POST">
  <p>
    <label for="username">ユーザー名:</label>
    <input type="text" name="username">
  </p>
  <p>
    <label for="username">メールアドレス:</label>
    <input type="email" name="email">
  </p>
  <p>
    <label for="password">パスワード:</label>
    <input type="password" name="password" placeholder= '8文字以上100文字以下'>
  </p>
  <p>
    <label for="password_conf">パスワード確認:</label>
    <input type="password" name="password_conf" placeholder="パスワードと同じ">
  </p>
  <p>
    <input type="submit" value="新規登録">
  </p>
  </form>
</body>
</html>