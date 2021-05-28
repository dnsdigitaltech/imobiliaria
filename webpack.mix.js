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

mix    
    .styles('resources/views/admin/assets/css/adminlte.css','public/backend/assets/css/adminlte.css')
    .styles('resources/views/admin/assets/css/adminlte.css.map','public/backend/assets/css/adminlte.css.map')
    .styles('resources/views/admin/assets/plugins/fontawesome-free/css/all.css','public/backend/assets/plugins/fontawesome-free/css/all.css')
    .styles('resources/views/admin/assets/plugins/icheck-bootstrap/icheck-bootstrap.css','public/backend/assets/plugins/icheck-bootstrap/icheck-bootstrap.css')
    .styles('resources/views/admin/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.css','public/backend/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.css')
    .styles('resources/views/admin/assets/plugins/jqvmap/jqvmap.css','public/backend/assets/plugins/jqvmap/jqvmap.css')
    .styles('resources/views/admin/assets/plugins/overlayScrollbars/css/OverlayScrollbars.css','public/backend/assets/plugins/overlayScrollbars/css/OverlayScrollbars.css')
    .styles('resources/views/admin/assets/plugins/daterangepicker/daterangepicker.css','public/backend/assets/plugins/daterangepicker/daterangepicker.css')
    .styles('resources/views/admin/assets/plugins/summernote/summernote-bs4.css','public/backend/assets/plugins/summernote/summernote-bs4.css')
    
    .scripts('resources/views/admin/assets/plugins/jquery/jquery.js', 'public/backend/assets/plugins/jquery/jquery.js')
    .scripts('resources/views/admin/assets/plugins/jquery-ui/jquery-ui.js', 'public/backend/assets/plugins/jquery-ui/jquery-ui.js')
    .scripts('resources/views/admin/assets/plugins/bootstrap/js/bootstrap.bundle.js', 'public/backend/assets/plugins/bootstrap/js/bootstrap.bundle.js')
    .scripts('resources/views/admin/assets/plugins/bootstrap/js/bootstrap.bundle.js.map', 'public/backend/assets/plugins/bootstrap/js/bootstrap.bundle.js.map')
    .scripts('resources/views/admin/assets/plugins/chart.js/Chart.js', 'public/backend/assets/plugins/chart.js/Chart.js')
    .scripts('resources/views/admin/assets/plugins/sparklines/sparkline.js', 'public/backend/assets/plugins/sparklines/sparkline.js')
    .scripts('resources/views/admin/assets/plugins/jqvmap/jquery.vmap.js', 'public/backend/assets/plugins/jqvmap/jquery.vmap.js')
    .scripts('resources/views/admin/assets/plugins/jqvmap/maps/jquery.vmap.usa.js', 'public/backend/assets/plugins/jqvmap/maps/jquery.vmap.usa.js')
    .scripts('resources/views/admin/assets/plugins/jquery-knob/jquery.knob.js', 'public/backend/assets/plugins/jquery-knob/jquery.knob.js')
    .scripts('resources/views/admin/assets/plugins/moment/moment.min.js', 'public/backend/assets/plugins/moment/moment.min.js')
    .scripts('resources/views/admin/assets/plugins/moment/moment.min.js.map', 'public/backend/assets/plugins/moment/moment.min.js.map')
    .scripts('resources/views/admin/assets/plugins/daterangepicker/daterangepicker.js', 'public/backend/assets/plugins/daterangepicker/daterangepicker.js')
    .scripts('resources/views/admin/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.js', 'public/backend/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.js')
    .scripts('resources/views/admin/assets/plugins/summernote/summernote-bs4.js', 'public/backend/assets/plugins/summernote/summernote-bs4.js')
    .scripts('resources/views/admin/assets/plugins/summernote/summernote-bs4.js.map', 'public/backend/assets/plugins/summernote/summernote-bs4.js.map')
    .scripts('resources/views/admin/assets/plugins/plugins/overlayScrollbars/js/jquery.overlayScrollbars.js', 'public/backend/assets/plugins/plugins/overlayScrollbars/js/jquery.overlayScrollbars.js')

    .scripts('resources/views/admin/assets/js/tinymce/tinymce.min.js', 'public/backend/assets/js/tinymce/tinymce.min.js')
    
    .scripts('resources/views/admin/assets/js/adminlte.js', 'public/backend/assets/js/adminlte.js')
    .scripts('resources/views/admin/assets/js/adminlte.min.js', 'public/backend/assets/js/adminlte.min.js')
    .scripts('resources/views/admin/assets/js/adminlte.js.map', 'public/backend/assets/js/adminlte.js.map')
    .scripts('resources/views/admin/assets/js/adminlte.min.js.map', 'public/backend/assets/js/adminlte.min.js.map')
    .scripts('resources/views/admin/assets/js/demo.js', 'public/backend/assets/js/demo.js')

    .scripts('resources/views/admin/assets/js/pages/dashboard.js', 'public/backend/assets/js/pages/dashboard.js')
    
    
    
    /* /plugins/bootstrap/js/bootstrap.bundle.js    .scripts([
        'resources/views/admin/assets/js/login.js'
    ], 'public/backend/assets/js/login.js')
    .scripts([
        'resources/views/admin/assets/js/tinymce/tinymce.min.js',
        'resources/views/admin/assets/js/datatables/js/jquery.dataTables.min.js',
        'resources/views/admin/assets/js/datatables/js/dataTables.responsive.min.js',
        'resources/views/admin/assets/js/select2/js/select2.min.js',
        'resources/views/admin/assets/js/select2/js/i18n/pt-BR.js',
        'resources/views/admin/assets/js/jquery.form.js',
        'resources/views/admin/assets/js/jquery.mask.js',
    ], 'public/backend/assets/js/libs.js')
    .scripts([
        'resources/views/admin/assets/js/scripts.js'
    ], 'public/backend/assets/js/scripts.js')
    */
    .copyDirectory('resources/views/admin/assets/plugins/fontawesome-free/webfonts/', 'public/backend/assets/plugins/fontawesome-free/webfonts/')
    .copyDirectory('resources/views/admin/assets/img', 'public/backend/assets/img')
    //.copyDirectory('resources/views/admin/assets/js/tinymce', 'public/backend/assets/js/tinymce')
    .options({
        processCssUrls: false
    })
    .version()
;
