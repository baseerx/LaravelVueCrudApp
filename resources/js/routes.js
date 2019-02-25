import Vue from 'vue'
import VueRouter from 'vue-router'
import Example from './components/ExampleComponent'
import Sample from './components/SampleComponent'
Vue.use(VueRouter)
const router = new VueRouter({
    mode: 'history',
    routes: [
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
