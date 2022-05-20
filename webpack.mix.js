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

mix .setPublicPath('./wp-content/themes/atmosphair/public')
    .js('wp-content/themes/atmosphair/src/js/script.js', 'wp-content/themes/atmosphair/public/js/')
    .sass('wp-content/themes/atmosphair/src/sass/style.scss', 'wp-content/themes/atmosphair/public/css/')
    .options({
        processCssUrls: false
    })
    .browserSync({
        proxy: 'wordpress-group-b.localhost',
        notify: false
    })
    .version();