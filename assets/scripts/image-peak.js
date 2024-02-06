let peakers = document.querySelectorAll('.wp-block-image.is-style-peakaboo');

const thresholdResolution = (step = 0.025) =>{
    
    let resolutionSteps = []

    for (let i=0; i<1; i+=step){
        resolutionSteps.push(i);
    }

    return resolutionSteps
}

let options = {
    root: document.querySelector("#scrollArea"),
    rootMargin: "0px",
    threshold: thresholdResolution(),
  };
  
let callback = (entries, observer) => {
entries.forEach((entry) => {
    if(entry.isIntersecting){
        let intersection = 100 - (entry.intersectionRatio * 100);
        entry.target.style.cssText = `--intersection:${intersection}%`
        // window.addEventListener()
    }else{
    }
});
};

let observer = new IntersectionObserver(callback, options);

peakers.forEach((peaker)=>{
    observer.observe(peaker);
})
