const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");
var path = require("path");

// change these variables to fit your project
const jsPath = "./src/js";
const cssPath = "./src/scss";
const outputPath = "dist";
const localDomain = "http://studio-ilk:8888";
const entryPoints = {
  // 'app' is the output name, people commonly use 'bundle'
  // you can have more than 1 entry point
  bundle: jsPath + "/index.js",
};

module.exports = {
  entry: entryPoints,
  output: {
    path: path.resolve(__dirname, outputPath),
    filename: "[name].js",
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: "[name].css",
    }),

    new BrowserSyncPlugin(
      {
        proxy: localDomain,
        files: [outputPath + "/*.css", "./*.php"],
        injectCss: true,
      },
      { reload: false }
    ),
  ],
  module: {
    rules: [
      {
        // Look for any .js files.
        test: /\.js$/,
        // Exclude the node_modules folder.
        exclude: /node_modules/,
        // Use babel loader to transpile the JS files.
        loader: "babel-loader",
      },
      {
        test: /\.s?[c]ss$/i,
        use: [MiniCssExtractPlugin.loader, "css-loader", "sass-loader"],
      },
      {
        test: /\.sass$/i,
        use: [
          MiniCssExtractPlugin.loader,
          "css-loader",
          {
            loader: "sass-loader",
            options: {
              sassOptions: { indentedSyntax: true },
            },
          },
        ],
      },
      // {
      //   test: /\.(png|svg|jpg|jpeg|gif)$/i,
      //   type: "asset/resource",
      // },
      {
        test: /\.(jpg|jpeg|png|gif|woff|woff2|eot|ttf|otf|svg)$/i,
        use: "url-loader?limit=1024",
      },
    ],
  },
};
