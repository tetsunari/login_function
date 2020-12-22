<?php

require_once '../classes/UserLogic.php';
ini_set('display_errors', true);

$err = [];

if(!$username = filter_input(INPUT_POST, 'username')){
  $err[] = 'ユーザー名を記入してください。';
}
if(!$email = filter_input(INPUT_POST, 'email'/*, FILTER_VALIDATE_EMAIL*/)){
  $err[] = 'メールアドレスを記入してください。';
}
$password = filter_input(INPUT_POST, 'password');
if(!preg_match("/\A[a-z\d]{6,100}+\z/i", $password)){
  $err[] = 'パスワードは6文字以上100文字以下にして下さい。';
}
$password_conf = filter_input(INPUT_POST, 'password_conf');
if($password !== $password_conf){
  $err[] = '確認用パスワードと異なっています。';
}

if(count($err) === 0){
  $hasCreated = UserLogic::createUser($_POST);
  if(!$hasCreated){
    $err[] = '登録に失敗しました。';
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ユーザー登録完了画面</title>
</head>
<body>
  <?php if (count($err) > 0) : ?>
    <?php foreach($err as $e) : ?>
      <p><?php echo $e ?></p>
    <?php endforeach ?>
  <?php else : ?>
    <p>ユーザー登録完了しました。</p>
  <?php endif ?>
  <a href="signup_form.php">戻る</a>
</body>
</html>