import {Howl, Howler} from 'howler';


const buttons = document.querySelectorAll('.btn');

let sound = new Howl({
    src: ['/click.ogg'],
    html5: true
});

buttons.forEach(el => el.addEventListener('click', () => {
    sound.play()
}));


