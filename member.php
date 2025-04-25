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

<!-- 会員証カード -->
<div class="card">
    <div class="name">ソフネット　太郎 様 <i class="fas fa-lightbulb"></i></div>
    <img class="barcode" src="images/barcode.png" alt="バーコード" />
    <div class="member-id">会員証2008503599991</div>
    <div class="points">
      <span class="label"><i class="fas fa-circle" style="color:red"></i> 保有ポイント</span>
      <div class="point-value">999 <span>ポイント</span></div>
      <div class="refresh">
        <i class="fas fa-rotate-right"></i><br>更新
      </div>
    </div>
  </div>

  <!-- 補足情報 -->
  <div class="info-note"><i class="fas fa-question-circle"></i> ポイント制度について</div>

    <!-- ボタンアイコンメニュー -->
    <div class="circle-buttons">
        <div class="circle-btn"><i class="fas fa-history"></i><span>購入履歴</span></div>
        <div class="circle-btn"><i class="fas fa-database"></i><span>ポイント<br>履歴</span></div>
        <div class="circle-btn"><i class="fas fa-ticket-alt"></i><span>クーポン</span></div>
        <div class="circle-btn"><i class="fas fa-user-edit"></i><span>会員情報<br>変更</span></div>
        <div class="circle-btn"><i class="fas fa-lock"></i><span>パスワード<br>変更</span></div>
        <div class="circle-btn"><i class="fas fa-sign-out-alt"></i><span>ログアウト</span></div>
    </div>

  <?php include('footer.php'); ?>

</body>
</html>
