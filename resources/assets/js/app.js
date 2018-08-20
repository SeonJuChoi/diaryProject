import Vue from 'vue';
import VueRouter from 'vue-router';
import App from './App.vue';
import VueAxios from 'vue-axios';
import axios from 'axios';
import Vuetify from 'vuetify';
import 'vuetify/dist/vuetify.min.css';
Vue.use(VueAxios, axios);
Vue.use(VueRouter);
Vue.use(Vuetify);

import Home from './components/home.vue';
import Login from './components/login.vue';

const router = new VueRouter({
        routes: [
            // <-- main Page
            {
                path: '/',
                name: 'home',
                component: Login
            },
        ],
        mode: 'history'
    }
);

new Vue({
    el: '#app',
    router: router,
    render: app => app(App)
});