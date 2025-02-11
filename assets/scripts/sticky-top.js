let heading = document.querySelector('header')
if(heading){
    let headingHeight = heading.getBoundingClientRect().height
    console.log(heading)
    document.body.style.setProperty('--stickyTop', `${headingHeight}px`)
}