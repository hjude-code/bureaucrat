const Features = document.querySelectorAll('.wp-block-cover.is-style-feature');


const bdy = document.querySelector('body');
bdy.style.setProperty('--pointerGridX', '0px');
bdy.style.setProperty('--pointerGridY', '0px');

const column = document.createElement('span');
column.classList.add('pointerColumn', "pointerGrid");
const row = document.createElement('span');
row.classList.add('pointerRow', "pointerGrid");



function crosshairs(m){
    let xPos = m.x;
    let yPos = m.y;
    bdy.style.setProperty('--pointerGridX', `${xPos}px`);
    bdy.style.setProperty('--pointerGridY', `${yPos}px`);
}

Features.forEach((feature)=>{

    for(let i=0; i<7; i++){
        let gridTile = document.createElement('div');
        gridTile.classList.add('gridTile');
        feature.appendChild(gridTile);
    }


    // feature.addEventListener('mousemove', crosshairs);
})