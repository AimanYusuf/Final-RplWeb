/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        container: {
            center: true,
            padding: "20px",
        },
        extend: {
            colors: {
                primary: "#0ea5e9",
                dark: "#0f172a",
                secondary: "#64748b",
                dangger: "#ef4444",
            },
            screens: {
                "2xl": "1320px",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
