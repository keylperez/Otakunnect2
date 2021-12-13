import { createApp, h } from "vue";
import { createInertiaApp, Link } from "@inertiajs/inertia-vue3";
import { InertiaProgress } from "@inertiajs/progress";
// import App from "./App.vue";
import router from "./router";
import store from "./store";

// createInertiaApp({
//     resolve: (name) => require(`./Pages/${name}`),
//     setup({ el, App, props, plugin }) {
//         // createApp(App).use(router).use(store).mount("#app");
//         createApp(App);
//     },
// });

createInertiaApp({
    resolve: (name) => require(`./Pages/${name}`),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            // .use(router)
            .mount(el);
    },
});

InertiaProgress.init({
    color: "primary",
    showSpinner: true,
});
