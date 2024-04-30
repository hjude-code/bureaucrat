const primaryNav = document.querySelector('.wp-block-navigation.is-style-primary-navigation');
const navheight = primaryNav.getBoundingClientRect().height;

document.body.style.setProperty('--navHeight', `${navheight}px`);