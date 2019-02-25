import Vue from 'vue'
import VueRouter from 'vue-router'
import Example from './components/AboutComponent'
import Sample from './components/ContactComponent'
import Tasks from './components/TasksComponent'
Vue.use(VueRouter)
const router = new VueRouter({
    mode: 'history',
    routes: [
        {
              path: '/',
            component: Tasks
        },
        {
              path: '/home',
            component: Example
        },
        {
              path: '/sample',
            component: Sample
        }

    ],
});
export default router
// const app = new Vue({
//     el: '#app',
//     routes,
// });
