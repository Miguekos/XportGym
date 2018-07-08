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

mix.scripts([
    'resources/assets/js/jquery.js',
    'resources/assets/js/bootstrap.min.js',
    'resources/assets/js/jquery.dataTables.min.js',
    'resources/assets/js/dataTables.bootstrap.min.js',
    'resources/assets/js/app.js',
], 'public/js/all.js');

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
    'resources/assets/css/bootstrap.min.css',
    'resources/assets/css/jquery.dataTables.min.css',
    // 'resources/assets/css/dataTables.bootstrap.min.css',
], 'public/css/all.css');
