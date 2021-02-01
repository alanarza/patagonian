let mix = require('laravel-mix');

mix.webpackConfig({
    resolve: {
        extensions: ['.js','.vue'],
        alias: {
            '@': __dirname + '/resources'
        }
    }
});

mix.js('resources/js/app.js', 'dist/')
    .stylus('resources/css/app.styl', 'dist/')
    .version();