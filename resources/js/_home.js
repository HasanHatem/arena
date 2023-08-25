export function home() {

    let title = document.querySelector('[data-title]');

    if (title) {
        const words = title.innerText.split(" ");
        title.innerHTML = words.map((word, index) => {
            const spanClass = index < 3 ? 'bold' : '';
            return `<span class="${spanClass}">${word}</span>`;
        }).join(" ");

        const spans = title.querySelectorAll("span");

        spans.forEach((span, index) => {
            const delay = index * 100;
            span.style.animation = `fade-in 0.8s ${delay}ms forwards cubic-bezier(0.11, 0, 0.5, 0)`;
        });
    }

    // Animate titles
    const titles = document.querySelectorAll('h2');

    function animateOnScroll() {
        titles.forEach(title => {
            const titleTop = title.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;

            if (titleTop < windowHeight * 0.8) {
                title.classList.add('animate');
            }
        });
    }

    window.addEventListener('scroll', animateOnScroll);
    animateOnScroll();

}
