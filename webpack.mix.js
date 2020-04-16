const mix = require('laravel-mix');

const tailwindcss = require('tailwindcss');

require('laravel-mix-purgecss');


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

mix.js('resources/themes/Strix/js/app.js', 'public/themes/Strix/js')

    .sass('resources/themes/Strix/sass/app.scss', 'public/themes/Strix/css')
    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('resources/themes/Strix/config/tailwind.config.js') ],
    });


if (mix.inProduction()) {
    mix.purgeCss();
}
