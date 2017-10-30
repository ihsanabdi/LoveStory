let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
	.js('resources/assets/js/list-vendor/vendor.js', 'public/js')
	.js('resources/assets/js/list-detail-vendor/detail-vendor.js', 'public/js')
	// .sass('resources/assets/sass/love-story.scss', 'public/css');
