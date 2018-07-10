# Roundhouse Theme Core

This theme uses:
* Webpack
* SCSS
* StyleLint
* ESLint
* See Also: ../package.json

## Webpack

@ TODO — Detail webpack config settings.
See: `./config/webpack.config.js`

## SCSS

### SCSS Theme Core
The styles for this theme are written in SCSS and leveage SCSS mixins, functions and variables. A set of helper functions, theme mixins and reusable values has been included in the the `scss/core` directory. These files do not output any CSS themselves, but are intended to be imported into each entry point when complied.

Core files include:
* Utilities - SCSS helper functions.
* Breakpoints – Sets default breakpoint sizes and includes a breakpoint shortcut mixin.
* Colors – Sets 32 default named colors and includes a color picker mixin.
* Layout – Reusable layout style mixins.
* Grid – A mixin for setting grid layouts.
* Z-Index – Default z-index values and a z-index shortcut mixin.
* Typography – Sets 3 default named font families and includes a font picker mixin.

### SCSS Theme Variables & Options

The theme variables file stores common vaules used throughout the theme like primary colors, fonts, content width, spacing values, borders, etc.

The theme options file allows default values set in `scss/core` to be overwritten, and additional values to be added. Makes use of SCSS `map-merge()` to overwrite default maps with only the item keys and values that are being customized.

For example, to change a default color value, add the following in `_options.scss`:
```scss
$custom-colors: (
  green: seagreen,
);
$colors: map-merge($colors, $custom-colors);
```

### Theme Modules

Lean and reusable SCSS for styling component markup used throughout the site. For example, post grids or newsletter signup forms which use the same markup but are displayed in different entry points.

Module files are imported before entry point styles so that they can be further customized for each entry point.

### Theme Entry Points

Each theme entrypoint has its own folder, and each folder contains an `index.scss` file which imports the theme core SCSS first, followed by any reusable theme modules, and then the files for styling that entry point.

For example, in `scss/home/index.scss`:
```scss
// Load Theme Core
@import '../index';

// Load Module Styles
@import '../modules/grid';

// Load Home Styles
@import 'home';
```
