// Google Analytics Configuration
// Replace 'GA_MEASUREMENT_ID' with your actual Google Analytics Measurement ID

// Google Analytics 4 (GA4) - Recommended
function initGoogleAnalytics() {
    // Replace this with your actual GA4 Measurement ID
    const GA_MEASUREMENT_ID = 'G-2C8NK64LQZ'; // Replace with your actual ID

    // Load Google Analytics
    const script = document.createElement('script');
    script.async = true;
    script.src = `https://www.googletagmanager.com/gtag/js?id=${GA_MEASUREMENT_ID}`;
    document.head.appendChild(script);

    // Initialize gtag
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', GA_MEASUREMENT_ID);

    // Track page views
    gtag('event', 'page_view', {
        page_title: document.title,
        page_location: window.location.href,
    });

    // Track custom events
    function trackEvent(eventName, parameters = {}) {
        gtag('event', eventName, parameters);
    }

    // Track chapter readings
    function trackChapterRead(chapterName) {
        trackEvent('chapter_read', {
            chapter_name: chapterName,
            page_location: window.location.href,
        });
    }

    // Track navigation
    function trackNavigation(linkText, linkUrl) {
        trackEvent('navigation_click', {
            link_text: linkText,
            link_url: linkUrl,
        });
    }

    // Make functions globally available
    window.trackEvent = trackEvent;
    window.trackChapterRead = trackChapterRead;
    window.trackNavigation = trackNavigation;
}

// Initialize when DOM is loaded
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initGoogleAnalytics);
} else {
    initGoogleAnalytics();
}
