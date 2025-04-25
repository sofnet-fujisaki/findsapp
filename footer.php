<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  window.openMenu = function () {
    document.getElementById('sideMenu').classList.add('open');
    document.getElementById('menuOverlay').style.display = 'block';
  };

  document.getElementById('menuOverlay')?.addEventListener('click', () => {
    document.getElementById('sideMenu').classList.remove('open');
    document.getElementById('menuOverlay').style.display = 'none';
  });

  new Swiper(".mySwiper", {
    loop: true,
    pagination: { el: ".swiper-pagination", clickable: true },
    autoplay: { delay: 4000, disableOnInteraction: false }
  });

  if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/service-worker.js')
      .then(reg => console.log('SW登録成功:', reg))
      .catch(err => console.error('SW登録失敗:', err));
  }
</script>
