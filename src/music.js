import { Howl } from 'howler';



let sound = new Howl({
    src: ['/click.ogg'],
    volume: 0.3,
    html5: true
});

let musicbackground = new Howl({
    src: ['/generic.ogg'],
    loop: true
})



document.addEventListener('click', () => {
    sound.play()
    navigator.vibrate(40)
})
let mutebutton = document.getElementById('mute')
let mute_status = false
window.addEventListener('load', function () {
    musicbackground.play()
    mutebutton.addEventListener('click', () => {
        if (musicbackground.playing()) {
            musicbackground.stop()
            mute_status = true
        } else {
            musicbackground.play()
            mute_status = false
        }
    })
})


document.addEventListener('visibilitychange', () => {
    if (mute_status == false) {
        if (document.visibilityState === 'hidden') {
            // User is not viewing the page (limited functionality)
            if (musicbackground.playing()) {
                musicbackground.stop()
            }
        } else if (document.visibilityState == 'visible') {
            if (musicbackground.playing() == false) {
                musicbackground.play()
            }
        }
    }

});


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

// toggling mute Button
const svgOne = document.getElementById('sound-on')
const svgTwo = document.getElementById('sound-off')

function toggleSVGs(clickedSVG) {
    if (clickedSVG === svgOne) {
        svgOne.style.display = 'none';
        svgTwo.style.display = 'block';
    } else {
        svgOne.style.display = 'block';
        svgTwo.style.display = 'none';
    }
}

svgOne.addEventListener('click', () => toggleSVGs(svgOne));
svgTwo.addEventListener('click', () => toggleSVGs(svgTwo));