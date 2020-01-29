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

mix
    .copy('node_modules/@fortawesome/fontawesome-free/webfonts','public/webfonts')
    .scripts([
        'node_modules/jquery/dist/jquery.js',
        'node_modules/popper.js/dist/popper.js',
        'node_modules/bootstrap/dist/js/bootstrap.js',
        'node_modules/jquery.nicescroll/dist/jquery.nicescroll.js',
        'node_modules/moment/moment.js',
        'resources/js/stisla.js',
    ], 'public/assets/js/require.js')
    .scripts([
        'resources/js/scripts.js',
    ], 'public/assets/js/layout.js')
    .sass('resources/sass/app.scss', 'public/assets/css/require.css')
    .styles([
        'node_modules/bootstrap/dist/css/bootstrap.css',
        'node_modules/@fortawesome/fontawesome-free/scss/fontawesome',
        'resources/css/style.css',
        'resources/css/components.css',
    ],'public/assets/css/layout.css');
