const mix = require('laravel-mix');
require('dotenv').config();

// Kompilasi file CSS, termasuk input.css yang baru Anda pindahkan
mix.postCss('resources/css/app.css', 'public/css', [
    require('tailwindcss'),
]);

mix.postCss('resources/css/input.css', 'public/css', [
    require('tailwindcss'),
]);
