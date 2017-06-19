const wpAssets = require('./wp-assets');
const webpack = require('webpack');
const path = require('path');

// Plugins
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const LiveReloadPlugin = require('webpack-livereload-plugin');
const StylelintPlugin = require('stylelint-webpack-plugin');
const GitHash = require('webpack-git-hash');
const CleanPlugin = require('clean-webpack-plugin');
const StatsPlugin = require('webpack-stats-plugin').StatsWriterPlugin;

/**
 * Plugins
 *
 * Set default plugins and configure based on whether or not we're running HMR
 *
 * @param {array}  additionalPlugins - array containing any additional plugins
 * @param {object} env               - environmental variables
 */
module.exports = function processPlugins(additionalPlugins, env) {
  const cssTemplate = {
    filename: env.production ? 'css/[name].[hash].min.css' : 'css/[name].css' };
  const newPlugins = additionalPlugins || [];
  let plugins = [
    new StylelintPlugin({
      configFile: path.join(__dirname, '../config/stylelint.config.js'),
    }),
    new webpack.NamedModulesPlugin(),
  ];

  plugins = plugins.concat(newPlugins);

  // Production-only plugins
  if (env.production) {
    plugins.push(
      new webpack.NoEmitOnErrorsPlugin(),
      new GitHash(),
      new CleanPlugin(['static/js', 'static/css'], {
        root: path.join(__dirname, '../../'),
      })
    );
  }

  if (env.watch) {
    plugins.push(
      new LiveReloadPlugin({ appendScriptTag: true })
    );
  }

  if (! env.dev && ! env.huron) {
    // Non-HMR plugins
    plugins.push(
      new ExtractTextPlugin(cssTemplate),
      // Will move all modules used in 2 or more chunks into the commons chunk (must be loaded first)
      new webpack.optimize.CommonsChunkPlugin({
        name: 'common',
        minChunks: 2,
      }),
      // Must be added after GitHash or hash will not be added to versioned asset manifest
      new StatsPlugin({
        transform: (stats) => wpAssets(stats),
        filename: '../inc/versioned-assets.php',
      })
    );
  } else {
    // HMR plugins
    plugins.push(
      new webpack.HotModuleReplacementPlugin()
    );
  }

  return plugins;
};