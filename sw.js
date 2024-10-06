// const VERSION = 1.7;
// const cacheName = 'static'
// const cacheItems = [
    

// ]

// this.addEventListener('install', event => {
//     event.waitUntil(
//         caches.open(cacheName).then(cache => {
//             cache.addAll(cacheItems)
//         })
//     )
// })

// if ('serviceWorker' in navigator) {
//     navigator.serviceWorker.ready.then(function (registration) {
//         console.log('service worker updated', registration)
//         registration.update();
//     });
// }

// this.addEventListener('fetch', event => {
//     event.respondWith(
//         caches.match(event.request).then(response => {
//             return response || fetch(event.request)
//         })
//     )
// })