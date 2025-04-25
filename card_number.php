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
    
    <section class="register-step1">
  <!-- ステップ表示 -->
  <div class="step-progress">
    <span class="step current">STEP1:入力</span>
    <span class="step">STEP2:確認</span>
    <span class="step">STEP3:完了</span>
  </div>

  <p class="step-guide">以下の項目に必要な事項を入力してください</p>

  <!-- 入力フォーム -->
  <form action="card_check.php" method="post" class="card-input-form">
    <div class="card-box">
      <div class="card-label">
        カード会員番号（13桁の半角数字）
        <span class="required">必須</span>
      </div>
      <input type="text" name="card_number" maxlength="13" required pattern="\d{13}">
    </div>

    <button type="submit" class="btn dark">カード情報確認 →</button>
    <a href="cancel.php" class="btn light">登録をやめる</a>
  </form>
</section>



    <?php include('footer.php'); ?>

</body>
</html>
