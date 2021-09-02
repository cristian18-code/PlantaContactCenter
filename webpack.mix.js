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

mix.js([        
        'resources/js/app.js',
        'public/sb-admin-2/js/sb-admin-2.js',
        'public/sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'public/sb-admin-2/vendor/jquery-easing/jquery.easing.min.js']
        , 'public/js')
        .styles(['public/sb-admin-2/css/sb-admin-2.css'], 'public/css/app.css');

mix.version();