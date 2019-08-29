import Home from './pages/Home.vue';
import About from './pages/About.vue';

export default {
    mode: 'history',

    routes: [
        {
            path: '/',
            component: Home,
        },
        {
            path: '/about',
            component: About,
        },
    ],
};
