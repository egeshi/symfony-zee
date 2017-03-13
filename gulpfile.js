const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    mix.sass([
        'bootstrap.scss',
        '../../../bower_components/tether/dist/css/tether.css',
    ], 'public/css/vendor.sass.css')
        .scripts([
            '../../../bower_components/jquery/dist/jquery.js',
            '../../../bower_components/tether/dist/js/tether.js',
            '../../../bower_components/bootstrap/dist/js/bootstrap.js',
        ], 'public/js/vendor.js')
    ;
});
