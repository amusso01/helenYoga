// core version + navigation, pagination modules:
import Swiper, { Autoplay } from 'swiper';

Swiper.use([Autoplay]);

export default function slider() {
  const swiper = new Swiper('#homeSlider', {
    loop: true,
    speed: 600,
    allowTouchMove: false,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
  });
}