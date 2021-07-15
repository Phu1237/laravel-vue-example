const mix = require('laravel-mix');
var path = require('path');
require('laravel-mix-purgecss');
require('laravel-mix-blade-reload');

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

mix.options({
    processCssUrls: false
});

// Copy resources
mix.copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/assets/webfonts');

// Compile
mix.js('resources/js/app.js', 'public/assets/js').vue()
    .postCss('resources/css/app.css', 'public/assets/css', [
        require("autoprefixer"),
        require("tailwindcss"),
    ])
    .sass('resources/scss/plugins.scss', 'public/assets/css')
    .purgeCss({
        content: [
            path.join(__dirname, 'resources/**/*.blade.php'),
            path.join(__dirname, 'resources/**/*.js'),
            path.join(__dirname, 'resources/**/*.vue')
        ]
    });

if (mix.inProduction()) {
    mix.version();
} else {
    mix.bladeReload();
    mix.sourceMaps();
}
