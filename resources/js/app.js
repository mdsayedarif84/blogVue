
import './bootstrap';
window.createApp = 'vue';

import {createApp} from 'vue';
import router from './routes/routes.js';
// import { createRouter,createWebHistory } from 'vue-router'
// const routes      =   [
//     {path   :   '/home',  component: Home },
//     {path   :   '/add-category', component: Add_category },
//     {path   :   '/manage-categories',  component: Manage_categories },
// ];
// const router = createRouter({
//     routes,
//    history: createWebHistory(),
   
//  });


const App = createApp({});

// import ExampleComponet from './components/ExampleComponet.vue';
 import Home from '@/components/backend/home.vue';
 import Add_category from '@/components/backend/category/add-category.vue';
 import Manage_categories from '@/components/backend/category/manage.vue';
 App.component('home',Home)
 App.component('addCategory',Add_category)
//  App.component('manageCategory',Manage_categories)
// Vue.component('home',require('./components/backend/home').default);
App.use(router);
App.mount('#contents');
