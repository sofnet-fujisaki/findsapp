<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>テストアプリ</title>
  <?php include('head.php'); ?>
  <style>

  </style>
</head>
<body>
    <?php include('header.php'); ?>
    <section class="login-section">
  <form action="login_check.php" method="post" class="login-form">
    <label for="login-id">ログインID</label>
    <input type="text" id="login-id" name="login_id" placeholder="メールアドレスまたは携帯番号" required>

    <label for="password">パスワード</label>
    <input type="password" id="password" name="password" required>

    <button type="submit" class="login-button">ログイン</button>

    <div class="forgot-link">
      <a href="forgot_password.php">パスワード忘れはこちらから</a>
    </div>
  </form>

  <!-- 新規会員登録 -->
  <div class="register-box">
    <p class="register-message">新規会員登録はこちら</p>
    <a href="register1.php" class="register-button">
      <i class="fas fa-user-plus"></i>
      <span>新規会員登録</span>
    </a><br>
    *Findsカード会員との連携の方も<br>こちらから！
  </div>
</section>

<a href="member.php">test</a>



    <?php include('footer.php'); ?>

</body>
</html>
