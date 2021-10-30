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
 
  
mix.styles([
    'node_modules/vuexy/app-assets/vendors/css/vendors.min.css',
    'node_modules/vuexy/app-assets/vendors/css/charts/apexcharts.css',
    'node_modules/vuexy/app-assets/css/bootstrap.css',
    'node_modules/vuexy/app-assets/css/bootstrap-extended.css',
    'node_modules/vuexy/app-assets/css/colors.css',
    'node_modules/vuexy/app-assets/css/components.css',
    'node_modules/vuexy/app-assets/css/themes/dark-layout.css',
    'node_modules/vuexy/app-assets/css/themes/bordered-layout.css',
    'node_modules/vuexy/app-assets/css/themes/semi-dark-layout.css',
    'node_modules/vuexy/app-assets/css/core/menu/menu-types/vertical-menu.css',
    'node_modules/vuexy/app-assets/css/pages/dashboard-ecommerce.css',
    'node_modules/vuexy/app-assets/css/plugins/charts/chart-apex.css',
    'node_modules/vuexy/app-assets/vendors/css/calendars/fullcalendar.min.css',
    'node_modules/vuexy/app-assets/vendors/css/forms/select/select2.min.css',
    'node_modules/vuexy/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css',


    'node_modules/vuexy/assets/css/style.css',

    
    ], 'public/css/app.css');


mix.scripts([

    'node_modules/vuexy/app-assets/vendors/js/vendors.min.js',
    'node_modules/vuexy/app-assets/vendors/js/ui/jquery.sticky.js',
    'node_modules/vuexy/app-assets/vendors/js/calendar/fullcalendar.min.js',
    'node_modules/vuexy/app-assets/vendors/js/extensions/moment.min.js',
    'node_modules/vuexy/app-assets/vendors/js/forms/select/select2.full.min.js',
    'node_modules/vuexy/app-assets/vendors/js/forms/validation/jquery.validate.min.js',
    'node_modules/vuexy/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js',
    'node_modules/vuexy/app-assets/vendors/js/charts/apexcharts.min.js',
    'node_modules/vuexy/app-assets/js/core/app-menu.js',
    'node_modules/vuexy/app-assets/js/core/app.js',



], 'public/js/app.js');
