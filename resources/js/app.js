import { createApp, h } from "vue";
import { createInertiaApp, Link, Head } from "@inertiajs/inertia-vue3";
import { InertiaProgress } from "@inertiajs/progress";
import { ZiggyVue } from "ziggy";
import { Ziggy } from "./ziggy";
import Layout from "./Shared/Layout";

Vue.prototype.$route = route;

createInertiaApp({
    resolve: async (name) => {
        let page = (await import(`./Pages/${name}`)).default;

        page.layout ??= Layout;

        return page;
    },
    // resolve: (name) => import(`./Pages/${name}`),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .component("Link", Link)
            .component("Head", Head)
            // .use(router)
            .mount(el)
            .use(ZiggyVue, Ziggy);
    },

    title: (title) => `${title} - OtaKunnect`,
});

InertiaProgress.init({
    color: "primary",
    showSpinner: true,
});

// how to use
// <a class="nav-link" :href="route('home')">Home</a>
