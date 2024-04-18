function clickEffect(e) {
    var d = document.createElement("div");
    d.className = "clickEffect";
    d.style.top = e.clientY + "px"; d.style.left = e.clientX + "px";
    document.body.appendChild(d);
    d.addEventListener('animationend', function () { d.parentElement.removeChild(d); }.bind(this));
}
document.addEventListener('click', clickEffect);



let whatisthedevice = navigator.userAgent
const cursor = document.getElementById('cursor');

if (whatisthedevice.match(/Android/i)
    || whatisthedevice.match(/webOS/i)
    || whatisthedevice.match(/iPhone/i)
    || whatisthedevice.match(/iPad/i)
    || whatisthedevice.match(/iPod/i)
    || whatisthedevice.match(/BlackBerry/i)
    || whatisthedevice.match(/Windows Phone/i)) {
    cursor.style.visibility = 'hidden'
} else {
    const body = document.body;
    // Update circle position on mouse movement
    body.addEventListener('mousemove', (event) => {
        cursor.style.left = event.clientX + 'px';
        cursor.style.top = event.clientY + 'px';
    });
}


const loadingScreen = document.getElementById('loadng');


document.addEventListener('DOMContentLoaded', () => {
    loadingScreen.classList.add('hidein')
})
