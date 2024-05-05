import {createRouter, createWebHistory} from "vue-router"
import store from '../store'
import Login from '../pages/LoginPage.vue'
import Register from '../pages/RegisterPage.vue'
import NotFoundPage from '../pages/404Page.vue'
import StaffPage from '../pages/StaffPage.vue'
import UserPage from '../pages/UserPage.vue'

const routes = [
    {path: '/', name: 'login', component: Login, meta: {guest: true}},
    {path: '/register', name: 'register', component: Register, meta: {guest: true}},
    {path: '/staff', name: 'staff', component: StaffPage, meta: {login: true}},
    {path: '/user', name: 'user', component: UserPage, meta: {login: true}},
    {path: '/:pathMatch(.*)*', component: NotFoundPage, meta: {login: true}},
]

const router = createRouter({
    history: createWebHistory(),
    routes,
})


router.beforeEach((to, from, next) => {
    window.scrollTo(0, 0);
    if(to.matched.some(record => record.meta.login)){
        if (!store.getters.GET_AUTH_TOKEN){
        next({
            name: 'login'
        })
        } else {
        next()
        }
    } else if(to.matched.some(record => record.meta.guest)){
        if (store.getters.GET_AUTH_TOKEN) {
        next({
            name: 'staff'
        })
        } else {
        next()
        }
    } else {
        next()
    }
});

export default router;
