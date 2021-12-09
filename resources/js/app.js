require("./bootstrap");

import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";
import store from "./store";

const app = createApp(App).use(router).use(store).mount("#app");
app.config.errorHandler = (err) => {
    alert(err);
};
