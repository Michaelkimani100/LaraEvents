require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue'
import VueRouter from 'vue-router'
import axios from 'axios'
import VueAxios from 'vue-axios'
import { Form, HasError, AlertError } from 'vform'
Vue.use(VueRouter)
Vue.use(VueAxios, axios)
window.Form = Form




Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('product', require('./components/Product.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

let routes = [

    { path: '/product', component: require('./components/Product.vue').default },


]

const router = new VueRouter({
    mode: 'history',
    routes
})







const app = new Vue({
    el: '#app',
    router
});