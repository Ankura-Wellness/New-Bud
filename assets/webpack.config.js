const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const path = require( 'path' );
const webpack = require('webpack');

module.exports = {
    context: __dirname,
    entry: ['./src/index.js'],
    output: {
        path: path.resolve( __dirname, './dist' ),
        filename: 'main.js',
        assetModuleFilename: 'images/[name][ext]',
        library: 'zsi'
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: 'babel-loader',
            },{
                test: /\.scss$/,
                exclude: /node_modules/,
                use: [
                    'style-loader',
                    'css-loader',
                    'sass-loader'
                ]
            },{
                test: /\.(png|jpe?g|gif|webp)$/,
                type: 'asset/resource'
            }
        ]
    },
    plugins: [
        new webpack.DefinePlugin({
            PRODUCTION: JSON.stringify(true),
            APIPATH: JSON.stringify( 'https://localhost/zantyes' )
        })
        // new MiniCssExtractPlugin,
        // CleanWebpackPlugin
    ],
    devtool: 'source-map'
};