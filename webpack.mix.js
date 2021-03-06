const mix = require('laravel-mix');
const domain = 'my-portfolio.test';
const homedir = require('os').homedir();
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
    .vue()
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require("tailwindcss"),
    ])
    .sass("resources/sass/main.sass", "public/css")
    .copy(
        'node_modules/@fortawesome/fontawesome-free/webfonts',
        'public/webfonts'
    )
    .webpackConfig(require('./webpack.config'))
    .browserSync({
        proxy: 'https://' + domain,
        notify: {
            styles: {
                top: 'auto',
                bottom: '-20rem'
            }
        },
        host: domain,
        open: 'external',
        https: {
            key: homedir + "/.config/valet/Certificates/" + domain + ".key",
            cert: homedir + "/.config/valet/Certificates/" + domain + ".crt"
        },
    });

mix.copy('resources/img', 'public/img');

if (mix.inProduction()) {
    mix.version();
}

mix.webpackConfig({
    output: {
        chunkFilename: "js/[name].js?id=[chunkhash]",
    },
});
