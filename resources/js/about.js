document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('.value-content-item');
    const navItems = document.querySelectorAll('.values-nav-item');

    if (sections.length > 0 && navItems.length > 0) {
        const observerOptions = {
            root: null,
            rootMargin: '-30% 0px -70% 0px',
            threshold: 0
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const id = entry.target.getAttribute('id');
                    
                    navItems.forEach(item => {
                        item.classList.remove('active');
                    });
                    
                    const activeNav = document.querySelector(`.values-nav-item[data-target="${id}"]`);
                    if (activeNav) {
                        activeNav.classList.add('active');
                    }

                    sections.forEach(section => {
                        section.classList.remove('active');
                    });
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);

        sections.forEach(section => {
            observer.observe(section);
        });

        navItems.forEach(item => {
            item.addEventListener('click', function() {
                const id = this.getAttribute('data-target');
                const targetSection = document.getElementById(id);
                if (targetSection) {
                    const headerHeight = document.querySelector('.main-header').offsetHeight || 85;
                    const elementPosition = targetSection.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerHeight - 40;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: "smooth"
                    });
                }
            });
        });
    }
});
