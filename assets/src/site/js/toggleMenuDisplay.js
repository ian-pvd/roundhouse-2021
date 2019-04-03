/**
 * Toggle Menu Display
 *
 * Enables showing and hiding a menu by clicking a toggle button.
 */

const toggleMenuDisplay = (menuID, wrapperID) => {
  const menuToggle = document.getElementById(`${menuID}-toggle`);
  const pageWrapper = document.getElementById(wrapperID);

  if ((menuToggle) && (pageWrapper)) {
    menuToggle.addEventListener('click', (e) => {
      pageWrapper.classList.toggle(`toggle__${menuID}--active`);
      menuToggle.setAttribute(
        'aria-expanded',
        `${'true' !== menuToggle.getAttribute('aria-expanded')}`
      );
      e.preventDefault();
    });
  }
};

export default toggleMenuDisplay;
