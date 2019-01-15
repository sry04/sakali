
window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('./../../public/admin/lte/bower_components/jquery-ui/jquery-ui.min.js');
    require('./../../public/admin/lte/bower_components/bootstrap/dist/js/bootstrap.min.js');
    $.widget.bridge('uibutton', $.ui.button);
    require('./../../public/admin/lte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js');
    //require('./../../public/admin/lte/bower_components/moment/min/moment.min.js');
    //require('./../../public/admin/lte/bower_components/bootstrap-daterangepicker/daterangepicker.js');
    require('./../../public/admin/lte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js');
    require('./../../public/admin/lte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js');
    require('./../../public/admin/lte/bower_components/fastclick/lib/fastclick.js');
    require('./../../public/admin/lte/dist/js/adminlte.min.js');
    require('./../../public/admin/lte/dist/js/pages/dashboard.js');
    require('./../../public/admin/lte/dist/js/demo.js');
    require('./../../public/admin/lte/plugins/iCheck/icheck.min.js');
    require('./../../public/js/saodrey.js');
    require('./../../public/admin/lte/bower_components/datatables.net/js/jquery.dataTables.min.js');
    require('./../../public/admin/lte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js');
    require('./../../public/admin/lte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js');

} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     encrypted: true
// });
