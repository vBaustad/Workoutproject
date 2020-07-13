const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 | BETTER BE A PERFECT SCROLLBAR -> it is! -> Good.
 */

mix.js([
    'resources/js/app.js',
    'resources/js/material-dashboard.js',
    'resources/js/core/bootstrap-material-design.min.js',
    'resources/js/core/jquery.min.js',
    'resources/js/core/popper.min.js',
    'resources/js/plugins/bootstrap-notify.js',
    'resources/js/plugins/chartist.min.js',
    'resources/js/plugins/perfect-scrollbar.jquery.min.js',
], 'public/js');

mix.sass('resources/sass/app.scss', 'public/css');
