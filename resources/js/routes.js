import Vue from 'vue'
import VueRouter from 'vue-router'
import Example from './components/ExampleComponent'
Vue.use(VueRouter)
const router = new VueRouter({
    mode: 'history',
    routes: [
        {
              path: '/',
            component: Example
        }

    ],
});
export default router
// const app = new Vue({
//     el: '#app',
//     routes,
// });
