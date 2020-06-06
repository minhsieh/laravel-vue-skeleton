import Vue from 'vue'
import Home from "../views/Home"
import Login from "../views/Login"
import Register from "../views/Register"
import VueRouter from 'vue-router'

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home,
  },
  {
    path: '/login',
    name: 'Login',
    component: Login,
  },
  {
    path: '/register',
    name: 'Register',
    component: Register,
  },
];

Vue.use(VueRouter)

const router = new VueRouter({
  routes,
  mode: 'history'
})

Vue.router = router

export default router
