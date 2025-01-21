import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import ContactView from '../views/ContactView'
import edit from '../views/Edit'
import Login from '../views/Login'
import dashboard from '../views/Dashboard'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/about',
    name: 'about',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/AboutView.vue')
  },
  {
    path: '/ContactView',
    name:'contact',
    component: ContactView
  },
  {
    path: '/Edit/:id',
    name:'edit',
    component: edit
  },
  {
    path: '/Login',
    name:'Login',
    component: Login
  },
  {
    path: '/dashboard',
    name:'dashboard',
    component: dashboard
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
