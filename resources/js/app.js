import Vue from 'vue'
import VueRouter from 'vue-router'
import routes from './routes';

Vue.use(VueRouter);

require('./bootstrap');

const app = new Vue({
    el: '#app',
    router: new VueRouter(routes)
});
