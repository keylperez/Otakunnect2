module.exports = {
    // purge: [
    //     "./resources/**/*.blade.php",
    //     "./resources/**/*.js",
    //     "./resources/**/*.vue",
    // ],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                "primary-light": "#f6e399",
                primary: "#e2b714",
                "primary-dark": "#755f0a",
                "secondary-light": "#fff",
                secondary: "#f7f7f7",
                "secondary-dark": "#c4c4c4",
                "quinary-light": "#dd8991",
                quinary: "#ca4754",
                "quinary-dark": "#78222b",
            },
            animation: {
                "drawer-left": "drawer-left 1s ease-in-out",
            },
            keyframes: {
                "drawer-left": {
                    "0%": { transform: "translateX(-150%)" },
                    "100%": { transform: "translateX(0)" },
                },
            },
        },
    },
    plugins: [require("@tailwindcss/forms")],
};
