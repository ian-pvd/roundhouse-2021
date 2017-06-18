// Plugin imports
const autoprefixer = require('autoprefixer');

// Config
module.exports = (ctx) => {
  return {
    plugins: [
      autoprefixer(),
    ],
  };
}
