import Vue from 'vue';
import Router from 'vue-router';

import Home from '../views/Home.vue';
import Articles from '../views/Articles.vue';

Vue.use(Router);

const routes = [
    {
        path: '/',
        name: 'Naslovnica',
        component: Home,
    },
    {
        path: '/vijesti',
        name: 'Articles',
        component: Articles,
    },
]


const router = new Router({
    mode: 'hash',
    routes
});

export default router;