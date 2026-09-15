import './bootstrap';

const navMenu = document.querySelector('.nav-menu');
const magicLine = document.querySelector('.magic-line');
const navItems = document.querySelectorAll('.nav-menu > a, .nav-menu > .nav-item');

if (navMenu && magicLine && navItems.length > 0) {
    const currentPath = window.location.pathname;
    let activeItem = null;
    
    if (currentPath !== '/') {
        navItems.forEach(item => {
            if (item.tagName.toLowerCase() === 'a' && item.getAttribute('href') === currentPath) {
                activeItem = item;
                item.classList.add('active-nav');
            }
        });
    }

    function resetMagicLine() {
        if (activeItem) {
            const { offsetLeft, offsetWidth } = activeItem;
            magicLine.style.left = `${offsetLeft}px`;
            magicLine.style.width = `${offsetWidth}px`;
            magicLine.style.opacity = '1';
        } else {
            magicLine.style.opacity = '0';
        }
    }

    setTimeout(resetMagicLine, 100);
    window.addEventListener('resize', resetMagicLine);

    navItems.forEach(item => {
        item.addEventListener('mouseenter', (e) => {
            const { offsetLeft, offsetWidth } = e.currentTarget;
            magicLine.style.left = `${offsetLeft}px`;
            magicLine.style.width = `${offsetWidth}px`;
            magicLine.style.opacity = '1';
        });
    });

    navMenu.addEventListener('mouseleave', resetMagicLine);
}

// Mega Menu Hover Logic
const categoryLinks = document.querySelectorAll('.cat-link');
const productGroups = document.querySelectorAll('.mega-product-group');
const megaNavItem = document.querySelector('.nav-item'); // Thẻ chứa mega menu

if (categoryLinks.length > 0 && productGroups.length > 0) {
    // Logic đổi tab khi hover
    categoryLinks.forEach(link => {
        link.addEventListener('mouseenter', (e) => {
            categoryLinks.forEach(l => l.classList.remove('active'));
            e.target.classList.add('active');

            productGroups.forEach(group => group.classList.remove('active'));
            const targetId = e.target.getAttribute('data-target');
            const targetGroup = document.getElementById(targetId);
            if (targetGroup) {
                targetGroup.classList.add('active');
            }
        });
    });

    // Reset lại tab mặc định (tab đầu tiên) khi chuột rời khỏi toàn bộ vùng Mega menu
    if (megaNavItem) {
        megaNavItem.addEventListener('mouseleave', () => {
            // Đợi 300ms cho CSS fade-out xong rồi mới reset để không bị giật hình
            setTimeout(() => {
                categoryLinks.forEach(l => l.classList.remove('active'));
                productGroups.forEach(group => group.classList.remove('active'));

                categoryLinks[0].classList.add('active');
                productGroups[0].classList.add('active');
            }, 300);
        });
    }
}

// Hero Slider Logic
const track = document.querySelector('.hero-banner-track');
const btnNext = document.querySelector('.btn-next');
const btnPrev = document.querySelector('.btn-prev');

if (track && btnNext && btnPrev) {
    let isTransitioning = false;

    btnNext.addEventListener('click', () => {
        if (isTransitioning) return;
        isTransitioning = true;
        
        track.style.transition = 'transform 0.5s ease-in-out';
        track.style.transform = 'translateX(-100%)';
        
        track.addEventListener('transitionend', function handler() {
            track.removeEventListener('transitionend', handler);
            track.style.transition = 'none';
            track.appendChild(track.firstElementChild);
            track.style.transform = 'translateX(0)';
            isTransitioning = false;
        });
    });

    btnPrev.addEventListener('click', () => {
        if (isTransitioning) return;
        isTransitioning = true;
        
        track.prepend(track.lastElementChild);
        track.style.transition = 'none';
        track.style.transform = 'translateX(-100%)';
        
        // Trigger layout to apply instant transform
        track.offsetHeight;
        
        track.style.transition = 'transform 0.5s ease-in-out';
        track.style.transform = 'translateX(0)';
        
        track.addEventListener('transitionend', function handler() {
            track.removeEventListener('transitionend', handler);
            isTransitioning = false;
        });
    });
}

// Product Showcase Slider
const showcaseTrack = document.querySelector('.showcase-track');
const showcaseNext = document.querySelector('.showcase-next');
const showcasePrev = document.querySelector('.showcase-prev');
const showcaseDots = document.querySelectorAll('.showcase-pagination .dot');

