const navigation = document.querySelector('header.wp-block-template-part');
navigation.style.position = 'sticky';
navigation.style.top = "0px";
navigation.style.zIndex = "20";

const heroHeight = `${navigation.offsetHeight}px`

const body = document.querySelector('body')

body.style.setProperty("--wp--custom--sticky-top", heroHeight)
