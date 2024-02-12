const Features = document.querySelectorAll('.wp-block-cover.is-style-feature');
const Links = document.querySelectorAll('.wp-block-cover.is-style-link');



const bdy = document.querySelector('body');

const column = document.createElement('span');
column.classList.add('pointerColumn', "pointerGrid");
const row = document.createElement('span');
row.classList.add('pointerRow', "pointerGrid");

Links.forEach((link)=>{
    let url = link.querySelector('a');
    let linkCover = document.createElement('a');
    linkCover.href = url;
    linkCover.target = "blank";
    linkCover.classList.add('linkCover');
    link.appendChild(linkCover);

    let video = link.querySelector('video');
    if(video !== null){
        video.pause();

        link.addEventListener('mouseover', (e)=>{
            let video = link.querySelector('video');
            video.play();
        })
        link.addEventListener('mouseout', (e)=>{
            let video = link.querySelector('video');
            video.pause();
        })
    }

})

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
    threshold: 0.8,
  };

let FeatureCoverCallBack = (entries, observer) => {
entries.forEach((entry) => {
    if(entry.isIntersecting){
       if(window.innerWidth<600){
        entry.target.classList.add('cover-in');
        let video = entry.target.querySelector('video');
        if(video !== null){video.play();} 
       }
    }else{
        if(window.innerWidth<600){
        entry.target.classList.remove('cover-in');
        let video = entry.target.querySelector('video');
        if(video !== null){video.pause();}
        }
    }
});
};

let FeatureCoverObserver = new IntersectionObserver(FeatureCoverCallBack, CoverOptions);

Features.forEach((cover)=>{
    FeatureCoverObserver.observe(cover);
});

Links.forEach((cover)=>{
    FeatureCoverObserver.observe(cover);
});