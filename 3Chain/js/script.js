document.addEventListener('DOMContentLoaded', function () {
    const countElement = document.getElementById('count-individual-learners');
    const triggerSection = document.getElementById('triggerSection');
    const finalCount = 205;
    const animationDuration = 2000; // 2000 milliseconds (2 seconds)
    const interval = animationDuration / finalCount;

    let currentCount = 1;

    const increaseCount = () => {
        countElement.textContent = currentCount;
        currentCount++;

        if (currentCount <= finalCount) {
            setTimeout(increaseCount, interval);
        }
    };

    const options = {
        threshold: 0.5 // Adjust the threshold as needed
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                increaseCount();
                observer.disconnect(); // Stop observing once triggered
            }
        });
    }, options);

    observer.observe(triggerSection);
});
