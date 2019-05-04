require('./bootstrap');
import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);
import App from './components/App.vue';

const router = [{
    name: App,
    path: '/',
    component: App
}];

const routes = new VueRouter({
    mode: 'history',
    routes: routes
});

new Vue(Vue.util.extend({
    router,
    store
}, App)).$mount('#app');
