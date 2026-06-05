window.addEventListener('load',()=>{
    (() => {
    window.updateDualPrice = () => {
        const minInput = document.getElementById('minPrice');
        const maxInput = document.getElementById('maxPrice');
        const minLabel = document.getElementById('minValLabel');
        const maxLabel = document.getElementById('maxValLabel');
        const track = document.getElementById('slider-track');

        let minVal = parseInt(minInput.value);
        let maxVal = parseInt(maxInput.value);
        const minGap = 100;

        if (maxVal - minVal < minGap) {
            if (event.target.id === 'minPrice') {
                minInput.value = maxVal - minGap;
            } else {
                maxInput.value = minVal + minGap;
            }
        }

        minLabel.innerText = minInput.value;
        maxLabel.innerText = maxInput.value;
        const percentLeft = ((minInput.value - minInput.min) / (minInput.max - minInput.min)) * 100;
        const percentRight = 100 - (((maxInput.value - maxInput.min) / (maxInput.max - maxInput.min)) * 100);
        
        track.style.left = percentLeft + "%";
        track.style.right = percentRight + "%";
    };
    window.resetPriceFilter = () => {
    const minInput = document.getElementById('minPrice');
    const maxInput = document.getElementById('maxPrice');
    
    if (!minInput || !maxInput) return;

    minInput.value = 5;
    maxInput.value = 3600;

    window.updateDualPrice();
};

    window.addEventListener('DOMContentLoaded', () => {
        if(document.getElementById('minPrice')) updateDualPrice();
    });
})();
})