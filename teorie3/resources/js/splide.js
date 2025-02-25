import Splide from '@splidejs/splide';
import '@splidejs/splide/dist/css/splide.min.css';

document.addEventListener('DOMContentLoaded', function () {

    const slider = new Splide('#header-slider', {
        type: 'loop',
        perPage: 1,
        autoplay: true,
        interval: 4000,
        speed: 1000,
        arrows: true,
        pagination: true,
        lazyLoad: 'sequential',
        breakpoints: {
            1024: { perPage: 1, arrows: false },
            768: { perPage: 1, pagination: true }
        }
    });

    slider.mount();
});
