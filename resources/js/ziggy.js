const Ziggy = {"url":"http:\/\/127.0.0.1:8000","port":null,"defaults":{},"routes":{"login":{"uri":"login","methods":["GET","HEAD"]},"store.items":{"uri":"store\/{item}","methods":["GET","HEAD"]},"pref.del":{"uri":"preference","methods":["POST"]},"prod.update":{"uri":"product","methods":["POST"]}}};

if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export { Ziggy };
