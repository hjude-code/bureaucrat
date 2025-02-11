let heading = document.querySelector('header')
function setStickyTop(){
    let headingHeight = heading.getBoundingClientRect().height
    console.log(heading)
    document.body.style.setProperty('--stickyTop', `${headingHeight-2}px`)
}
if(heading){
    setStickyTop()
}

window.addEventListener('resize', setStickyTop)