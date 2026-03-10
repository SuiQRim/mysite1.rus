/**
 * Scroll to Top Button Functionality
 */
(function() {
    'use strict';
    
    // Create scroll to top button
    document.addEventListener('DOMContentLoaded', function() {
        // Create button element
        const scrollBtn = document.createElement('button');
        scrollBtn.className = 'scroll-to-top-btn';
        scrollBtn.setAttribute('aria-label', 'Scroll to top');
        scrollBtn.innerHTML = '<span class="dashicons dashicons-arrow-up-alt2"></span>';
        
        // Append to body
        document.body.appendChild(scrollBtn);
        
        // Show/hide button on scroll
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                scrollBtn.classList.add('show');
            } else {
                scrollBtn.classList.remove('show');
            }
        });
        
        // Scroll to top on click
        scrollBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    });
})();
