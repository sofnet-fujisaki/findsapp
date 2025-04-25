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
    
    <section class="register-step2">
  <p class="register-note">
    ご登録するメールアドレスを入力し、「送信」を押してください。入力いただいたメールアドレスに登録用のURLを送信します。
  </p>

  <form action="send_register_url.php" method="post" class="register-step2-form">
    <label for="email" class="input-label ">メールアドレス</label>
    <input type="email" id="email" name="email" required>

    <label for="email-confirm" class="input-label ">メールアドレス（確認用）</label>
    <input type="email" id="email-confirm" name="email_confirm" required>

    <div class="mail-caution">
      ※受信拒否設定等を行われている方は、<br>
      「***@odaoku.co.jp」<br>
      から受信できるように設定をお願いいたします。<br><br>
      auの方は安心ブロック設定をしていてもURLが入ったショートメールが届きます。予めご了承ください。
    </div>

    <button type="submit" class="btn dark">送　信　→</button>
  </form>
</section>

<a href="card_number.php" >test</a>

    <?php include('footer.php'); ?>

</body>
</html>
