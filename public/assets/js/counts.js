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
    const valueCompleteProject = document.getElementById('completed-projects');
    const valueCustomers = document.getElementById('total-customers');
    const valueProduct = document.getElementById('total-products');
    const valuePortfolio = document.getElementById('portfolio-count');

    startCounting('completed-projects', parseInt(valueCompleteProject.innerHTML), 3000); // 40 is the target value, 2000ms (2 seconds) is the duration
    startCounting('total-customers', parseInt(valueCustomers.innerHTML), 3000); // 2320 is the target value, 2000ms (2 seconds) is the duration
    startCounting('total-products', parseInt(valueProduct.innerHTML), 3000); // 134 is the target value, 2000ms (2 seconds) is the duration
    startCounting('portfolio-count', parseInt(valuePortfolio.innerHTML), 3000); // 3 is the target value, 2000ms (2 seconds) is the duration
});
