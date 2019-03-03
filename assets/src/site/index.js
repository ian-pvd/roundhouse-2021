/**
 * Site Entry Point
 */

// Global Scripts
import toggleMenuDisplay from './js/toggleMenuDisplay';

// Global Styles
import './scss/index.scss';

// Enable HMR
if (module.hot) {
  module.hot.accept();
}

// Enquue Site JS Modules
document.addEventListener('DOMContentLoaded', () => {
  toggleMenuDisplay('mobile-nav', 'page');
});
