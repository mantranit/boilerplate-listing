import '../scss/app.scss';

// Your JS Code goes here
const moduleElements = [...document.querySelectorAll('[data-module]')];

const dynamicModule = (elements) => {
  elements.forEach((el) => {
    const modules = el.getAttribute('data-module').split(/(\s|,)/g).filter(s => s.trim().length && !s.includes(','));
    modules.forEach((m) => {
      new (require(`./modules/${m}`).default)(el);
    });
  });
};

dynamicModule(moduleElements);
