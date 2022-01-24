const Ziggy = {"url":"http:\/\/otakunnect.test","port":null,"defaults":{},"routes":{"login":{"uri":"login","methods":["GET","HEAD"]}}};

if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export { Ziggy };
