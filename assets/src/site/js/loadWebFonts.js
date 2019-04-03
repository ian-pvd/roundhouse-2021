/**
 * Web Font Loader Config
 *
 * Loads web fonts async using webFontLoader
 */

import webFontLoader from 'webfontloader';

function loadWebFonts() {
  webFontLoader.load({
    google: {
      families: [
        'Oswald:600',
        'Open Sans:400,400i,700,700i',
      ],
    },
  });
}

export default loadWebFonts;
