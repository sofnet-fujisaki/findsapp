const CACHE_NAME = 'my-pwa-cache-v1';
const urlsToCache = [
  '/',
  '/index.html',
  '/style.css',
  '/script.js',
  '/icons/icon-192x192.png',
  '/icons/icon-512x512.png'
];

// インストール時にキャッシュ
self.addEventListener('install', (event) => {
  console.log('[Service Worker] インストール中...');
  event.waitUntil(
    caches.open(CACHE_NAME).then((cache) => {
      console.log('[Service Worker] キャッシュ中: ', urlsToCache);
      return cache.addAll(urlsToCache);
    })
  );
});

// アクティブになったとき
self.addEventListener('activate', (event) => {
  console.log('[Service Worker] アクティブになりました');
  // 古いキャッシュを削除（バージョン更新用）
  event.waitUntil(
    caches.keys().then((cacheNames) => {
      return Promise.all(
        cacheNames.map((key) => {
          if (key !== CACHE_NAME) {
            console.log('[Service Worker] 古いキャッシュ削除: ', key);
            return caches.delete(key);
          }
        })
      );
    })
  );
});

// リクエスト時にキャッシュがあれば返す（なければfetch）
self.addEventListener('fetch', (event) => {
  event.respondWith(
    caches.match(event.request).then((response) => {
      if (response) {
        console.log('[Service Worker] キャッシュから取得: ', event.request.url);
        return response;
      }
      console.log('[Service Worker] ネットワークから取得: ', event.request.url);
      return fetch(event.request);
    })
  );
});
