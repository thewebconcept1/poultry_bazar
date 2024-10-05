module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                customOrangeLight: "#FCB376",
                customOrangeDark: "#FE8A29",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
