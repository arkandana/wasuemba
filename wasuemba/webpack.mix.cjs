const mix = require('laravel-mix');

mix.js('resources/js/chart.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
    ]);