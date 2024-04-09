import { Howl, Howler } from 'howler';


const buttons = document.querySelectorAll('.btn');
let clicked = false

let sound = new Howl({
    src: ['/click.ogg'],
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


window.addEventListener('load', function () {
    musicbackground.play()
})
