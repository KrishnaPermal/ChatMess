import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from "./views/Home.vue";
import Tchat from './views/components/Tchat.vue';
import Login from "./login/Login.vue";
import { Role } from './_helpers/role';
import { authenticationService } from './_services/authentication.service'

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [{
            path: '/',
            name: 'home',
            component: Home,
            //meta: { authorize: [Role.Admin] }
        },

        {
            path: '/login',
            name: 'login',
            component: Login,
       
        },

        {
            path: '/tchat',
            name: 'tchat',
            component: Tchat,
            
        },

    ]
})


router.beforeEach((to, from, next) => {

    // redirect to login page if not logged in and trying to access a restricted page
    const { authorize } = to.meta;

    if (authorize && !_.isEmpty(authorize)) {

        const currentUser = authenticationService.currentUserValue;

        if (!currentUser) {
            // not logged in so redirect to login page with the return url
            return next({ path: "/login", query: { returnUrl: to.path } });
        }

        // check if route is restricted by role
        if (authorize.length && !authorize.includes(currentUser.role.name)) {
            // role not authorised so redirect to home page
            return next({ path: "/" });
        }

    }

    return next();
});




export default router;



