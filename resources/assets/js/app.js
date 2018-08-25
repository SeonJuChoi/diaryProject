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
import SignUp from './components/signup';

const router = new VueRouter({
        routes: [
            // <-- main Page
            {
                path: '/login',
                name: 'home',
                component: Login
            },
            {
                path: '/',
                name: 'mainPage',
                component: Home
            }
            ,
            {
                path: '/main',
                name: 'mainPage',
                component: Home
            },
            {
                path: '/signup',
                name: 'mainPage',
                component: SignUp
            }
        ],
        mode: 'history'
    }
);

new Vue({
    el: '#app',
    router: router,
    render: app => app(App)
});