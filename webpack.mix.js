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

mix.js('themes/shawnsandy/assets/js/app.js', 'public/js/shawnsandy')
    .js('resources/assets/js/app.js', 'public/js/')
   .sass('themes/shawnsandy/assets/sass/app.scss', 'public/css/shawnsandy')
   .sass('resources/assets/sass/app.scss', 'public/css/')
   ;
