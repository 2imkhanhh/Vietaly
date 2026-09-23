import './bootstrap';

const navMenu = document.querySelector('.nav-menu');
const magicLine = document.querySelector('.magic-line');
const navItems = document.querySelectorAll('.nav-menu > a, .nav-menu > .nav-item');

if (navMenu && magicLine && navItems.length > 0) {
    const currentPath = window.location.pathname;
    let activeItem = null;
    
    if (currentPath !== '/') {
        navItems.forEach(item => {
            const itemPath = item.getAttribute('href') || item.getAttribute('data-path');
            if (itemPath === currentPath || (itemPath === '/san-pham' && currentPath.startsWith('/chi-tiet-san-pham'))) {
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

document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('mobile-menu-toggle');
    const menuClose = document.getElementById('mobile-menu-close-btn');
    const navMenu = document.getElementById('nav-menu');
    const overlay = document.getElementById('mobile-menu-overlay');

    function toggleMenu() {
        if (navMenu && overlay) {
            navMenu.classList.toggle('active');
            overlay.classList.toggle('active');
            document.body.classList.toggle('no-scroll');
        }
    }

    if (menuToggle && menuClose && navMenu && overlay) {
        menuToggle.addEventListener('click', toggleMenu);
        menuClose.addEventListener('click', toggleMenu);
        overlay.addEventListener('click', toggleMenu);
    }

    // Handle mobile mega menu click
    const navItems = document.querySelectorAll('.nav-item');
    navItems.forEach(item => {
        item.addEventListener('click', function(e) {
            if (window.innerWidth <= 1024) {
                this.classList.toggle('open');
            }
        });
    });
});

    // Make product cards clickable
    const productCards = document.querySelectorAll('.product-card');
    productCards.forEach(card => {
        card.addEventListener('click', (e) => {
            // Check if they clicked the Add to Cart button
            const addBtn = e.target.closest('.btn-add');
            if (addBtn) {
                // Do not navigate if Add to Cart is clicked
                return;
            }
            
            // Navigate to product detail page
            window.location.href = '/chi-tiet-san-pham';
        });
    });

document.addEventListener('DOMContentLoaded', function() {
    // Language selector logic
    const langSelector = document.getElementById('language-selector');
    const currentLang = document.getElementById('current-lang');
    const langOptions = document.querySelectorAll('.lang-option');

    if (langSelector) {
        langSelector.addEventListener('click', (e) => {
            langSelector.classList.toggle('active');
        });

        document.addEventListener('click', (e) => {
            if (!langSelector.contains(e.target)) {
                langSelector.classList.remove('active');
            }
        });

        langOptions.forEach(option => {
            option.addEventListener('click', (e) => {
                e.stopPropagation();
                const newLang = option.getAttribute('data-value').toUpperCase();
                const oldLang = currentLang.textContent;
                
                currentLang.textContent = newLang;
                option.textContent = oldLang;
                option.setAttribute('data-value', oldLang.toLowerCase());
                
                langSelector.classList.remove('active');
            });
        });
    }
});
