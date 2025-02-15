const isTouch = 'ontouchstart' in window || navigator.maxTouchPoints > 0 || navigator.msMaxTouchPoints > 0;

document.addEventListener('DOMContentLoaded', function () {
    // Scroll header function
    function scrollHeader() {
        const header = document.getElementById('header');
        if (header) {
            header.classList.toggle('scrolled', window.scrollY > 75);
        }
    }

    // Parallax background function
    function parallaxBackground() {
        const parallaxElements = document.querySelectorAll('.parallax');
        parallaxElements.forEach(el => {
            el.style.backgroundPositionY = (window.scrollY * 0.3) + 'px';
        });
    }

    scrollHeader();

    // Scroll Events
    if (!isTouch) {
        window.addEventListener('scroll', function () {
            scrollHeader();
            parallaxBackground();
        });
    }

    // Touch scroll    
    if (isTouch) {
        document.addEventListener('touchmove', function (e) {
            scrollHeader();
        });
    }

    //Smooth scroll to start    
    const toStart = document.getElementById('to-start');
    if (toStart) {
        toStart.addEventListener('click', function (e) {
            e.preventDefault();
            const start = document.getElementById('start');
            if (start) {
                const startY = start.getBoundingClientRect().top + window.scrollY;
                const headerOffset = 45;
                window.scrollTo({ top: startY - headerOffset, behavior: 'smooth' });
            }
        });
    }


    //Smooth scroll to top    
    const toTop = document.getElementById('to-top');
    if (toTop) {
        toTop.addEventListener('click', function (e) {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // Responsive Menu    
    const toggle = document.getElementById('toggle');
    const overlay = document.getElementById('overlay');
    const body = document.body;

    if (toggle) {
        toggle.addEventListener('click', function () {
            this.classList.toggle('active');
            overlay.classList.toggle('open');
            body.classList.toggle('mobile-nav-open');
        });
    }

    // Tree Menu    
    function initTreeMenu(options = {}) {
        const { delay = 300, openActive = false, closeOther = false } = options;

        const trees = document.querySelectorAll('.tree');
        trees.forEach(tree => {
            const items = tree.querySelectorAll('li');
            items.forEach(item => {
                const children = item.querySelector('ul');
                if (children) {
                    const toggler = document.createElement('span');
                    toggler.className = 'toggler';
                    item.insertBefore(toggler, item.firstChild);

                    const toggleItem = () => {
                        if (closeOther) {
                            const siblings = item.parentElement.children;
                            Array.from(siblings).forEach(sibling => {
                                if (sibling !== item) {
                                    sibling.classList.remove('tree-opened');
                                    sibling.classList.add('tree-closed');
                                    const siblingChildren = sibling.querySelector('ul');
                                    if (siblingChildren) {
                                        siblingChildren.style.display = 'none';
                                    }
                                }
                            });
                        }

                        item.classList.toggle('tree-opened');
                        item.classList.toggle('tree-closed');
                        children.style.display = children.style.display === 'none' ? 'block' : 'none';
                    };

                    toggler.addEventListener('click', (e) => {
                        e.preventDefault();
                        e.stopPropagation();
                        setTimeout(toggleItem, delay);
                    });

                    // Initially hide children
                    children.style.display = 'none';
                    item.classList.add('tree-closed');

                    if (openActive && item.classList.contains('active')) {
                        toggleItem();
                    }
                } else {
                    item.classList.add('tree-empty');
                }
            });
        });
    }

    // Initialize treemenu with options
    setTimeout(() => initTreeMenu({ delay: 300, openActive: true, closeOther: false }), 300);

});
