import '../style.css'
import 'aos/dist/aos.css'
import 'swiper/css/bundle';
import 'atropos/css';
import { gsap } from 'gsap';
import { ScrollTrigger } from "gsap/ScrollTrigger";
import SplitType from "split-type";
import KUTE from 'kute.js'
import Swiper from 'swiper/bundle';
import Atropos from 'atropos';
import AOS from 'aos'
gsap.registerPlugin(ScrollTrigger);

const mol = new SplitType('.welcome', { types: 'lines,words' })
const wsau = new SplitType('.wsau', { types: 'lines,words', wordClass: 'wsauclass' })


Atropos({
    el: '.my-atropos',
    // rest of parameters
});
Atropos({
    el: '.my-atropos-2',
    // rest of parameters
});
Atropos({
    el: '.my-atropos-3',
    // rest of parameters
});


new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    effect: 'creatives',
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true,
    },

    // Navigation arrows

    // And if we need scrollbar

});


const wordanimation = gsap.timeline({
    scrollTrigger: {
        trigger: '.word',
        toggleActions: 'restart reverse restart none',
        end: 'top 13%',
        start: 'top 90%',
    }
})

const head = gsap.timeline()

head.from('.navbar', {
    opacity: 0,
    y: -550,
    duration: 1.5,
    
})

head.from('.swiper', {
    opacity: 0,
    y: -100,
    duration: 1.6
})

wordanimation.from(mol.words, {
    y: 200,
    stagger: 0.03,
    duration: 0.3,
    delay: 0.2
})



gsap.from('.shoplist', {
    y: 100,
    stagger: 0.13,
    duration: 0.3,
    delay: 0.2,
    opacity: 0,
    scrollTrigger: {
        trigger: '.shoplist',
        toggleActions: 'restart reverse restart none',
        end: 'top 13%',
        start: 'top 90%',
    }
})

gsap.from(wsau.words, {
    x: 100,
    stagger: 0.03,
    duration: 0.3,
    delay: 0.2,
    opacity: 0,
    scrollTrigger: {
        trigger: '.wsauclass',
        toggleActions: 'restart none restart none',
        end: 'top 13%',
        start: 'top 90%',
    }
})


// KUTE.fromTo('#blob3',
//     {path: '#blob3'},
//     {path: '#blob4'},
//     {repeat: 999, duration: 2000, yoyo: true}
// ).start()

// KUTE.fromTo('#blob5',
//     {path: '#blob5'},
//     {path: '#blob6'},
//     {repeat: 999, duration: 2000, yoyo: true}
// ).start()

// KUTE.fromTo('#blob7',
//     {path: '#blob7'},
//     {path: '#blob8'},
//     {repeat: 999, duration: 2000, yoyo: true}
// ).start()

// KUTE.fromTo('#blob9',
//     {path: '#blob9'},
//     {path: '#blob10'},
//     {repeat: 999, duration: 2000, yoyo: true}
// ).start()


// // 

// KUTE.fromTo('#lob1',
//     {path: '#lob1'},
//     {path: '#lob2'},
//     {repeat: 999, duration: 2000, yoyo: true}
// ).start()

// KUTE.fromTo('#lob3',
//     {path: '#lob3'},
//     {path: '#lob4'},
//     {repeat: 999, duration: 2000, yoyo: true}
// ).start()

// KUTE.fromTo('#lob5',
//     {path: '#lob5'},
//     {path: '#lob6'},
//     {repeat: 999, duration: 2000, yoyo: true}
// ).start()

// KUTE.fromTo('#lob7',
//     {path: '#lob7'},
//     {path: '#lob8'},
//     {repeat: 999, duration: 2000, yoyo: true}
// ).start()

// KUTE.fromTo('#lob9',
//     {path: '#lob9'},
//     {path: '#lob10'},
//     {repeat: 999, duration: 2000, yoyo: true}
// ).start()



let whatisthedevice = navigator.userAgent
const cursor = document.getElementById('cursor') as HTMLElement;

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

AOS.init();