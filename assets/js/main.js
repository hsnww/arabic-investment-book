/**
 * Main JavaScript file for the Investment Book website
 * الملف الرئيسي لجافاسكريبت لموقع كتاب الاستثمار
 */

// Import dependencies
import 'bootstrap';
import '@fortawesome/fontawesome-free/css/all.css';

// Main application class
class InvestmentBook {
    constructor() {
        this.init();
    }

    init() {
        this.setupEventListeners();
        this.initializeComponents();
        this.setupScrollEffects();
        this.setupPrintStyles();
    }

    setupEventListeners() {
        // Navigation toggle for mobile
        const navbarToggler = document.querySelector('.navbar-toggler');
        if (navbarToggler) {
            navbarToggler.addEventListener('click', this.handleNavbarToggle.bind(this));
        }

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', this.handleSmoothScroll.bind(this));
        });

        // Print button functionality
        const printButtons = document.querySelectorAll('.btn-print');
        printButtons.forEach(button => {
            button.addEventListener('click', this.handlePrint.bind(this));
        });

        // Table of contents navigation
        this.setupTableOfContents();
    }

    initializeComponents() {
        // Initialize Bootstrap tooltips
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });

        // Initialize Bootstrap popovers
        const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
        popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl);
        });

        // Initialize Bootstrap collapse
        const collapseElementList = [].slice.call(document.querySelectorAll('.collapse'));
        collapseElementList.map(function (collapseEl) {
            return new bootstrap.Collapse(collapseEl);
        });
    }

    setupScrollEffects() {
        // Highlight current section in table of contents
        window.addEventListener('scroll', this.handleScrollHighlight.bind(this));

        // Back to top button
        this.setupBackToTop();
    }

    setupTableOfContents() {
        const tocLinks = document.querySelectorAll('.table-of-contents a');
        const sections = document.querySelectorAll('section[id]');

        if (tocLinks.length === 0 || sections.length === 0) return;

        // Create intersection observer for sections
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    this.updateActiveTocLink(entry.target.id);
                }
            });
        }, {
            threshold: 0.3,
            rootMargin: '-20% 0px -20% 0px'
        });

        // Observe all sections
        sections.forEach(section => {
            observer.observe(section);
        });
    }

    updateActiveTocLink(activeId) {
        const tocLinks = document.querySelectorAll('.table-of-contents a');
        tocLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${activeId}`) {
                link.classList.add('active');
            }
        });
    }

    handleNavbarToggle(event) {
        const navbarCollapse = document.querySelector('.navbar-collapse');
        if (navbarCollapse) {
            navbarCollapse.classList.toggle('show');
        }
    }

    handleSmoothScroll(event) {
        event.preventDefault();
        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);
        
        if (targetElement) {
            targetElement.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    }

    handlePrint(event) {
        event.preventDefault();
        window.print();
    }

    setupBackToTop() {
        const backToTopButton = document.createElement('button');
        backToTopButton.innerHTML = '<i class="fas fa-arrow-up"></i>';
        backToTopButton.className = 'btn btn-primary back-to-top';
        backToTopButton.style.cssText = `
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
            display: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: none;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
        `;

        document.body.appendChild(backToTopButton);

        // Show/hide button based on scroll position
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.style.display = 'block';
            } else {
                backToTopButton.style.display = 'none';
            }
        });

        // Scroll to top when clicked
        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    handleScrollHighlight() {
        // This is handled by the intersection observer in setupTableOfContents
    }

    setupPrintStyles() {
        // Add print-specific styles
        const printStyles = `
            @media print {
                .navbar, .footer, .navigation-buttons, .back-to-top {
                    display: none !important;
                }
                .chapter-content {
                    box-shadow: none !important;
                    margin: 0 !important;
                    padding: 20px !important;
                }
                body {
                    background: white !important;
                    font-size: 12pt !important;
                }
                h1, h2, h3, h4, h5, h6 {
                    page-break-after: avoid;
                }
                .highlight, .important-note, .warning-note, .example-box {
                    page-break-inside: avoid;
                }
            }
        `;

        const styleSheet = document.createElement('style');
        styleSheet.textContent = printStyles;
        document.head.appendChild(styleSheet);
    }
}

// Utility functions
const Utils = {
    // Debounce function for performance
    debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    },

    // Throttle function for scroll events
    throttle(func, limit) {
        let inThrottle;
        return function() {
            const args = arguments;
            const context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        };
    },

    // Format numbers with Arabic locale
    formatNumber(number) {
        return new Intl.NumberFormat('ar-SA').format(number);
    },

    // Get current page URL
    getCurrentPage() {
        return window.location.pathname;
    },

    // Check if element is in viewport
    isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }
};

// Initialize the application when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    new InvestmentBook();
});

// Export for use in other modules
export { InvestmentBook, Utils }; 