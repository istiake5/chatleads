import Vue from "vue";
import VueRouter from "vue-router";
Vue.use(VueRouter);


import Login from "../components/login/Login"
import Forum from '../components/forum/Forum'
import Read from '../components/forum/read'
import Create from '../components/forum/create'
import Signup from "../components/login/signup"
import Logout from "../components/login/Logout"
const routes = [
    //{ path: "/", component: Parallex },
    { path: "/login", component: Login },
    { path: "/logout", component: Logout },
    { path: "/signup", component: Signup },
    { path: "/movielist", component: Forum, name: 'movielist' },
    { path: "/createmovie", component: Create },
    { path: "/movie/:slug", component: Read, name: 'read' },
    // { path: "/ask", component: Create },
];

const router = new VueRouter({
    routes, // short for `routes: routes`
    hashbang: false,
    mode: "history",
});
export default router;