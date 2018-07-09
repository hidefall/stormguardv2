// const { mix } = require('laravel-mix');
let mix = require('laravel-mix');
mix.setPublicPath('./');

mix.js('js/src/app.js', 'js/dist/')
   .sass('sass/style.scss', '/css/style.css');
//    mix.options({
//     processCssUrls: false,
//     autoprefixer: false
// });