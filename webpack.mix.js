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
// .js('resources/js/app.js', 'public/js')
mix.js('resources/js/admin/admin.js','public/js')
    .js('resources/js/login/login.js','public/js')
    .js('resources/js/home/home.js','public/js')
    .extract(['vue','axios','element-ui'])
    // .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/admin.scss', 'public/css')
    .sass('resources/sass/login.scss', 'public/css')
    .sass('resources/sass/home.scss','public/css');


