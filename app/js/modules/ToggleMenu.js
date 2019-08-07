export default class ToggleMenu {
  constructor(el) {
    // IE 10+
    el.addEventListener('change', function () {
      const body = document.getElementsByTagName('body')[0];
      if (el.checked) {
        body.classList.add('fixed');
      } else {
        body.classList.remove('fixed');
      }
    });
  }
}
