var path = require("path");
var webpack = require("webpack");

module.exports = {
    entry: path.resolve(__dirname, "public/scripts/index.js"),
    output: {
        filename: "index.js",
        path: path.resolve(__dirname, "dist/scripts")
    },
    module: {
        rules: [
            {
                test: /\.(js|jsx)$/,
                exclude: /node_modules/,
                use: "babel-loader",
                query: {
                    preset: ["latest"]
                }
            }
        ]
    },
    plugins: [
        new webpack.optimize.UglifyJsPlugin()
    ]
};
