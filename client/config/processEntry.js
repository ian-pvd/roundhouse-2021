/**
 * Entry Points
 *
 * Set default entry points and configure based on whether or not we're running HMR
 *
 * @param {object} entry        - object containing default entry points. these will be used for all build tasks
 * @param {object} siteEntry    - object containing location-specific entry points.
 *                                These should only be loaded on a specified page
 * @param {object} env          - environmental variables, including specific entry to compile
 */
module.exports = function processEntry(entry, siteEntry, env) {
  const specificEntry = siteEntry || {};
  let hotEntry = [];
  let entryNames = [];
  let newEntry = entry || {};

  if (env.singleEntry) {
    // If we have single entry, use only that entry point
    newEntry[env.singleEntry] = specificEntry[env.singleEntry];
  } else {
    // Otherwise, merge location-specific entry points with default entry points
    newEntry = Object.assign({}, specificEntry, newEntry);
  }

  // Get an array of entry names
  entryNames = Object.keys(newEntry);

  // Process HMR entry points
  if (env.dev || env.huron) {
    // Add default entry files to dev entry point
    if (entryNames.length) {
      hotEntry = hotEntry.concat(
        entryNames.reduce(
          (currEntry, nextEntry) => currEntry.concat(newEntry[nextEntry]),
          []
        )
      );

      // Reset entry to an empty object, as we will only use the "dev" entry point
      newEntry = {};
      newEntry.dev = hotEntry;
    }
  }

  return newEntry;
};