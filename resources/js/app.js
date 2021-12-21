import { createApp, h } from "vue";
import { createInertiaApp, Link, Head } from "@inertiajs/inertia-vue3";
import { InertiaProgress } from "@inertiajs/progress";
import Layout from "./Shared/Layout";

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
            .mount(el);
    },

    title: (title) => `${title} - OtaKunnect`,
});

InertiaProgress.init({
    color: "primary",
    showSpinner: true,
});
