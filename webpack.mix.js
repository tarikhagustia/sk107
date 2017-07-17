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

mix.js('resources/assets/js/admin/gallery.js', 'public/js/gallery.js')
    .sass('resources/assets/sass/bootstrap-extend.scss', 'public/css/admin/bootstrap-extend.min.css');
