export default class DelegateClickGallery {
  constructor(el) {
    $('.wp-block-gallery figure').click(function(e) {
      e.preventDefault();

      let link = $(this).find('figcaption a');
      if (link.length > 0 && link.attr('href') && link.attr('href') !== '#') {
        window.location.href = link.attr('href');
      }
    });
  }
}
