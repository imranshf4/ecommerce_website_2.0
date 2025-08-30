import { createRouter, createWebHistory } from 'vue-router';
import Home from '../components/Home.vue';
import About from '../components/About.vue';

const routes = [
  { path: '/',  redirect: '/admin/dashboard' },
  { path: '/admin/dashboard', component: Home },
  { path: '/admin/about', component: About },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router