if (showcaseTrack && showcaseNext && showcasePrev) {
    let showcaseTransitioning = false;
    let currentIndex = 0;
    const totalItems = 4; // 4 unique products mapped to 4 dots

    function updateDots() {
        if (showcaseDots.length > 0) {
            showcaseDots.forEach(dot => dot.classList.remove('active'));
            let activeIndex = ((currentIndex % totalItems) + totalItems) % totalItems;
            if (showcaseDots[activeIndex]) {
                showcaseDots[activeIndex].classList.add('active');
            }
        }
    }

    showcaseNext.addEventListener('click', () => {
        if (showcaseTransitioning) return;
        showcaseTransitioning = true;
        
        currentIndex++;
        updateDots();
        
        const card = showcaseTrack.firstElementChild;
        const cardWidth = card.offsetWidth;
        const gap = parseInt(window.getComputedStyle(showcaseTrack).gap) || 24;
        const slideDistance = cardWidth + gap;

        showcaseTrack.style.transition = 'transform 0.4s ease-in-out';
        showcaseTrack.style.transform = `translateX(-${slideDistance}px)`;
        
        showcaseTrack.addEventListener('transitionend', function handler() {
            showcaseTrack.removeEventListener('transitionend', handler);
            showcaseTrack.style.transition = 'none';
            showcaseTrack.appendChild(showcaseTrack.firstElementChild);
            showcaseTrack.style.transform = 'translateX(0)';
            showcaseTransitioning = false;
        });
    });

    showcasePrev.addEventListener('click', () => {
        if (showcaseTransitioning) return;
        showcaseTransitioning = true;
        
        currentIndex--;
        updateDots();
        
        const card = showcaseTrack.lastElementChild;
        const cardWidth = card.offsetWidth;
        const gap = parseInt(window.getComputedStyle(showcaseTrack).gap) || 24;
        const slideDistance = cardWidth + gap;

        showcaseTrack.prepend(showcaseTrack.lastElementChild);
        showcaseTrack.style.transition = 'none';
        showcaseTrack.style.transform = `translateX(-${slideDistance}px)`;
        
        // Trigger layout
        showcaseTrack.offsetHeight;
        
        showcaseTrack.style.transition = 'transform 0.4s ease-in-out';
        showcaseTrack.style.transform = 'translateX(0)';
        
        showcaseTrack.addEventListener('transitionend', function handler() {
            showcaseTrack.removeEventListener('transitionend', handler);
            showcaseTransitioning = false;
        });
    });
}

// Review Slider Logic
const reviewTrack = document.querySelector('.review-track');
const reviewNext = document.querySelector('.review-next');
const reviewPrev = document.querySelector('.review-prev');
const reviewDots = document.querySelectorAll('.review-pagination .dot');

if (reviewTrack && reviewNext && reviewPrev) {
    let reviewTransitioning = false;
    let reviewCurrentIndex = 0;
    const reviewTotalDots = reviewDots.length;

    function updateReviewDots() {
        if (reviewTotalDots > 0) {
            reviewDots.forEach(dot => dot.classList.remove('active'));
            let activeIndex = ((reviewCurrentIndex % reviewTotalDots) + reviewTotalDots) % reviewTotalDots;
            if (reviewDots[activeIndex]) {
                reviewDots[activeIndex].classList.add('active');
            }
        }
    }

    reviewNext.addEventListener('click', () => {
        if (reviewTransitioning) return;
        reviewTransitioning = true;
        
        reviewCurrentIndex++;
        updateReviewDots();
        
        const card = reviewTrack.firstElementChild;
        const cardWidth = card.offsetWidth;

        reviewTrack.style.transition = 'transform 0.5s ease-in-out';
        reviewTrack.style.transform = `translateX(-${cardWidth}px)`;
        
        reviewTrack.addEventListener('transitionend', function handler() {
            reviewTrack.removeEventListener('transitionend', handler);
            reviewTrack.style.transition = 'none';
            reviewTrack.appendChild(reviewTrack.firstElementChild);
            reviewTrack.style.transform = 'translateX(0)';
            reviewTransitioning = false;
        });
    });

    reviewPrev.addEventListener('click', () => {
        if (reviewTransitioning) return;
        reviewTransitioning = true;
        
        reviewCurrentIndex--;
        updateReviewDots();
        
        const card = reviewTrack.lastElementChild;
        const cardWidth = card.offsetWidth;

        reviewTrack.prepend(reviewTrack.lastElementChild);
        reviewTrack.style.transition = 'none';
        reviewTrack.style.transform = `translateX(-${cardWidth}px)`;
        
        // Trigger layout
        reviewTrack.offsetHeight;
        
        reviewTrack.style.transition = 'transform 0.5s ease-in-out';
        reviewTrack.style.transform = 'translateX(0)';
        
        reviewTrack.addEventListener('transitionend', function handler() {
            reviewTrack.removeEventListener('transitionend', handler);
            reviewTransitioning = false;
        });
    });
}
