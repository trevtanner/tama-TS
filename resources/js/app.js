/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * This loads Portal Vue
 *
 * PortalVue is a set of two components that allow you to render a component's
 * template (or a part of it) anywhere in the document - even outside the part
 * controlled by your Vue App
 */

import PortalVue from 'portal-vue';

Vue.use(PortalVue);

/**
 * This loads BootstrapVue
 *
 * BootstrapVue, with over 40 plugins and more than 80 custom components, provides
 * one of the most comprehensive implementations of Bootstrap v4 components and grid
 * system for Vue.js. With extensive and automated WAI-ARIA accessibility markup
 */
import Vue from 'vue';
import BootstrapVue from 'bootstrap-vue';

Vue.use(BootstrapVue);


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('app-heat-press', require('./components/HeatPress.vue').default);
Vue.component('app-laser-engraving', require('./components/LaserEngraving.vue').default);
Vue.component('app-embroidery', require('./components/Embroidery.vue').default);
Vue.component('app-screen-printing', require('./components/ScreenPrinting.vue').default);
Vue.component('app-home-page', require('./components/HomePage.vue').default);
Vue.component('app-header', require('./components/includes/Header.vue').default);
Vue.component('app-footer', require('./components/includes/Footer.vue').default);
Vue.component('app-home-carousel', require('./components/homepage/HomeCarousel.vue').default);
Vue.component('app-cookie-law', require('./components/includes/CookieLaw.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
