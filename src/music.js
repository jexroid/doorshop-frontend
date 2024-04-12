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


window.addEventListener('load', function () {
    musicbackground.play()
    document.getElementById('mute').addEventListener('click', () => {
        if (musicbackground.playing()) {


            musicbackground.stop()
        } else {

            musicbackground.play()

        }
    })
})


