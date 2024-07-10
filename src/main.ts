import '../style.scss'
import 'aos/dist/aos.css'
import 'swiper/css/bundle';
import 'atropos/css';
import { gsap } from 'gsap';
import { ScrollTrigger } from "gsap/ScrollTrigger";
import SplitType from "split-type";
import Swiper from 'swiper/bundle';
import Atropos from 'atropos';
import AOS from 'aos';
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
        toggleActions: "play none resume reverse",
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

function log() {
    console.log('hes out')
}

gsap.from('.shoplist', {
    y: 100,
    stagger: 0.13,
    duration: 0.3,
    delay: 0.2,
    opacity: 0,
    scrollTrigger: {
        onLeave: () => {log()},
        trigger: '.shoplist',
        toggleActions: "play none resume reverse",
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
        toggleActions: "play none resume reverse",
        end: 'top 13%',
        start: 'top 90%',
    }
})


const stats = gsap.timeline({
    scrollTrigger: {
        trigger: '.stats',
        toggleActions: "play none resume reverse",
        end: 'top 13%',
        start: 'top 90%',
    }
})

stats.from('.stats', {
    y: 100,
    duration: 0.3,
    delay: 0.2,
    opacity: 0,
})

stats.from('.stat', {
    y: -100,
    duration: 0.3,
    delay: 0.2,
    opacity: 0,
    stagger: 0.1
})

AOS.init();


