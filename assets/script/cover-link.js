const linkCovers = document.querySelectorAll('.wp-block-cover.is-style-link-cover');

const trackCover = (e) =>{
    let rect = e.target.getBoundingClientRect();

    let w = Math.round(rect.width);
    let h = Math.round(rect.height);

    let x = Math.round(e.clientX - rect.left);
    let y = Math.round(e.clientY - rect.top);

    let pcntX = (x/w) - 0.5;
    pcntX = pcntX.toFixed(3) * 2;
    let pcntY = (y/h) - 0.5;
    pcntY = pcntY.toFixed(3) * 2;

   e.target.parentElement.style.setProperty('--pcntX', pcntX);
   e.target.parentElement.style.setProperty('--pcntY', pcntY);
}

linkCovers.forEach((cover)=>{
    cover.addEventListener('mousemove', trackCover, this);



    let link = cover.querySelector('a');
    if(link){

        let firstLink = link.getAttribute('href');
        let linkTarget = link.getAttribute('target');

        let linkElement = document.createElement('a');
        linkElement.classList.add('coverLink');
        linkElement.setAttribute('href', firstLink);
        linkElement.setAttribute('target', linkTarget);
    
        cover.appendChild(linkElement);
    }

})