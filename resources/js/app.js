

import './bootstrap';

// window.Vue = require('vue');
import { createApp } from 'vue';
import {createRouter,createWebHashHistory} from 'vue-router';
const routes = [
  // { path: '/', component: Home },
  // { path: '/about', component: About },
];
const router = createRouter({
  history: createWebHashHistory(),
  routes, // short for `routes: routes`
})
const app = createApp({
  /* root component options */
});

// import ExampleComponent from './components/ExampleComponent.vue';
// app.component('example-component', ExampleComponent);


app.use(router);
app.mount('#content');
