document.addEventListener('DOMContentLoaded', () => {
    const rotatingText = document.getElementById('rotating-text');
    const texts = ['WESLEY METHORST', 'A STUDENT', 'A DEVELOPER'];
    let index = 0;
    let charIndex = 0;
    let currentText = '';
    let isDeleting = false;

    function type() {
        if (isDeleting) {
            currentText = texts[index].substring(0, charIndex--);
        } else {
            currentText = texts[index].substring(0, charIndex++);
        }

        rotatingText.textContent = currentText;

        if (!isDeleting && charIndex === texts[index].length) {
            setTimeout(() => isDeleting = true, 2000);
        } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            index = (index + 1) % texts.length;
        }

        setTimeout(type, isDeleting ? 50 : 100);
    }

    type();

    let lastScrollTop = 0;
    const navbar = document.getElementById('navbar');
    
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    
        if (scrollTop > lastScrollTop) {
            // Scroll down
            navbar.classList.remove('top-4');
            navbar.classList.add('-translate-y-full');  // Verberg navbar door naar boven te verschuiven
        } else {
            // Scroll up
            navbar.classList.remove('-translate-y-full');
            navbar.classList.add('translate-y-0');  // Zet navbar terug naar zijn oorspronkelijke positie
        }
    
        lastScrollTop = scrollTop;
    });
    
});
