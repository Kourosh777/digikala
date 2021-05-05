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

mix.js('resources/js/app.js', 'public/assets/js')
    .sass('resources/sass/app.scss', 'public/assets/css')
    .sourceMaps();



/*mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);*/

/*mix.combine(['resources/assets/css/bootstrap.min.css',
    'resources/assets/css/bootstrap-rtl.css',
    'resources/assets/css/all.css',
    'resources/assets/css/swiperjs.css',
    'resources/assets/css/font.css',
],'public/assets/css/app.css');

mix.combine(['resources/assets/js/jquery-3.5.1.min.js',
    'resources/assets/js/popper.js',
    'resources/assets/js/bootstrap.js',
],'public/assets/js/app.js');*/
