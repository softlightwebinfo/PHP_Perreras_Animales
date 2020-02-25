var path = require('path');
var webpack = require('webpack');

module.exports = {
    entry: './system/src/js/main.js',
    output: {
        path: path.resolve(__dirname, 'public/js'),
        filename: './main.bundle.js'
    },
    module: {
        loaders: [
            {
                test: /\.js$/,
                loader: 'babel-loader',
                query: {
                    presets: ['es2015']
                }
            },

            {test: /\.css$/, loader: "style!css"}
        ]
    },
    stats: {
        colors: true
    },
    devtool: 'source-map'
};