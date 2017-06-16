/**
 * Hollywood Life Webpack Config
 */

// Webpack dependencies
const path = require('path');

// Plugins
const ExtractTextPlugin = require('extract-text-webpack-plugin');

// Path definitions
const buildRoot = path.resolve(__dirname, '../../');
const appRoot = path.join(buildRoot, 'client/js/app');

// Theme name
const themename = path.join(__dirname, '../../').match(/([^\/]*)\/*$/)[1];

// PostCSS
const autoprefixer = require('autoprefixer');

// Function Config
const processEntry = require('./processEntry');
const processPlugins = require('./processPlugins');

module.exports = function(env) {
  env.singleEntry = process.env.ENTRY || false;
  
  // Define postCSS plugin options
  const postCSSPlugins = function (webpack) {
    return [
      autoprefixer(),
    ];
  };

  // Define CSS Loader Options
  const commonCSSRules = [
    {
      loader: 'css-loader',
      options: {
        minimize: {
          autoprefixer: false,
        },
      },
    },
    {
      loader: 'postcss-loader',
      options: {
        plugins: postCSSPlugins,
      },
    },
    'sass-loader'
  ];

  return {
    entry: processEntry(
      // Default
      {
        site: ['client/js/site/site.js'],
      },

      // Custom Package entry points
      {
        admin: ['client/js/admin/admin.js'],
        article: ['client/js/article/article.js'],
        archive: ['client/js/archive/archive.js'],
      },

      // Environment Info & Single Entry Point
      env
    ),

    devtool: 'source-map',

    // Outputs
    output: {
      path: path.join(__dirname, '../../static'),
      publicPath: ! env.dev && ! env.huron ?
        `wp-content/themes/${themename}/static/` :
        'http://localhost:8080/static',
      filename: env.production ?
        'js/[name].[githash].bundle.min.js' :
        'js/[name].bundle.js',
      chunkFilename: env.production ?
        'js/[name].[githash].chunk.min.js' :
        'js/[name].chunk.js',
    },

    // Where webpack resolves modules
    resolve: {
      modules: [
        buildRoot,
        'node_modules'
      ]
    },

    // Enable require('jquery') where jquery is already a global
    externals: {
      'jquery': 'jQuery',
    },

    // Plugins array we configured above
    plugins: processPlugins([], env),

    // Loaders
    module: {
      rules: [
        {
          enforce: 'pre',
          test: /\.js$/,
          exclude: /node_modules/,
          loader: 'eslint-loader',
          options: {
            configFile: 'client/config/.eslintrc',
          },
        },
        {
          test: /\.js$/,
          exclude: /node_modules/,
          loader: 'babel-loader',
        },

        {
          test: /\.scss$/,
          exclude: path.join(__dirname, '../js'),
          use: ! env.dev && ! env.huron ?
            ExtractTextPlugin.extract({
              fallback: 'style-loader',
              use: commonCSSRules,
            }) : ['style-loader'].concat(commonCSSRules),
        },
        {
          test: /\.scss$/,
          include: path.join(__dirname, '../js'),
          use: [
            'style-loader',
            'css-loader?modules&localIdentName=[name]__[local]__[hash:base64:5]&-autoprefixer',
            'postcss-loader',
            'sass-loader'
          ]
        },
        {
          test: /\.png(\?v=\d+\.\d+\.\d+)?$/,
          use: 'url-loader',
        },
        {
          test: /\.svg(\?v=\d+\.\d+\.\d+)?$/,
          use: {
            loader: 'url-loader',
            options: {
              limit: 10000,
              mimetype: 'image/svg+xml',
            },
          },
        },
        {
          test: /\.woff(\?v=\d+\.\d+\.\d+)?$/,
          use: {
            loader: 'url-loader',
            options: {
              limit: 10000,
              mimetype: 'application/font-woff',
            },
          },
        },
        {
          test: /\.ttf(\?v=\d+\.\d+\.\d+)?$/,
          use: {
            loader: 'url-loader',
            options: {
              limit: 10000,
              mimetype: 'application/octet-stream',
            },
          },
        },
        {
          test: /\.eot(\?v=\d+\.\d+\.\d+)?$/,
          use: 'file-loader',
        },
      ],
    },

    // Dev server setup. This is present in config as it is both easier to read
    // and allows us to configure headers
    devServer: {
      hot: true,
      quiet: false,
      noInfo: false,
      contentBase: '/static/',
      headers: { 'Access-Control-Allow-Origin': '*' },
      stats: { colors: true },
    },
  };
}
