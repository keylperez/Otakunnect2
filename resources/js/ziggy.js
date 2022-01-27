const Ziggy = {"url":"http:\/\/localhost:8000","port":8000,"defaults":{},"routes":{"home":{"uri":"\/","methods":["GET","HEAD"]},"login":{"uri":"login","methods":["GET","HEAD"]},"store":{"uri":"store\/{id}","methods":["GET","HEAD"]},"pref.del":{"uri":"category","methods":["POST"]},"product":{"uri":"product\/{id}","methods":["GET","HEAD"]},"product.add":{"uri":"product\/add","methods":["POST"]},"product.del":{"uri":"product\/delete","methods":["POST"]},"product.update":{"uri":"product\/update","methods":["POST"]},"cart":{"uri":"cart","methods":["GET","HEAD"]},"cart.del":{"uri":"cart\/{id}","methods":["GET","HEAD"]},"cart.add":{"uri":"cart\/add","methods":["POST"]}}};

if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export { Ziggy };
