const Features = document.querySelectorAll('.wp-block-cover.is-style-feature');


const bdy = document.querySelector('body');
bdy.style.setProperty('--pointerGridX', '0px');
bdy.style.setProperty('--pointerGridY', '0px');

const column = document.createElement('span');
column.classList.add('pointerColumn', "pointerGrid");
const row = document.createElement('span');
row.classList.add('pointerRow', "pointerGrid");


Features.forEach((feature)=>{

    for(let i=0; i<7; i++){
        let gridTile = document.createElement('div');
        gridTile.classList.add('gridTile');
        feature.appendChild(gridTile);
    }
});

let CoverOptions = {
    root: document.querySelector("#scrollArea"),
    rootMargin: "0px",
    threshold: 0.80,
  };
  
let CoverCallBack = (entries, observer) => {
entries.forEach((entry) => {
    if(entry.isIntersecting){
       entry.target.classList.add('cover-in');
       let video = entry.target.querySelector('video');
        video.play();
    }else{
        entry.target.classList.remove('cover-in');
        let video = entry.target.querySelector('video');
        video.pause();
    }
});
};

let CoverObserver = new IntersectionObserver(CoverCallBack, CoverOptions);

Features.forEach((cover)=>{
    CoverObserver.observe(cover);
})