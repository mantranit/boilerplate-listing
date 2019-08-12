import slick from 'slick-carousel';
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';

export default class HomeCarousel {
  constructor(el) {
    const homeCarousel = $(el).find('.home-carousel');
    homeCarousel.slick({
      autoplay: true,
    });
  }
}
