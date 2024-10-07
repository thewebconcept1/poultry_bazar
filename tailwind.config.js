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
                customGrayColor: "#F0F0F3",
                customGrayColorDark: "#A4A4AA",
                customBlackColor: "#333333",
            },
            fontSize: {
                custom16: "16px", // Add your custom font size here
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
