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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/index.js', 'public/js')
    .js('resources/js/catalog.js', 'public/js')
    .js('resources/js/catalogDetail.js', 'public/js')
    .js('resources/js/catalogSection.js', 'public/js')
    .js('resources/js/partnership.js', 'public/js')
    .js('resources/js/about.js', 'public/js')
    .js('resources/js/cart.js', 'public/js')
    .js('resources/js/offer.js', 'public/js')
    .styles('resources/css/app.css', 'public/css/app.css')
    .styles('resources/css/headerAndFooter.css', 'public/css/headerAndFooter.css')
    .styles('resources/css/headerAndFooterMain.css', 'public/css/headerAndFooterMain.css')
    .styles('resources/css/index.css', 'public/css/index.css')
    .styles('resources/css/catalog.css', 'public/css/catalog.css')
    .styles('resources/css/catalogSection.css', 'public/css/catalogSection.css')
    .styles('resources/css/catalogDetail.css', 'public/css/catalogDetail.css')
    .styles('resources/css/partnership.css', 'public/css/partnership.css')
    .styles('resources/css/news.css', 'public/css/news.css')
    .styles('resources/css/about.css', 'public/css/about.css')
    .styles('resources/css/contacts.css', 'public/css/contacts.css')
    .styles('resources/css/cart.css', 'public/css/cart.css')
    .styles('resources/css/offer.css', 'public/css/offer.css')
    .styles('resources/css/error.css', 'public/css/error.css')
    .styles('resources/css/nav.css', 'public/css/nav.css')
    .styles('resources/css/form.css', 'public/css/form.css')
    .styles('resources/css/breadcrumbs.css', 'public/css/breadcrumbs.css')
    .styles('resources/css/normalize.css', 'public/css/normalize.css');

mix.copy('resources/images', 'public/images')
    .copy('resources/css/fonts', 'public/fonts');
