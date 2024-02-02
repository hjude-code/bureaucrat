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

    feature.appendChild(column);
    feature.appendChild(row);

    feature.addEventListener('mousemove', crosshairs);
})