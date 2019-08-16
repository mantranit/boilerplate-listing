export default class DelegateClickGallery {
  constructor(el) {
    $('.wp-block-gallery figure').click(function(e) {
      e.preventDefault();

      const link = $(this).find('figcaption a');
      if (link.length > 0 && link.attr('href') && link.attr('href') !== '#') {
        if (link.attr('target') && link.attr('target') === '_blank') {
          window.open(link.attr('href'));
        } else {
          window.location.href = link.attr('href');
        }
      }
    });
  }
}
