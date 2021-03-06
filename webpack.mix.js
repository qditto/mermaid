const mix = require('laravel-mix');

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

mix.sass('resources/sass/frontend/style.scss', 'public/css/frontend')
    .sass('resources/sass/frontend/bootstrap/bootstrap.scss', 'public/css/frontend')
    .sass('resources/sass/frontend/_dark.scss', 'public/css/frontend/dark.css')
    .copyDirectory('resources/css/frontend', 'public/css/frontend')
    .copyDirectory('resources/js/frontend', 'public/js/frontend')
    .copyDirectory('resources/images', 'public/images')


