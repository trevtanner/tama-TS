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
 * This Loads Vuejs Dropdown via npm install bp-vuejs-dropdown --save
 */
import Dropdown from 'bp-vuejs-dropdown';

Vue.use(Dropdown);


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('app-heat-press', require('./components/imprint/HeatPress.vue').default);
Vue.component('app-debossing', require('./components/imprint/Debossing').default);
Vue.component('app-pad-printing', require('./components/imprint/PadPrinting').default);
Vue.component('app-laser-engraving', require('./components/imprint/LaserEngraving.vue').default);
Vue.component('app-embroidery', require('./components/imprint/Embroidery.vue').default);
Vue.component('app-screen-printing', require('./components/imprint/ScreenPrinting.vue').default);
Vue.component('app-imprint-section', require('./components/imprint/ImprintSection.vue').default);
Vue.component('app-header', require('./components/includes/Header.vue').default);
Vue.component('app-footer', require('./components/includes/Footer.vue').default);
Vue.component('app-home-page', require('./components/HomePage.vue').default);
Vue.component('app-home-carousel', require('./components/homepage/HomeCarousel.vue').default);
Vue.component('app-cookie-law', require('./components/includes/CookieLaw.vue').default);
Vue.component('contact-us', require('./components/contact/ContactUs').default);
Vue.component('app-products', require('./components/Products').default);
Vue.component('app-tag-image', require('./components/TagsImage').default);
Vue.component('app-privacy', require('./components/Privacy').default);
Vue.component('app-home-img', require('./components/homepage/HomeImg').default);
Vue.component('app-home-top', require('./components/homepage/TopProducts').default);
Vue.component('app-faq', require('./components/faq/FAQ').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
