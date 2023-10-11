function startCounting(elementId, targetValue, duration) {
    const element = document.getElementById(elementId);
    const startValue = parseInt(element.textContent);
    const startTime = performance.now();

    function updateValue(timestamp) {
        const progress = (timestamp - startTime) / duration;

        if (progress < 1) {
            const value = Math.floor(startValue + progress * (targetValue - startValue));
            element.textContent = value;
            requestAnimationFrame(updateValue);
        } else {
            element.textContent = targetValue;
        }
    }

    requestAnimationFrame(updateValue);
}

window.addEventListener('DOMContentLoaded', () => {
    startCounting('completed-projects', 40, 3000); // 40 is the target value, 2000ms (2 seconds) is the duration
    startCounting('total-customers', 2320, 3000); // 2320 is the target value, 2000ms (2 seconds) is the duration
    startCounting('total-products', 134, 3000); // 134 is the target value, 2000ms (2 seconds) is the duration
    startCounting('portfolio-count', 3, 3000); // 3 is the target value, 2000ms (2 seconds) is the duration
});
