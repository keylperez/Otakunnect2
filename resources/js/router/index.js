import { createRouter, createWebHistory } from "vue-router";
import Home from "../views/Home.vue";

const routes = [
    {
        path: "/:catchAll(.*)",
        name: "404",
        component: () => import("../components/404.vue"),
    },
    {
        path: "/",
        name: "Home",
        component: Home,
    },
    {
        path: "/afk",
        name: "Afk",
        component: () => import("../views/Afk.vue"),
    },
    {
        path: "/login",
        name: "Login",
        component: () => import("../views/Login.vue"),
    },
    {
        path: "/signup",
        name: "Signup",
        component: () => import("../views/Signup.vue"),
    },
    {
        path: "/store",
        name: "Store",
        component: () => import("../views/Stores.vue"),
    },
    {
        path: "/category",
        name: "Category",
        component: () => import("../views/Category.vue"),
    },
    {
        path: "/contact",
        name: "Contact",
        component: () => import("../views/contact.vue"),
    },
    // {
    //     path: "/item/:name",
    //     name: "Item",
    //     // route level code-splitting
    //     // this generates a separate chunk (item.[hash].js) for this route
    //     // which is lazy-loaded when the route is visited.
    //     component: () =>
    //         import(/* webpackChunkName: "item" */ "../views/Item.vue"),
    // },
];

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    linkActiveClass: "font-bold",
    routes,
});

export default router;
