/**
 * Mobile Breadcrumb Navigation (Fixed & Improved)
 */
class MobileBreadcrumb {
    constructor() {
        this.breadcrumbContainer = document.querySelector('.mobile-breadcrumb');
        this.breadcrumbPath = document.querySelector('.breadcrumb-path');
        this.breadcrumbBack = document.querySelector('.breadcrumb-back');
        this.navMenu = document.querySelector('.navbar-nav');
        this.navToggler = document.querySelector('.navbar-toggler');
        this.navClose = document.querySelector('.btn-nav-close');

        this.breadcrumbStack = [];
        this.isMobile = window.innerWidth <= 1020;

        this.init();
    }

    init() {
        if (this.navToggler) {
            this.navToggler.addEventListener('click', () => this.handleMenuOpen());
        }

        if (this.navClose) {
            this.navClose.addEventListener('click', () => this.handleMenuClose());
        }

        if (this.breadcrumbBack) {
            this.breadcrumbBack.addEventListener('click', (e) => this.handleBackClick(e));
        }

        this.attachMenuItemListeners();

        window.addEventListener('resize', () => this.handleResize());
    }

    // MENU OPEN
    handleMenuOpen() {
        if (this.isMobile) {
            this.navMenu.classList.add('active');

            this.breadcrumbStack = ['Home'];
            this.updateBreadcrumb();

            this.breadcrumbContainer.style.display = 'flex';
            this.breadcrumbBack.style.display = 'none';

            this.collapseAllDropdowns();
        }
    }

    // MENU CLOSE
    handleMenuClose() {
        this.navMenu.classList.remove('active');

        this.breadcrumbContainer.style.display = 'none';
        this.breadcrumbStack = [];

        this.collapseAllDropdowns();
    }

    // WINDOW RESIZE
    handleResize() {
        const wasMobile = this.isMobile;
        this.isMobile = window.innerWidth <= 1020;

        if (wasMobile && !this.isMobile) {
            this.handleMenuClose();
        }
    }

    // ATTACH CLICK EVENTS (ALL LEVELS)
    attachMenuItemListeners() {
        const menuItems = this.navMenu.querySelectorAll('.nav-item > .nav-link');

        menuItems.forEach((item) => {
            item.addEventListener('click', (e) => {
                if (!this.isMobile) return;

                const parentItem = item.closest('.nav-item');
                const dropdown = parentItem.querySelector('.dropdown');

                const itemText = item.textContent.trim();

                // If dropdown exists → prevent navigation
                if (dropdown) {
                    e.preventDefault();

                    this.breadcrumbStack.push(itemText);
                    this.updateBreadcrumb();

                    if (this.breadcrumbStack.length > 1) {
                        this.breadcrumbBack.style.display = 'flex';
                    }

                    this.toggleDropdown(dropdown, true);
                }
                // If final link → allow navigation but still show path
                else {
                    this.breadcrumbStack.push(itemText);
                    this.updateBreadcrumb();
                }
            });
        });
    }

    // SHOW / HIDE DROPDOWN
    toggleDropdown(dropdown, show = true) {
        if (show) {
            dropdown.style.maxHeight = '500px';
            dropdown.style.overflow = 'visible';
        } else {
            dropdown.style.maxHeight = '0';
            dropdown.style.overflow = 'hidden';
        }
    }

    // BACK BUTTON
    handleBackClick(e) {
        if (!this.isMobile) return;

        e.preventDefault();
        e.stopPropagation();

        if (this.breadcrumbStack.length > 1) {
            this.breadcrumbStack.pop();
            this.updateBreadcrumb();

            if (this.breadcrumbStack.length === 1) {
                this.breadcrumbBack.style.display = 'none';
            }

            this.collapseAllDropdowns();
        }
    }

    // UPDATE BREADCRUMB TEXT
    updateBreadcrumb() {
        if (this.breadcrumbPath) {
            this.breadcrumbPath.textContent = this.breadcrumbStack.join(' > ');
        }
    }

    // COLLAPSE ALL DROPDOWNS
    collapseAllDropdowns() {
        const dropdowns = this.navMenu.querySelectorAll('.dropdown');

        dropdowns.forEach((dropdown) => {
            this.toggleDropdown(dropdown, false);
        });
    }
}

// INIT
document.addEventListener('DOMContentLoaded', () => {
    new MobileBreadcrumb();
});