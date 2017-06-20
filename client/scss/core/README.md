# Roundhouse Theme SCSS Core

These files contain generic values & helper functions to be used throughout the theme.
    - Values set here should be sensible defaults. 
    - Any theme customizations and overrides (for theme colors or layout widths) should be added to a "theme-options" or similar SCSS file in the `../site/` directory. 
    - Files in the `core/` directory should not write anything to compiled stylesheets.
    - All loader files in each bundle should import `../core/loader` to make use of these utilities.