const mix = require("laravel-mix");

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

const path = require("path");

mix
  .js("resources/js/app.js", "public/js")
  .vue()
  .extract()
  .copyDirectory("resources/img", "public/img")
  .postCss("resources/css/app.css", "public/css", [require("tailwindcss")])
  .version()
  .alias({ ziggy: path.resolve("vendor/tightenco/ziggy/dist/vue") });
