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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .styles('resources/assets/css/homepage.css', 'public/css/homepage.css')
   .styles('resources/assets/css/book-detail.css', 'public/css/book-detail.css')
   .styles('resources/assets/css/auth.css', 'public/css/auth.css')
   .styles('node_modules/admin-lte/dist/css/AdminLTE.min.css', 'public/css/AdminLTE.min.css')
   .js('node_modules/admin-lte/dist/js/adminlte.min.js', 'public/js')
   .styles('node_modules/font-awesome/css/font-awesome.min.css', 'public/css/font-awesome.min.css')
   .copy('node_modules/font-awesome/fonts', 'public/fonts')
   .copy('node_modules/admin-lte/dist/img', 'public/user/images')
   .styles('node_modules/admin-lte/dist/css/skins/skin-blue.min.css', 'public/css/skin-blue.min.css');
......
