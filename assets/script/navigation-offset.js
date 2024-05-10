const primaryNav = document.querySelector('.is-style-primary-navigation');
let navHeight


if(primaryNav !== null){
    navheight = primaryNav.getBoundingClientRect().height;
}else{
    navheight = 0
}


document.body.style.setProperty('--navHeight', `${navheight}px`);