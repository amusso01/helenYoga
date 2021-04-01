// core version + navigation, pagination modules:
import SwiperCore, { Navigation, Pagination } from 'swiper/core';

// configure Swiper to use modules
SwiperCore.use([Navigation, Pagination]);


export default function slider() {
    const swiper = new SwiperCore('#testimonialSlider', {
        autoHeight: true,
        loop: true,
        // If we need pagination
        pagination: {
          el: '.swiper-pagination',
        },
        autoplay: {
          delay: 20000,
          disableOnInteraction: true,
        },
      
        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },

      });
}