const primaryNav = document.querySelector('.is-style-primary-navigation');
const navheight = primaryNav.getBoundingClientRect().height;

document.body.style.setProperty('--navHeight', `${navheight}px`);