import Splide from '@splidejs/splide';
import Swiper from 'swiper';
import '@splidejs/splide/css';
import 'swiper/css';

export function sliders () {

    let initSplide = (element) => {
        new Splide(element, {
            perPage: 1,
            autoplay: true,
            interval: 3000,
            gap: '0rem',
            arrows: false,
        }).mount();
    }

    // Hero Slider
    let propertiesSplides = document.querySelectorAll('[data-properties-splide]');

    if (propertiesSplides) {
        propertiesSplides.forEach(initSplide);

        window.addEventListener('reapply-splide', () => {
            propertiesSplides = document.querySelectorAll('[data-properties-splide]');
            if (propertiesSplides) {
                propertiesSplides.forEach(initSplide);
            }
        });
    }
}
