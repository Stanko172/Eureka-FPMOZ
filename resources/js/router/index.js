import Vue from 'vue';
import Router from 'vue-router';

import Home from '../views/Home.vue';

Vue.use(Router);

const routes = [
    {
        path: '/',
        name: 'Naslovnica',
        component: Home,
    }
]


const router = new Router({
    mode: 'hash',
    routes
});

export default router;