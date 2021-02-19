import Vue from 'vue';
import Router from 'vue-router';

import Home from '../views/Home.vue';
import Articles from '../views/Articles.vue';
import Article from '../views/Article.vue';

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
    {
        path: '/vijesti/:alias',
        name: 'Article',
        component: Article,
    }
]


const router = new Router({
    mode: 'hash',
    routes
});

export default router;