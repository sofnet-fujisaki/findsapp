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

  <!-- Swiperスライダー -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><a href="https://www.odaokufinds.com/event/messe/messe38?in=1&ev=1286"><img src="images/slide1.jpg" alt="スライド1"></a></div>
      <div class="swiper-slide"><a href="https://www.e-finds.net/tokusyuu.php?seqno=34"><img src="images/slide2.jpg" alt="スライド2"></a></div>
      <div class="swiper-slide"><a href="https://www.e-finds.net/tokusyuu.php?seqno=30"><img src="images/slide3.jpg" alt="スライド3"></a></div>
      <div class="swiper-slide"><a href="register1.php"><img src="images/banner-member.png" alt="スライド3"></a></div>
      <div class="swiper-slide"><a href="https://www.e-finds.net/tokusyuu.php?seqno=22"><img src="images/slide4.jpg" alt="スライド3"></a></div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
  <div class="bannerarea">
  </div>
  <!-- 丸ボタン -->
  <div class="circle-buttons">
    <a href="login.php" class="circle-btn">
      <i class="fas fa-user"></i>
      <span>会員証</span>
    </a>
    <div class="circle-btn"><i class="fas fa-newspaper"></i><span>News</span></div>
    <a href="https://www.odaokufinds.com/chirashi" class="circle-btn">
      <i class="fas fa-ad"></i>
      <span>チラシ</span>
    </a>
    <div class="circle-btn"><i class="fas fa-calendar"></i><span>イベント</span></div>
    <a href="https://www.e-finds.net/" class="circle-btn">
      <i class="fas fa-shopping-cart"></i>
      <span>Online Shop</span>
    </a>
    <div class="circle-btn"><i class="fas fa-couch"></i><span>家具の選び方</span></div>
  </div>
  
  <div class="snsarea">
  <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
  <a href="#" aria-label="X / Twitter"><i class="fa-brands fa-x-twitter"></i></a>
  <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
  <a href="#" aria-label="LINE"><i class="fa-brands fa-line"></i></a>
  <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
</div>
  <?php include('footer.php'); ?>

</body>
</html>
