import Logo from './pages/Logo.vue';
import LogoSymbol from './pages/LogoSymbol.vue';
import Colors from './pages/Colors.vue';
import Typography from './pages/Typography.vue';
import Mascot from './pages/Mascot.vue';
import Illustrations from './pages/Illustrations.vue';
import Wallpapers from './pages/Wallpapers.vue';
import SiteStats from './pages/SiteStats.vue';
import Achievements from './pages/Achievements.vue';
import NotFound from './pages/errors/NotFound.vue';

// Dynamic import components
let LoadersAndAnimations = () => import(/* webpackChunkName: 'loaders' */'./pages/LoadersAndAnimations.vue');

export default {
    mode: 'history',

    routes: [
        {
            path: '/',
            component: Logo,
            name: 'logo',
        },
        {
            path: '/logo-symbol',
            component: LogoSymbol,
            name: 'logo-symbol',
        },
        {
            path: '/colors',
            component: Colors,
            name: 'colors',
        },
        {
            path: '/typography',
            component: Typography,
            name: 'typography',
        },
        {
            path: '/mascot',
            component: Mascot,
            name: 'mascot',
        },
        {
            path: '/loaders-and-animations',
            component: LoadersAndAnimations,
            name: 'loaders-and-animations',
        },
        {
            path: '/illustrations',
            component: Illustrations,
            name: 'illustrations',
        },
        {
            path: '/wallpapers',
            component: Wallpapers,
            name: 'wallpapers',
        },
        {
            path: '/site-stats',
            component: SiteStats,
            name: 'site-stats',
        },
        {
            path: '/achievements',
            component: Achievements,
            name: 'achievements',
        },
        {
            path: '*',
            component: NotFound
        }
    ],
};
