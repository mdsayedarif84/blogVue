    import { createRouter,createWebHistory } from 'vue-router';
    import AdminHome from '../components/admin/home/index.vue';
    import PagesHome from '../components/pages/index.vue';
    import NotFound from '../components/notFound.vue';
    import Login from '../components/auth/login.vue';
    export const routes      =   [
        {path   :   '/adminHome', component: AdminHome },
        {path   :   '/', component: PagesHome },
        {path   :   '/login', component: Login },
        {path   :   '/:pathMatch(.*)*', component: NotFound  },
    ];
    const router = createRouter({
        history: createWebHistory(import.meta.env.BASE_URL),
        routes
    });
    export default router;