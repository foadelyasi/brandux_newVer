const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */



mix.styles([
    'resources/front/assets/css/theme-plugin.css',
    'resources/front/assets/css/theme.min.css',
    'resources/front/assets/css/xzoom.css',
    'resources/admin/assets/plugins/sweet-alert/sweetalert.css',
    'resources/admin/assets/css/loader.css',
], 'public/css/front.css')
    .scripts([
        'resources/front/assets/js/theme-plugin.js',
        'resources/front/assets/js/theme-script.js',
        'resources/front/assets/js/xzoom.js',
        'resources/admin/assets/plugins/sweet-alert/sweetalert.min.js',

    ], 'public/js/front.js')



