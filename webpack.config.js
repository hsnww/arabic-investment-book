const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = (env, argv) => {
    const isProduction = argv.mode === 'production';

    return {
        entry: {
            main: './assets/js/main.js',
            analytics: './assets/js/analytics.js'
        },
        output: {
            path: path.resolve(__dirname, 'assets/dist'),
            filename: isProduction ? 'js/[name].[contenthash].js' : 'js/[name].js',
            clean: true
        },
        module: {
            rules: [
                {
                    test: /\.js$/,
                    exclude: /node_modules/,
                    use: {
                        loader: 'babel-loader',
                        options: {
                            presets: ['@babel/preset-env']
                        }
                    }
                },
                {
                    test: /\.scss$/,
                    use: [
                        MiniCssExtractPlugin.loader,
                        'css-loader',
                        'sass-loader'
                    ]
                },
                {
                    test: /\.css$/,
                    use: [
                        MiniCssExtractPlugin.loader,
                        'css-loader'
                    ]
                },
                {
                    test: /\.(png|jpg|jpeg|gif|svg)$/,
                    type: 'asset/resource',
                    generator: {
                        filename: 'images/[name].[hash][ext]'
                    }
                },
                {
                    test: /\.(woff|woff2|eot|ttf|otf)$/,
                    type: 'asset/resource',
                    generator: {
                        filename: 'fonts/[name].[hash][ext]'
                    }
                }
            ]
        },
        plugins: [
            new MiniCssExtractPlugin({
                filename: isProduction ? 'css/[name].[contenthash].css' : 'css/[name].css'
            })
        ],
        optimization: {
            splitChunks: {
                chunks: 'all',
                cacheGroups: {
                    vendor: {
                        test: /[\\/]node_modules[\\/]/,
                        name: 'vendors',
                        chunks: 'all'
                    }
                }
            }
        },
        devtool: isProduction ? 'source-map' : 'eval-source-map',
        resolve: {
            extensions: ['.js', '.scss', '.css'],
            alias: {
                '@': path.resolve(__dirname, 'assets/js'),
                '@scss': path.resolve(__dirname, 'assets/scss'),
                '@images': path.resolve(__dirname, 'assets/images')
            }
        }
    };
}; 