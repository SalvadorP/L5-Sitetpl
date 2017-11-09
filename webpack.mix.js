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

mix.setPublicPath('public/');
mix.setResourceRoot('../');
mix.js('resources/assets/js/app.js', 'js')
    .sass('resources/assets/sass/frontend.scss', 'css');
mix.sass('resources/assets/sass/backend.scss', 'css');
// mix.js('resources/assets/js/app.js', 'public/js')
//     .sass('resources/assets/sass/frontend.scss', 'public/css');
// mix.sass('resources/assets/sass/backend.scss', 'public/css');