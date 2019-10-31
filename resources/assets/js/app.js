bsCustomFileInput = require('mdbootstrap/js/modules/bs-custom-file-input');
lottie = require('lottie-web/build/player/lottie');

lottie.loadAnimation({
    container: 'proceso', // the dom element that will contain the animation
    renderer: 'svg',
    loop: false,
    autoplay: true,
    path: 'lottie/Analisis_Aprobado.json' // the path to the animation json
});

window._ = require('lodash');
window.Popper = require('mdbootstrap/js/popper.min').default;

try {
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}


/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('mdbootstrap/js/jquery-3.4.1.min');
require('mdbootstrap/js/bootstrap');
require('mdbootstrap/js/mdb');
require('./fontawesome_all');
require('./jquery.bootstrap');
require('./material-bootstrap-wizard');
require('./jquery.validate.min');
require('datatables.net/js/jquery.dataTables');
window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});
