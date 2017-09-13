const argv = require('yargs').argv;
const path = require('path');
const webpack = require('webpack');

let env = argv.e || argv.env || 'local';

module.exports = {
	output: {
		path: path.join(process.cwd(), 'build_' + env + '/js'),
		filename: '[name].js',
		chunkFilename: '[name].js'
	},	

	plugins: [
		new webpack.optimize.CommonsChunkPlugin({
			name: 'vendor',
			minChunks: ({ resource }) => /node_modules/.test(resource)
		}),

		new webpack.optimize.CommonsChunkPlugin({
			name: 'manifest',
			minChunks: Infinity
		}),

		new webpack.ProvidePlugin({
			'jQuery': 'jquery',
			'window.jQuery': 'jquery',
			'jquery': 'jquery',
			'window.jquery': 'jquery',
			'$': 'jquery',
			'window.$': 'jquery',
			'Popper': 'popper.js/dist/umd/popper.js'
		}),
	],

	target: 'web'
};