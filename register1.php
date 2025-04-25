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
    
    <section class="register-select">
  <!-- 会員カード画像 -->
  <div class="card-image">
    <img src="images/odaokun.png" alt="Finds メンバーカード">
    <div class="card-text">
      <strong>Finds</strong><br>
      <span>MEMBERS CARD</span>
    </div>
  </div>

  <!-- 選択ボタン -->
  <div class="register-buttons">
    <a href="card_register.php" class="btn dark">
      <i class="fas fa-id-card"></i> 会員カードをお持ちの方
    </a>
    <a href="new_register.php" class="btn dark">
      会員カードをお持ちでない方
    </a>
    <a href="cancel.php" class="btn light">
      登録をやめる
    </a>
  </div>
</section>


    <?php include('footer.php'); ?>

</body>
</html>
