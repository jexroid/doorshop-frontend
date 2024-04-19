import { Howl } from 'howler';


const buttons = document.querySelectorAll('.btn');

let sound = new Howl({
    src: ['/click.ogg'],
    volume: 0.3,
    html5: true
});

let musicbackground = new Howl({
    src: ['/generic.ogg'],
    loop: true
})



buttons.forEach(el => el.addEventListener('click', () => {
    sound.play()
    navigator.vibrate(40)
}));
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