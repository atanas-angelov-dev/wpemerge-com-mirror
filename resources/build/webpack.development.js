/**
 * The external dependencies.
 */
const { ProvidePlugin, WatchIgnorePlugin } = require('webpack');
const CleanWebpackPlugin = require('clean-webpack-plugin');
const ExtractTextPlugin = require('extract-text-webpack-plugin');

/**
 * The internal dependencies.
 */
const utils = require('./lib/utils');
const configLoader = require('./config-loader');
const spriteSmith = require('./spritesmith');
const postcss = require('./postcss');
const prism = require('./prism');
const browsersync = require('./browsersync');

/**
 * Setup the env.
 */
const { env: envName } = utils.detectEnv();

/**
 * Setup babel loader.
 */
const babelLoader = {
  loader: 'babel-loader',
  options: {
    cacheDirectory: true,
    comments: false,
    presets: [
      [
        'env',
        {
          targets: {
            browsers: ['last 3 versions'],
          },
        },
      ],
      // airbnb not included as stage-2 already covers it
      'stage-2',
    ],
    plugins: [
      prism,
    ],
  },
};

/**
 * Setup extract text plugin.
 */
const extractSass = new ExtractTextPlugin({
  filename: '../styles/[name].css',
});

/**
 * Setup webpack plugins.
 */
const plugins = [
  new CleanWebpackPlugin(utils.distPath(), {
    root: utils.themeRootPath(),
  }),
  new WatchIgnorePlugin([
    utils.distImagesPath('sprite.png'),
    utils.distImagesPath('sprite@2x.png'),
  ]),
  new ProvidePlugin({
    $: 'jquery',
    jQuery: 'jquery',
  }),
  extractSass,
  spriteSmith,
  browsersync,
];

/**
 * Export the configuration.
 */
module.exports = {
  /**
   * The input.
   */
  entry: require('./webpack/entry'),

  /**
   * The output.
   */
  output: {
    path: utils.distPath('scripts'),
  },

  /**
   * Resolve utilities.
   */
  resolve: require('./webpack/resolve'),

  /**
   * Resolve the dependencies that are available in the global scope.
   */
  externals: require('./webpack/externals'),

  /**
   * Setup the transformations.
   */
  module: {
    rules: [
      {
        enforce: 'pre',
        test: /\.(js|jsx|css|scss)$/,
        use: 'import-glob',
      },
      {
        test: utils.themeRootPath('config.json'),
        use: configLoader,
      },
      {
        test: /\.(js|jsx)$/,
        exclude: /node_modules/,
        use: babelLoader,
      },
      {
        test: /\.(css|scss)$/,
        use: extractSass.extract({
          use: [
            {
              loader: 'css-loader',
              options: {
                minimize: false,
              },
            },
            'sass-loader',
            {
              loader: 'postcss-loader',
              options: postcss,
            },
          ],
        }),
      },
      {
        test: /images[\\/].*\.(ico|jpg|jpeg|png|svg|gif)$/,
        use: 'file-loader?name=../images/[name].[ext]',
      },
      {
        test: /fonts[\\/].*\.(eot|svg|ttf|woff|woff2)$/,
        use: 'file-loader?name=../fonts/[name].[ext]',
      },
    ],
  },

  /**
   * Setup the transformations.
   */
  plugins,

  /**
   * Setup the development tools.
   */
  mode: envName,
  cache: true,
  bail: false,
  watch: true,
  devtool: 'source-map',
};
