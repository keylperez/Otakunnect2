const Ziggy = {
    url: "http://localhost:8000",
    port: null,
    defaults: {},
    routes: {
        login: { uri: "login", methods: ["GET", "HEAD"] },
        store: { uri: "store/{item}", methods: ["GET", "HEAD"] },
        "pref.del": { uri: "category", methods: ["POST"] },
        product: { uri: "product/{item}", methods: ["GET", "HEAD"] },
        "product.update": { uri: "product", methods: ["POST"] },
    },
};

if (typeof window !== "undefined" && typeof window.Ziggy !== "undefined") {
    Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export { Ziggy };
