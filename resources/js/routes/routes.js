    import { createRouter,createWebHistory } from 'vue-router'
    import Home from '../components/backend/home.vue';
    import Add_category from '../components/backend/category/add-category.vue';
    import Manage_categories from '@/components/backend/category/manage.vue';
     const routes      =   [
         {path   :   '/home', name:'Home', component: Home },
         {path   :   '/add-category', name:'AddCategory', component: Add_category },
         {path   :   '/manage-categories', name:'ManageCategory', component: Manage_categories },
    ];
    const router = createRouter({
        routes,
        history: createWebHistory(),
        
      });
       export default router;