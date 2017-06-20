# Roundhouse Theme SCSS Core

These files contain generic values & helper functions to be used throughout the theme.
    - Values set in `./theme-defaults.scss` should be sensible defaults.
    - Any theme customizations and overrides (for theme colors or layout widths) should be added to `./theme-options.scss`
    - Files in this `core/` directory should not write anything to compiled stylesheets.
    - All loader files in each bundle should import `../core/loader` to make use of these utilities.
        - BUG: "Any theme customizations and overrides (for theme colors or layout widths) should be added to `./theme-options.scss` or similar SCSS file in the `../site/` directory." This means that `site/theme-options.scss` will either need to also be added to each bundle, or moved to `core/`
        - RESOLVED: `theme-options.scss` was added to core, and the readme was updated.

## theme-defaults.scss
    - Contains default color, font, breakpoint and layout values.
    - This file contains fallback values and should not be edited directly when building a new theme.
    - Colors
        - Adds a customized list of 24 basic colors, available as a SCSS map `$colors`
        - Adds a `color()` shortcut function to get color values.
    - Typography
        - Adds a basic font families, available as a SCSS map `$font-families`
        - Adds a `font-family()` shortcut function to get font family values.
        - Because fonts use spaces and require single quotes, the standard font-families list should be wrapped in a set of double quotes.

## theme-options.scss
	- File layout and properties should look similar to `./theme-defaults.scss`
    - Overrides default theme values. Should be updated in each new theme to make common style values available to all bundles.
    - Makes use of SCSS `map-merge()` to overwrite default maps with only the item keys and values that are being customized.
    